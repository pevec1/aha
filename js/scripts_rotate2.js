let isPaused2 = false;
// повторить с интервалом 2 секунды
//let timerId = setInterval(() => alert("tick"), 2000);

let timerId3 = setInterval(function () {
  if (!isPaused) {
    /* Выполняемый код... */

    cvs2 = document.getElementById("canvas2");
    ctx2 = cvs2.getContext("2d"); /* Error in getContext("2d") */
    img2 = document.getElementById("logos2");
    ctx2.clearRect(0, 0, canvas2.width, canvas2.height);
    ctx2.drawImage(img2, 30, 15); //100,88

    // Matrix transformation
    ctx2.translate(80, 59);
    ctx2.rotate(Math.PI / 2);
    ctx2.translate(-80, -59);
    //ctx.fill(); 200,177
  }
  /* Выполняемый код... */
}, 50);
//alert(timerId2);
// остановить вывод через 5 секунд
setTimeout(() => {
  clearInterval(timerId3);
  setInterval(function () {
    if (!isPaused2) {
      /* Выполняемый код... */

      cvs2 = document.getElementById("canvas2");
      ctx2 = cvs2.getContext("2d"); /* Error in getContext("2d") */
      img2 = document.getElementById("logos2");
      ctx2.clearRect(0, 0, canvas2.width, canvas2.height);
      ctx2.drawImage(img2, 30, 15);

      // Matrix transformation
      //   ctx2.translate(141.5, 83);
      //   ctx2.rotate(Math.PI / 2);
      //   ctx2.translate(-141.5, -83);
      //ctx2.fill();
    }
    /* Выполняемый код... */
  }, 500);
}, 3000);
setTimeout(() => {
  let g = 1;
});

cvs2 = document.getElementById("canvas2");
ctx2 = cvs2.getContext("2d"); /* Error in getContext("2d") */
img2 = document.getElementById("logos2");
ctx2.clearRect(0, 0, canvas2.width, canvas2.height);
ctx2.drawImage(img2, 30, 15);
