document.addEventListener('DOMContentLoaded', () => {
  let relojes = Array.from(document.getElementsByClassName('reloj'));
  relojes.forEach(el => {
    el.innerText = '..:..';
  });
  setInterval(() => {
    relojes.forEach(el => {
      let timeDiff = el.className.split(' ')[1].split('');

      let diff =
        timeDiff[0] === '-'
          ? new Date().getHours() - Number(timeDiff[1])
          : new Date().getHours() + Number(timeDiff[1]);

      el.innerText = new Date(new Date().setHours(diff))
        .toLocaleTimeString('es-ES')
        .slice(0, -3);
    });
  }, 1000);
});
