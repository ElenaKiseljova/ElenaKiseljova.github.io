const eyeball = (evt) => {
  const eyes = document.querySelectorAll(".eye");

  eyes.forEach((eye) => {
    let x = eye.getBoundingClientRect().left + eye.clientWidth / 2;

    let y = eye.getBoundingClientRect().top + eye.clientHeight / 2;

    let radian = Math.atan2(evt.pageX - x, evt.pageY - y);

    let rotateDeg = radian * (180 / Math.PI) * -1 + 270;

    eye.style.transform = `rotate(${rotateDeg}deg)`;
  });
};

const body = document.querySelector("body");

body?.addEventListener("mousemove", eyeball);
