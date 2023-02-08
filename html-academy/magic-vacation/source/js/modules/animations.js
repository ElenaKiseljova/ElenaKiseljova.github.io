class AnimateTitle {
  constructor({ selectors, delay }) {
    if (Array.isArray(selectors) && selectors.length) {
      this._selectors = selectors;
      this._titleEls = document.querySelectorAll(this._selectors.join(`,`));
    }

    if (Array.isArray(delay) && delay.length) {
      this._delay = delay;
    }
  }

  async render() {
    if (this._titleEls && this._titleEls.length) {
      for (const [i, title] of this._titleEls.entries()) {
        title.classList.add(`js-animation-title`);

        await this.fillingTitleWrappedLetters(title, i);
        const lines = await this.splitTitleToLine(title);

        this.filingTitleLines(title, lines);
      }
    }
  }

  async fillingTitleWrappedLetters(title, i) {
    // Разделение на слова
    const lettersHTML = title.innerHTML
      .trim()
      .split(``)
      .filter((l) => l !== ``)
      .map(
        (l, index) =>
          `<span style="--delay: ${
            (typeof this._delay[i] !== `undefined` ? this._delay[i] : 0.9) +
            (index % 2 === 0 && index !== 0
              ? index + 2
              : index % 3 === 0
              ? index - 2
              : index) /
              10
          }s;">${l}</span>`
      )
      .join(``);

    // Заполнение буквами
    title.innerHTML = lettersHTML;
  }

  async splitTitleToLine(title) {
    // Разбиение на строки
    const letterEls = title.querySelectorAll(`:scope > span`);

    const lines = [];
    let letterOffsetTop;
    let i = 0;
    letterEls.forEach((letterEl) => {
      if (typeof letterOffsetTop === `undefined`) {
        letterOffsetTop = letterEl.offsetTop;

        lines[i] = [letterEl.outerHTML];
      } else if (letterOffsetTop === letterEl.offsetTop) {
        lines[i].push(letterEl.outerHTML);
      } else if (letterOffsetTop !== letterEl.offsetTop) {
        letterOffsetTop = letterEl.offsetTop;
        i++;

        lines[i] = [letterEl.outerHTML];
      }
    });

    return lines;
  }

  filingTitleLines(title, lines) {
    // Заполнение строками
    title.innerHTML = lines
      .map(
        (line) =>
          `<span class="js-animation-title-line">${line.join(``)}</span>`
      )
      .join(``);
  }
}

const animateTitles = new AnimateTitle({
  selectors: [
    `.intro__title`,
    `.intro__date`,
    `.slider__item-title`,
    `.prizes__title`,
    `.rules__title`,
    `.game__title`,
  ],
  delay: [0.9, 3, 0, 0.3, 0.3, 0],
});

export default () => {
  const mediaQuery = window.matchMedia(`(prefers-reduced-motion: reduce)`);

  if (!mediaQuery.matches) {
    animateTitles.render();
  }

  mediaQuery.addEventListener(`change`, () => {
    window.location.reload();
  });
};
