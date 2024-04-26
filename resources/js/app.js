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



const canvas = document.getElementById("game");
const context = canvas.getContext("2d");
canvas.width = 975;
canvas.height = 445;

const paddleWidth = 18,
  paddleHeight = 120,
  ballRadius = 12,
  initialBallSpeed = 8,
  maxBallSpeed = 100,
  netWidth = 5,
  netColor = "WHITE";

function drawNet() {
  for (let i = 0; i < canvas.height; i += 15) {
    drawRect(canvas.width / 2 - netWidth / 2, i, netWidth, 10, netColor);
  }
}

function drawRect(x, y, width, height, color) {
  context.fillStyle = color;
  context.fillRect(x, y, width, height);
}

function drawCircle(x, y, radius, color) {
  context.fillStyle = color;
  context.beginPath();
  context.arc(x, y, radius, 0, Math.PI * 2, false);
  context.closePath();
  context.fill();
}

function drawText(text, x, y, color, fontSize = 60, fontWeight = "bold", font = "Courier New") {
  context.fillStyle = color;
  context.font = `${fontWeight} ${fontSize}px ${font}`;
  context.textAlign = "center";
  context.fillText(text, x, y);
}

function createPaddle(x, y, width, height, color) {
  return { x, y, width, height, color, score: 0 };
}

function createBall(x, y, radius, velocityY, velocityX, color) {
  return { x, y, radius, velocityY, velocityX, color, speed: initialBallSpeed };
}

const user = createPaddle(15, canvas.height / 2 - paddleHeight / 2, paddleWidth, paddleHeight, "WHITE");

const com = createPaddle(canvas.width - paddleWidth - 15, canvas.height / 2 - paddleHeight / 2, paddleWidth, paddleHeight, "WHITE");
const ball = createBall(canvas.width / 2, canvas.height / 2, ballRadius, initialBallSpeed, initialBallSpeed, "WHITE");

canvas.addEventListener("mousemove", movePaddle);

function movePaddle(event) {
    const rect = canvas.getBoundingClientRect();
    let mouseY = event.clientY - rect.top;
    mouseY = Math.max(user.height / 2, Math.min(canvas.height - user.height / 2, mouseY));
    user.y = mouseY - user.height / 2;
  }

function collision(b, p) {
  return b.x + b.radius > p.x && b.x - b.radius < p.x + p.width && b.y + b.radius > p.y && b.y - b.radius < p.y + p.height;
}

function resetBall() {
  ball.x = canvas.width / 2;
  ball.y = Math.random() * (canvas.height - ball.radius * 2) + ball.radius;
  ball.velocityY = -ball.velocityX;
  ball.speed = initialBallSpeed;
}

function update() {
  if (ball.x - ball.radius < 0) {
    com.score++;
    resetBall();
  } else if (ball.x + ball.radius > canvas.width) {
    user.score++;
    resetBall();
  }

  ball.x += ball.velocityX;
  ball.y += ball.velocityY;

  com.y += (ball.y - (com.y + com.height / 2)) * 0.1;

  if (ball.y - ball.radius < 0 || ball.y + ball.radius > canvas.height) {
    ball.velocityY = -ball.velocityY; // Corrected velocidadY to velocityY
  }

  let player = ball.x + ball.radius < canvas.width / 2 ? user : com;
  if (collision(ball, player)) {
    const collidePoint = ball.y - (player.y + player.height / 2);
    const collisionAngle = (Math.PI / 4) * (collidePoint / (player.height / 2));
    const direction = ball.x + ball.radius < canvas.width / 2 ? 1 : -1;
    ball.velocityX = direction * ball.speed * Math.cos(collisionAngle);
    ball.velocityY = ball.speed * Math.sin(collisionAngle);

    ball.speed += 0.2;
    if (ball.speed > maxBallSpeed) {
      ball.speed = maxBallSpeed;
    }
  }
}
function drawRoundedRect(x, y, width, height, radius, color) {
    context.fillStyle = color;
    context.beginPath();
    context.moveTo(x + radius, y);
    context.lineTo(x + width - radius, y);
    context.quadraticCurveTo(x + width, y, x + width, y + radius);
    context.lineTo(x + width, y + height - radius);
    context.quadraticCurveTo(x + width, y + height, x + width - radius, y + height);
    context.lineTo(x + radius, y + height);
    context.quadraticCurveTo(x, y + height, x, y + height - radius);
    context.lineTo(x, y + radius);
    context.quadraticCurveTo(x, y, x + radius, y);
    context.closePath();
    context.fill();
  }

  function render() {
    drawRect(0, 0, canvas.width, canvas.height, "BLACK");
    drawNet();
    drawText(user.score, canvas.width / 4, canvas.height / 2, "GRAY", 120, "bold");
    drawText(com.score, (3 * canvas.width) / 4, canvas.height / 2, "GRAY", 120, "bold");
    drawRoundedRect(user.x, user.y, user.width, user.height, 8, "GREEN");
    drawRoundedRect(com.x, com.y, com.width, com.height, 8, "YELLOW");
    drawCircle(ball.x, ball.y, ball.radius, ball.color);
  }


function gameLoop() {
  update();
  render();
}

const framePerSec = 60;
setInterval(gameLoop, 1000 / framePerSec);
