document.addEventListener('mousemove', (evt) => {
  const body = document.body;
  const img = document.createElement('span');
  const x = evt.offsetX;
  const y = evt.offsetY;

  img.style.left = `${x}px`;
  img.style.top = `${y}px`;

  const size = Math.random() * 80;
  img.style.width = `${20 + size}px`;
  img.style.height = `${20 + size}px`;

  const transformValue = Math.random() * 360;
  img.style.transform = `rotate(${transformValue}deg)`;

  body.appendChild(img);

  setTimeout(() => {
    img.remove();
  }, 1000);
});

