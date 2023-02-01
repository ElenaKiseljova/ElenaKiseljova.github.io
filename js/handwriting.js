// const paths = document.querySelectorAll('.handwriting svg path');
// for (const path of paths) {
//   console.log(Math.ceil(path.getTotalLength()));
// }

const mask = document.querySelector('.handwriting svg path:last-of-type');
if (mask) {
  mask.style.stroke = 'var(--bg)';

  mask.style.setProperty(
    '--strokeDasharray',
    `${Math.ceil(mask.getTotalLength())}px`
  );
}

