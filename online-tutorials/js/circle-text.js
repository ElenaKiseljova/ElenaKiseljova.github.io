class CircleText {
  constructor({
    textEl,
    textEls,
    textClass,
    textClasses,
    duration,
    direction, // 'normal' | 'reverse' | 'alternate' | 'alternate-reverse'
    playState, // 'running' | 'paused'
    onMouseEnterClass,
    onMouseLeaveClass,
    onMouseEnterHandler,
    onMouseLeaveHandler,
  }) {
    if (textEls || textClasses) {
      this.textEls = textEls ?? document.querySelectorAll(textClasses);
      this.defaultText = [];

      this.textEls.forEach((el) => {
        this.defaultText.push(el.textContent);
      });
    } else if (textEl || textClass) {
      this.textEl = textEl ?? document.querySelector(textClass);
      this.defaultText = this.textEl.textContent;
    }

    this.duration = duration ?? '20000ms';
    this.direction = direction ?? 'normal';
    this.playState = playState ?? 'running';

    this.onMouseEnterClass = onMouseEnterClass ?? 'text--paused';
    this.onMouseLeaveClass = onMouseLeaveClass ?? 'text--running';

    this.mouseCustomEnterHandler = onMouseEnterHandler ?? (() => null);
    this.mouseCustomLeaveHandler = onMouseLeaveHandler ?? (() => null);

    this.mouseEnterHandler = this.mouseEnter.bind(this);
    this.mouseLeaveHandler = this.mouseLeave.bind(this);
  }

  init() {
    if (this.textEls) {
      for (const [_, el] of Object.entries(this.textEls)) {
        this.setParams(el);
      }
    } else if (this.textEl) {
      this.setParams(this.textEl);
    }
  }

  destroy() {
    if (this.textEls && Array.isArray(this.defaultText)) {
      for (const [i, el] of Object.entries(this.textEls)) {
        this.resetParams(el, this.defaultText[i]);
      }
    } else if (this.textEl && !Array.isArray(this.defaultText)) {
      this.resetParams(this.textEl, this.defaultText);
    }
  }

  setParams(el) {
    el.style.setProperty('--duration', this.duration);
    el.style.setProperty('--playState', this.playState);
    el.style.setProperty('--direction', this.direction);

    this.createCircle(el);

    el.addEventListener('mouseenter', this.mouseEnterHandler);
    el.addEventListener('mouseleave', this.mouseLeaveHandler);
  }

  resetParams(el, defaultText) {
    el.innerHTML = defaultText;

    el.removeEventListener('mouseenter', this.mouseEnterHandler);
    el.removeEventListener('mouseleave', this.mouseLeaveHandler);
  }

  createCircle(textEl) {
    // Get array of chars
    const chars = textEl.textContent.trim().split('');

    // Added space between firs and last char
    chars.push(' ');

    // Render array of cahrs
    textEl.innerHTML = chars
      .map(
        (char, i, arr) => `
          <span style="--index: ${i}; --length: ${arr.length}">${char}</span>
        `
      )
      .join('');
  }

  mouseEnter(evt) {
    evt.currentTarget.classList.remove(this.onMouseLeaveClass);
    evt.currentTarget.classList.add(this.onMouseEnterClass);

    this.mouseCustomEnterHandler();
  }

  mouseLeave(evt) {
    evt.currentTarget.classList.remove(this.onMouseEnterClass);
    evt.currentTarget.classList.add(this.onMouseLeaveClass);

    this.mouseCustomLeaveHandler();
  }
}

const circleTextInstance = new CircleText({
  textClass: '.text',
  direction: 'reverse',
});
circleTextInstance.init();

