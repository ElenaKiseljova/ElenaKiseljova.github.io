class Marquee {
  constructor({
    classElements,
    spacer,
    onMouseEnterClass,
    onMouseLeaveClass,
    onMouseEnterHandler,
    onMouseLeaveHandler,
  }) {
    this.els = document.querySelectorAll(classElements);

    this.defaultContent = [];

    this.els.forEach((el, i) => {
      this.defaultContent.push({
        innerHtml: el.innerHTML,
        index: i,
      });
    });

    this.spacer = spacer ?? ' ';
    this.onMouseEnterClass = onMouseEnterClass ?? 'marquee--paused';
    this.onMouseLeaveClass = onMouseLeaveClass ?? 'marquee--running';

    this.mouseCustomEnterHandler = onMouseEnterHandler ?? (() => {});
    this.mouseCustomLeaveHandler = onMouseLeaveHandler ?? (() => {});

    this.mouseEnterHandler = this.mouseEnter.bind(this);
    this.mouseLeaveHandler = this.mouseLeave.bind(this);
  }

  async init() {
    for (const [_, el] of Object.entries(this.els)) {
      await this.createClones(el, await this.createSlide(el));

      el.addEventListener('mouseenter', this.mouseEnterHandler);
      el.addEventListener('mouseleave', this.mouseLeaveHandler);
    }
  }

  destroy() {
    for (const [i, el] of Object.entries(this.els)) {
      el.innerHTML = this.defaultContent[i].innerHtml;

      el.removeEventListener('mouseenter', this.mouseEnterHandler);
      el.removeEventListener('mouseleave', this.mouseLeaveHandler);
    }
  }

  async createSlide(el) {
    const slide = document.createElement('div');
    const content = el.innerHTML;

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

const marqueeInstance = new Marquee({
  classElements: '.marquee--flex',
  spacer: ' &mdash; ',
  onMouseEnterHandler: () => console.log('hello'),
  onMouseLeaveHandler: () => console.log('bye'),
});

marqueeInstance.init();

