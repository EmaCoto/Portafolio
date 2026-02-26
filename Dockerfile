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