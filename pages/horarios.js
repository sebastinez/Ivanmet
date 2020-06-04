document.addEventListener('DOMContentLoaded', function() {
  let relojes = Array.prototype.slice.call(document.getElementsByClassName('reloj'));
  relojes.forEach(function(el) {
    setTime(el);
  });
  setInterval(function() {
    relojes.forEach(function(el) {
      setTime(el);
    });
  }, 1000);
});

function setTime(el) {
  let timeDiff = el.className.split(' ')[1].slice(1);
  let ladung = el.className.split(" ")[1].split("")[0];

  let diff =
    ladung === '-'
      ? new Date().getHours() - Number(timeDiff)
      : new Date().getHours() + Number(timeDiff);

  el.innerText = new Date(new Date().setHours(diff))
    .toLocaleTimeString('es-ES')
    
}
