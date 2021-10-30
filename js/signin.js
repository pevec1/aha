if (document.querySelector(".lk") != null) {
  let displ = document.querySelector(".lk");

  displ.addEventListener("click", signin);
}

function signin() {
  let form1 = document.querySelector(".form1");
  form1.style.display = "block";
  console.log(form1);
}

$(document).ready(function () {
  $("#passwd").keyup(function (event) {
    if (event.keyCode === 13) {
      $(".btn-login").click();
    }
  });

  $(".btn-login").click(function (e) {
    e.preventDefault();
    let login = document.querySelector("#login").value;
    let password = document.querySelector("#passwd").value;

    $.ajax({
      method: "POST",
      url: "../signin.php",
      data: { login: login, password: password },
      success: function (data) {
        if (data == "Данные приняты") {
          window.location.href = "../lk.php";
        }
        if (data == "Данные не приняты") {
          $(".error").html("Логин или пароль введены неверно");
          setTimeout(function () {
            $(".error").html(" ");
          }, 3000);
        }
      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        alert("some error");
      },
    });
  });
});
