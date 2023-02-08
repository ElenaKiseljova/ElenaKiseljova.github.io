export default () => {
  const mediaQuery = window.matchMedia(`(prefers-reduced-motion: reduce)`);
  mediaQuery.addEventListener(`change`, () => {
    // ...
  });
};
