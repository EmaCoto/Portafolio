# DOCKER RUNBOOK — Astro en Docker (DEV + BUILD)

Esta guía cubre:
- **DEV (hot reload)** con Docker (lo que estás usando diario).
- **BUILD (producción / preview)**: cómo generar `dist/` y cómo servirlo.

---

## 0) Objetivo
Correr tu proyecto **Astro** dentro de Docker para:
1) Desarrollar con **hot reload** (sin depender de Node instalado en Windows).
2) Construir el proyecto con **`npm run build`** de forma reproducible.

---

## 1) Requisitos
- Docker Desktop funcionando (WSL2/virtualización habilitada).
- Proyecto Astro existente (`package.json`, `astro.config.mjs`, `src/`, etc.).

---

## 2) Estructura mínima (raíz del proyecto)
```
astro-project/
  package.json
  package-lock.json (si aplica)
  astro.config.mjs
  src/
  public/ (opcional)
  Dockerfile
  docker-compose.yml
  .dockerignore
```

---

## 3) Imágenes usadas
Docker las descarga automáticamente:
- `node:24-alpine` (DEV + build)

> Puedes cambiar a `node:22-alpine` o `node:20-alpine` si quieres, pero `24` es LTS moderno y estable.

---

## 4) .dockerignore (recomendado)
Crea `.dockerignore`:

```gitignore
node_modules
dist
.astro
.git
.vscode
.idea
npm-debug.log
.env
```

---

# PARTE A — DEV (Hot Reload)

## A1) Dockerfile (DEV)
Crea `Dockerfile`:

```dockerfile
FROM node:24-alpine

WORKDIR /app

# Dependencias (primero package*.json para cache)
COPY package*.json ./
RUN npm ci || npm install

# Código
COPY . .

# Astro dev server (default: 4321)
EXPOSE 4321

CMD ["npm", "run", "dev", "--", "--host", "0.0.0.0", "--port", "4321"]
```

**Notas**
- `--host 0.0.0.0` es obligatorio para que el puerto sea accesible desde tu navegador.
- `npm ci` se usa si existe `package-lock.json`; si no, cae a `npm install`.

---

## A2) docker-compose.yml (DEV + Hot Reload estable en Windows)
En Windows, los file watchers a veces no detectan cambios con bind mounts. Por eso agregamos **polling** con `CHOKIDAR_*`.

Crea `docker-compose.yml`:

```yaml
services:
  astro:
    build: .
    container_name: astro_dev
    ports:
      - "4321:4321"
    volumes:
      - ./:/app
      - /app/node_modules
    environment:
      - NODE_ENV=development
      - CHOKIDAR_USEPOLLING=true
      - CHOKIDAR_INTERVAL=200
```

**Por qué esos volumes**
- `./:/app` monta tu código para que los cambios se reflejen al instante.
- `/app/node_modules` evita que `node_modules` de Windows “pise” los del contenedor.

**Tuning de polling**
- `200` ms = muy rápido (más CPU)
- `300–500` ms = menos CPU, igual usable

---

## A3) Comandos DEV (día a día)
### Levantar (primera vez o si cambiaste Dockerfile)
```bash
docker compose up -d --build
```

### Levantar (normal, sin rebuild)
```bash
docker compose up -d
```

### Ver estado
```bash
docker compose ps
```

### Logs en vivo
```bash
docker compose logs -f astro
```

### Reiniciar (si se queda “tonto” el hot reload)
```bash
docker compose restart astro
```

### Apagar
```bash
docker compose down
```

---

## A4) URL
- DEV: **http://localhost:4321**

---

# PARTE B — BUILD (npm run build) + PREVIEW

Astro tiene 2 cosas distintas:
- `npm run build` → genera la carpeta **`dist/`**
- `npm run preview` → sirve **`dist/`** para probar “como producción”

## B1) Ejecutar `npm run build` (dentro del contenedor)
```bash
docker compose exec astro npm run build
```

**Qué debes ver**
- Se crea/actualiza `dist/` en tu proyecto.

Verificar:
```bash
docker compose exec astro sh -lc "ls -la dist | head -n 20"
```

---

## B2) Ejecutar `npm run preview` (probar el build)
Por defecto Astro preview usa el puerto **4321** si está libre, pero en tu caso DEV ya lo usa.

### Opción 1 (recomendada): parar DEV y correr preview
1) Apaga DEV:
```bash
docker compose down
```

2) Corre preview:
```bash
docker compose up -d --build
docker compose exec astro npm run build
docker compose exec astro npm run preview -- --host 0.0.0.0 --port 4321
```

Abre:
- http://localhost:4321

> Nota: esta forma deja el proceso de preview “ocupando” la terminal.

### Opción 2 (más pro): agregar un servicio `astro_preview` (puerto distinto)
Edita `docker-compose.yml` y agrega:

```yaml
  astro_preview:
    image: node:24-alpine
    working_dir: /app
    volumes:
      - ./:/app
      - /app/node_modules
    ports:
      - "4322:4321"
    command: sh -lc "npm install && npm run build && npm run preview -- --host 0.0.0.0 --port 4321"
```

Luego:
```bash
docker compose up -d astro_preview
docker compose logs -f astro_preview
```

Abre preview en:
- **http://localhost:4322**

---

## B3) “Build limpio” (reinstalar deps y compilar)
Si sospechas que deps están raras:

```bash
docker compose exec astro sh -lc "rm -rf node_modules dist .astro && npm install && npm run build"
```

---

# 5) Comandos útiles extra

### Ver versiones exactas dentro del contenedor
```bash
docker compose exec astro node -v
docker compose exec astro npm -v
```

### Correr cualquier script npm
```bash
docker compose exec astro npm run lint
docker compose exec astro npm run format
```

---

# 6) Troubleshooting rápido

## A) No se reflejan cambios
- Asegúrate de tener:
  - `CHOKIDAR_USEPOLLING=true`
  - `CHOKIDAR_INTERVAL=200`
- Reinicia:
```bash
docker compose restart astro
```

## B) Puerto ocupado (4321)
Cambia el puerto del host en `docker-compose.yml`:

```yaml
ports:
  - "4322:4321"
```

y levanta:
```bash
docker compose up -d
```

Abre:
- http://localhost:4322

---

# Mini-resumen (para tu yo del futuro)
- **DEV:** `docker compose up -d` → http://localhost:4321
- **BUILD:** `docker compose exec astro npm run build`
- **PREVIEW:** `docker compose exec astro npm run preview -- --host 0.0.0.0 --port 4321`
- **Logs:** `docker compose logs -f astro`
- **Rebuild:** `docker compose up -d --build`
- **Down:** `docker compose down`
