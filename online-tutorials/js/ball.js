// class Ball {
//   constructor({

//   }) {

//   }
// }

const createBall = () => {
  const body = document.body;
  const ball = document.createElement('div');

  const b = {
    x: 50,
    y: 30,
    w: 40,
    h: 40,
    dx: 1,
    dy: 1,
    speed: 2,
    ani: {},
    move: false,
  };

  const mover = () => {
    if (b.x > body.offsetWidth - b.w || b.x < 0) {
      b.dx *= -1;
    }

    if (b.y > body.offsetHeight - b.h || b.y < 0) {
      b.dy *= -1;
    }

    b.x += b.dx * b.speed;
    b.y += b.dy * b.speed;

    ball.style.left = `${b.x}px`;
    ball.style.top = `${b.y}px`;

    if (b.move) {
      b.ani = requestAnimationFrame(mover);
    }
  };

  ball.style.width = `${b.w}px`;
  ball.style.height = `${b.h}px`;

  ball.style.left = `${b.x}px`;
  ball.style.top = `${b.y}px`;

  body.appendChild(ball);

  ball.addEventListener('click', () => {
    if (!b.move) {
      b.ani = requestAnimationFrame(mover);
      b.move = true;
    } else {
      cancelAnimationFrame(b.ani);
      b.move = false;
    }
  });
};

// createBall();

const initBall = () => {
  const body = document.body;
  const balls = body.querySelectorAll('.ball');

  balls.forEach((ball) => {
    const b = {
      x: 50,
      y: 30,
      w: ball.offsetWidth,
      h: ball.offsetWidth,
      dx: 1,
      dy: 1,
      speed: 2,
      ani: {},
      move: false,
    };

    const mover = () => {
      if (b.x > body.offsetWidth - b.w || b.x < 0) {
        b.dx *= -1;
      }

      if (b.y > body.offsetHeight - b.h || b.y < 0) {
        b.dy *= -1;
      }

      b.x += b.dx * b.speed;
      b.y += b.dy * b.speed;

      ball.style.left = `${b.x}px`;
      ball.style.top = `${b.y}px`;

      if (b.move) {
        b.ani = requestAnimationFrame(mover);
      }
    };

    ball.style.height = `${b.h}px`;

    ball.style.left = `${b.x}px`;
    ball.style.top = `${b.y}px`;

    ball.addEventListener('click', () => {
      if (!b.move) {
        b.ani = requestAnimationFrame(mover);
        b.move = true;
      } else {
        cancelAnimationFrame(b.ani);
        b.move = false;
      }
    });
  });
};

initBall();
