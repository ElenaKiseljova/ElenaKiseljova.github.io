/***
 * Размеры документа
 */

const getDocumentParameters = (param) => {
  switch (param) {
    case 'width':
      return window.innerWidth && document.documentElement.clientWidth
        ? Math.min(window.innerWidth, document.documentElement.clientWidth)
        : window.innerWidth ||
            document.documentElement.clientWidth ||
            document.body.clientWidth;

    case 'height':
      return window.innerHeight && document.documentElement.clientHeight
        ? Math.min(window.innerHeight, document.documentElement.clientHeight)
        : window.innerHeight ||
            document.documentElement.clientHeight ||
            document.body.clientHeight;
  }
};

/**
 * Шум
 */

class Noise {
  constructor({
    framesPerSecond,
    canvasId,
    canvasOpacity,
    canvasW,
    canvasH,
    isStaticNoise,
    noiseColor,
  }) {
    this.canvas = document.querySelector(`#${canvasId}`);

    if (canvasW && canvasH) {
      this.canvasW = canvasW;
      this.canvasH = canvasH;
    } else {
      this.canvasW = getDocumentParameters('width');
      this.canvasH = getDocumentParameters('height');
    }

    this.canvasOpacity = canvasOpacity ?? 1;

    this.noiseData = [];
    this.frame = 0;
    this.noiseColor = noiseColor ?? '000000';
    this.isStaticNoise = isStaticNoise ?? false;

    this.framesPerSecond = framesPerSecond ?? 60;
    this.ani = 0;
    this.move = false;

    this.onCreateLoopPaintNoiseHandler = this.createLoopPaintNoise.bind(this);
  }

  init() {
    if (this.canvas) {
      this.canvas.style.opacity = this.canvasOpacity;

      this.ctx = this.canvas.getContext('2d');

      this.canvas.width = this.canvasW;
      this.canvas.height = this.canvasH;

      if (this.isStaticNoise) {
        this.createImageDataNoise();

        this.drawNoise();

        return;
      }

      this.runAnim();
    }
  }

  destroy() {
    this.stopAnim();
  }

  createImageDataNoise() {
    const idata = this.ctx.createImageData(this.canvasW, this.canvasH);
    const buffer32 = new Uint32Array(idata.data.buffer);
    const len = buffer32.length;

    for (let i = 0; i < len; i++) {
      if (Math.random() < 0.05) {
        buffer32[i] = `0xff${this.noiseColor}`;
      }
    }

    this.noiseData.push(idata);
  }

  drawNoise() {
    if (!this.isStaticNoise) {
      if (this.frame === 9) {
        this.frame = 0;
      } else {
        this.frame++;
      }
    }

    this.ctx.putImageData(this.noiseData[this.frame], 0, 0);
  }

  createLoopPaintNoise() {
    this.drawNoise();

    if (this.move) {
      if (this.timeout) {
        clearTimeout(this.timeout);
      }

      this.timeout = setTimeout(() => {
        this.ani = requestAnimationFrame(this.onCreateLoopPaintNoiseHandler);
      }, 1000 / this.framesPerSecond);
    }
  }

  runAnim() {
    for (let i = 0; i < 10; i++) {
      this.createImageDataNoise();
    }

    if (!this.move) {
      this.ani = requestAnimationFrame(this.onCreateLoopPaintNoiseHandler);
      this.move = true;
    }
  }

  stopAnim() {
    if (this.move) {
      cancelAnimationFrame(this.ani);
      clearTimeout(this.timeout);
      this.move = false;
    }
  }
}

const noise = new Noise({
  canvasId: 'noise',
  canvasOpacity: 0.1,
  framesPerSecond: 100,
});

noise.init();

// Исходник
// const noise = () => {
//   let canvas, ctx;

//   let wWidth, wHeight;

//   let noiseData = [];
//   let frame = 0;

//   let loopTimeout;

//   // Create Noise
//   const createNoise = () => {
//       const idata = ctx.createImageData(wWidth, wHeight);
//       const buffer32 = new Uint32Array(idata.data.buffer);
//       const len = buffer32.length;

//       for (let i = 0; i < len; i++) {
//           if (Math.random() < .5) {
//               buffer32[i] = 0xff000000;
//           }
//       }

//       noiseData.push(idata);
//   };

//   // Play Noise
//   const paintNoise = () => {
//       if (frame === 9) {
//           frame = 0;
//       } else {
//           frame++;
//       }

//       ctx.putImageData(noiseData[frame], 0, 0);
//   };

//   // Loop
//   const loop = () => {
//       paintNoise(frame);

//       loopTimeout = window.setTimeout(() => {
//           window.requestAnimationFrame(loop);
//       }, (1000 / 25));
//   };

//   // Setup
//   const setup = () => {
//       wWidth = window.innerWidth;
//       wHeight = window.innerHeight;

//       canvas.width = wWidth;
//       canvas.height = wHeight;

//       for (let i = 0; i < 10; i++) {
//           createNoise();
//       }

//       canvas = document.getElementById('noise');

//       if (canvas.classList.contains('is-static')){
//           paintNoise(frame);
//       } else {
//           loop();
//       }
//   };

//   // Reset
//   let resizeThrottle;
//   const reset = () => {
//       window.addEventListener('resize', () => {
//           window.clearTimeout(resizeThrottle);

//           resizeThrottle = window.setTimeout(() => {
//               window.clearTimeout(loopTimeout);
//               setup();
//           }, 200);
//       }, false);
//   };

//   // Init
//   const init = (() => {
//       canvas = document.getElementById('noise');
//       ctx = canvas.getContext('2d');

//       setup();
//   })();
// };

// noise();

