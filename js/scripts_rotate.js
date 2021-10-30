let isPaused = false;
// повторить с интервалом 2 секунды
//let timerId = setInterval(() => alert("tick"), 2000);

let timerId2 = setInterval(function () {
  if (!isPaused) {
    /* Выполняемый код... */

    cvs = document.getElementById("canvas");
    ctx = cvs.getContext("2d"); /* Error in getContext("2d") */
    img = document.getElementById("logos");
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.drawImage(img, 50, 44); //100,88

    // Matrix transformation
    ctx.translate(100, 88); //141.5,83
    ctx.rotate(Math.PI / 2);
    ctx.translate(-100, -88);
    //ctx.fill();
  }
  /* Выполняемый код... */
}, 50);
//alert(timerId2);
// остановить вывод через 5 секунд
setTimeout(() => {
  clearInterval(timerId2);
  setInterval(function () {
    if (!isPaused) {
      /* Выполняемый код... */

      cvs = document.getElementById("canvas");
      ctx = cvs.getContext("2d"); /* Error in getContext("2d") */
      img = document.getElementById("logos");
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      ctx.drawImage(img, 50, 44);

      // Matrix transformation
      //   ctx.translate(141.5, 83);
      //   ctx.rotate(Math.PI / 2);
      //   ctx.translate(-141.5, -83);
      //ctx.fill();
    }
    /* Выполняемый код... */
  }, 500);
}, 3000);
setTimeout(() => {
  let g = 1;
});

cvs = document.getElementById("canvas");
ctx = cvs.getContext("2d"); /* Error in getContext("2d") */
img = document.getElementById("logos");
ctx.clearRect(0, 0, canvas.width, canvas.height);
ctx.drawImage(img, 50, 44);
