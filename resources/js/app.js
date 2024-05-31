import './bootstrap';

const estelas = [];

function crearEstela(x, y) {
  const estela = document.createElement('div');
  estela.className = 'estela';
  estela.style.left = x + 'px';
  estela.style.top = y + 'px';
  document.body.appendChild(estela);
  setTimeout(() => {
    estela.remove();
  }, 100); // Duración de la estela en milisegundos
}

function crearCuadro() {
  const cuadro = document.createElement('div');
  cuadro.className = 'cuadro';
  cuadro.style.left = Math.random() * window.innerWidth + 'px'; // Posición horizontal aleatoria
  cuadro.style.top = '-20px'; // Comienza fuera de la pantalla arriba
  document.getElementById('contenedor').appendChild(cuadro);
  moverCuadro(cuadro);
}

function moverCuadro(cuadro) {
  let y = -20; // Comienza fuera de la pantalla arriba
  let x = parseFloat(cuadro.style.left); // Posición horizontal actual
  let velocidadY = 6; // Velocidad en Y entre 1 y 4 pixels por frame
  let stopY = window.innerHeight - 25; // Posición de parada a unos 50 píxeles antes del borde inferior


  const animacion = () => {
    if (y < stopY) {
      y += velocidadY;
      cuadro.style.top = y + 'px';
      crearEstela(x, y); // Crea una estela en la posición actual del cuadro
      requestAnimationFrame(animacion);
    } else {
      cuadro.remove();
    }
  };

  animacion();
}

setInterval(crearCuadro, 100); // Crea un nuevo cuadro cada 100 milisegundos

// HASTA AQUÍ SE MANEJA LOS CUADROS DEL FONDO EN EL HOME------------------------------------------------------------

