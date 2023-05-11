class Marquee {
  constructor({
    element,
    elements,
    classElement,
    classElements,
    spacer,
    duration, // ms
    onMouseEnterClass,
    onMouseLeaveClass,
    onMouseEnterHandler,
    onMouseLeaveHandler,
  }) {
    if (classElements || elements) {
      this.els = elements ?? document.querySelectorAll(classElements);

      this.defaultContent = [];

      this.els.forEach((el, i) => {
        this.defaultContent.push(el.innerHTML);
      });
    } else if (classElement || element) {
      this.el = element ?? document.querySelector(classElement);

      this.defaultContent = this.el.innerHTML;
    }

    this.spacer = spacer ?? ' ';
    this.duration = `${duration ?? 10000}ms`;

    this.onMouseEnterClass = onMouseEnterClass ?? 'marquee--paused';
    this.onMouseLeaveClass = onMouseLeaveClass ?? 'marquee--running';

    this.mouseCustomEnterHandler = onMouseEnterHandler ?? (() => {});
    this.mouseCustomLeaveHandler = onMouseLeaveHandler ?? (() => {});

    this.mouseEnterHandler = this.mouseEnter.bind(this);
    this.mouseLeaveHandler = this.mouseLeave.bind(this);
  }

  async init() {
    if (this.els) {
      for (const [_, el] of Object.entries(this.els)) {
        await this.setParams(el, this.defaultContent[i]);
      }
    } else if (this.el) {
      await this.setParams(this.el);
    }
  }

  destroy() {
    if (this.els && Array.isArray(this.defaultContent)) {
      for (const [i, el] of Object.entries(this.els)) {
        this.resetParams(el, this.defaultContent[i]);
      }
    } else if (this.el && !Array.isArray(this.defaultContent)) {
      this.resetParams(this.el, this.defaultContent);
    }
  }

  async setParams(el) {
    await this.createClones(el, await this.createSlide(el));

    el.addEventListener('mouseenter', this.mouseEnterHandler);
    el.addEventListener('mouseleave', this.mouseLeaveHandler);
  }

  resetParams(el, defaultContent) {
    el.innerHTML = defaultContent;

    el.removeEventListener('mouseenter', this.mouseEnterHandler);
    el.removeEventListener('mouseleave', this.mouseLeaveHandler);
  }

  async createSlide(el) {
    const slide = document.createElement('div');
    const content = el.innerHTML;

    slide.style.setProperty('--duration', this.duration);
    slide.innerHTML = `${content}${this.spacer}`;

    el.innerHTML = '';

    el.appendChild(slide);

    const repeat = Math.abs(Math.ceil(el.offsetWidth / slide.offsetWidth));

    for (let index = 1; index < repeat; index++) {
      slide.innerHTML += `${content}${this.spacer}`;
    }

    return slide;
  }

  async createClones(el, slide) {
    const slideClone1 = slide.cloneNode(true);
    const slideClone2 = slide.cloneNode(true);

    el.appendChild(slideClone1);
    el.appendChild(slideClone2);
  }

  mouseEnter(evt) {
    evt.currentTarget.classList.remove(this.onMouseLeaveClass);
    evt.currentTarget.classList.add(this.onMouseEnterClass);

    this.mouseCustomEnterHandler();
  }

  async mouseLeave(evt) {
    evt.currentTarget.classList.remove(this.onMouseEnterClass);
    evt.currentTarget.classList.add(this.onMouseLeaveClass);

    this.mouseCustomLeaveHandler();
  }
}

const marqueeElement = document.querySelector('.marquee--dinamic');

const marqueeInstance = new Marquee({
  element: marqueeElement,
  spacer: ' &mdash; ',
  duration: 30000,
  onMouseEnterHandler: () => console.log('hello'),
  onMouseLeaveHandler: () => console.log('bye'),
});

marqueeInstance.init();

