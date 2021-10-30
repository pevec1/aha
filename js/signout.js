// const displ = document.querySelector(".logout");

// displ.addEventListener("click", signout);

// function signout() {
// }

$(document).ready(function () {
  $(".logout").click(function (e) {
    e.preventDefault();
    let out = true;
    $.post("../signout.php", { out: out }, function (data) {
      if (data == "Вы вышли") {
        window.location.href = "../main.php";
      } else {
        alert(data);
      }
    });
  });
});
