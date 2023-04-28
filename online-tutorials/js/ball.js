class Ball {
  constructor({ ball, container } = {}) {
    this.ball = ball;
    this.container = container ?? document.body;

    this.x = ball?.dataset?.x ? Number(ball.dataset.x) : 50;
    this.y = ball?.dataset?.y ? Number(ball.dataset.y) : 30;

    this.w = ball?.offsetWidth ?? 40;
    this.h = ball?.offsetWidth ?? 40;

    this.dx = ball?.dataset?.dx ? Number(ball.dataset.dx) : 1;
    this.dy = ball?.dataset?.dy ? Number(ball.dataset.dy) : 1;

    this.speed = ball?.dataset?.speed ? Number(ball.dataset.speed) : 3;

    this.ani = {};
    this.move = false;

    this.onMoverHandler = this.mover.bind(this);
    this.onMouseEnterHandler = this.mouseEnterHandler.bind(this);
    this.onMouseLeaveHandler = this.mouseLeaveHandler.bind(this);
  }

  mover() {
    if (this.x > this.container.offsetWidth - this.w || this.x < 0) {
      this.dx *= -1;
    }

    if (this.y > this.container.offsetHeight - this.h || this.y < 0) {
      this.dy *= -1;
    }

    this.x += this.dx * this.speed;
    this.y += this.dy * this.speed;

    this.ball.style.left = `${this.x}px`;
    this.ball.style.top = `${this.y}px`;

    if (this.move) {
      this.ani = requestAnimationFrame(this.onMoverHandler);
    }
  }

  init() {
    // console.log('init');

    if (!this.ball) {
      this.ball = document.createElement('div');

      this.container.appendChild(this.ball);
    }

    this.ball.style.width = `${this.w}px`;
    this.ball.style.height = `${this.h}px`;

    this.ball.style.left = `${this.x}px`;
    this.ball.style.top = `${this.y}px`;

    this.ball.addEventListener('mouseenter', this.onMouseEnterHandler);

    this.ball.addEventListener('mouseleave', this.onMouseLeaveHandler);

    return this;
  }

  runAnim() {
    // console.log('runAnim');

    if (!this.move) {
      this.ani = requestAnimationFrame(this.onMoverHandler);
      this.move = true;
    }
  }

  mouseEnterHandler() {
    if (this.move) {
      console.log('start mouseEnterHandler', this.ani);

      cancelAnimationFrame(this.ani);
      this.move = false;

      console.log('end mouseEnterHandler', this.ani);
    }
  }

  mouseLeaveHandler() {
    // console.log('mouseLeaveHandler', this.speed);

    if (!this.move) {
      this.ani = requestAnimationFrame(this.onMoverHandler);
      this.move = true;
    }
  }
}

const ball1 = new Ball();
ball1.init().runAnim();

const body = document.body;
const balls = body.querySelectorAll('.ball');

balls.forEach((ball) => {
  const ballItem = new Ball({
    ball,
  });

  ballItem.init().runAnim();
});
