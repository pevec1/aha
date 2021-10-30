let arr_img = [];
let prev, next;

// if (document.querySelector(".img2")!=null) {
let sizeImage = document.querySelector(".img2").width;
// }
let imgs = document.querySelector(".imgs");
let imgs2 = document.querySelector(".imgs2");

if (document.querySelector(".btn-next") != null) {
  next = document.querySelector(".btn-next");
  next.addEventListener("click", playNext);
}
if (document.querySelector(".btn-prev") != null) {
  prev = document.querySelector(".btn-prev");
  prev.addEventListener("click", playPrev);
}

function playNext(e) {
  let img1 = document.querySelector(".img1");
  let img2 = document.querySelector(".img2");
  let img3 = document.querySelector(".img3");
  let url = new URL(img1.src);
  url = url.pathname + url.search + url.hash;
  console.log(url);
  if (sizeImage > 0) {
    if (url == "/images/slide1.png") {
      img1.src = "../images/slide4.png";
      imgs.classList.add("animate__animated", "animate__fadeInLeft");
      img2.src = "../images/slide5.png";
      img3.src = "../images/slide6.png";
    } else if (url == "/images/slide4.png") {
      img1.src = "../images/slide7.png";
      imgs.classList.add("animate__animated", "animate__fadeInLeft");
      img2.src = "../images/slide8.png";
      img3.src = "../images/slide9.png";
    } else if (url == "/images/slide7.png") {
      img1.src = "../images/slide10.png";
      imgs.classList.add("animate__animated", "animate__fadeInLeft");
      img2.src = "../images/slide11.png";
      img3.src = "../images/slide12.png";
    } else if (url == "/images/slide10.png") {
      img1.src = "../images/slide1.png";
      imgs.classList.add("animate__animated", "animate__fadeInLeft");
      img2.src = "../images/slide2.png";
      img3.src = "../images/slide3.png";
    }
  } else if (sizeImage == 0) {
    switch (url) {
      case "/images/slide1.png":
        img1.src = "../images/slide2.png";
        imgs.classList.add("animate__animated", "animate__fadeInLeft");
        break;
      case "/images/slide2.png":
        img1.src = "../images/slide3.png";
        imgs.classList.add("animate__animated", "animate__fadeInLeft");
        break;
      case "/images/slide3.png":
        img1.src = "../images/slide4.png";
        imgs.classList.add("animate__animated", "animate__fadeInLeft");
        break;
      case "/images/slide4.png":
        img1.src = "../images/slide5.png";
        imgs.classList.add("animate__animated", "animate__fadeInLeft");
        break;
      case "/images/slide5.png":
        img1.src = "../images/slide6.png";
        imgs.classList.add("animate__animated", "animate__fadeInLeft");
        break;
      case "/images/slide6.png":
        img1.src = "../images/slide7.png";
        imgs.classList.add("animate__animated", "animate__fadeInLeft");
        break;
      case "/images/slide7.png":
        img1.src = "../images/slide8.png";
        imgs.classList.add("animate__animated", "animate__fadeInLeft");
        break;
      case "/images/slide8.png":
        img1.src = "../images/slide9.png";
        imgs.classList.add("animate__animated", "animate__fadeInLeft");
        break;
      case "/images/slide9.png":
        img1.src = "../images/slide10.png";
        imgs.classList.add("animate__animated", "animate__fadeInLeft");
        break;
      case "/images/slide10.png":
        img1.src = "../images/slide11.png";
        imgs.classList.add("animate__animated", "animate__fadeInLeft");
        break;
      case "/images/slide11.png":
        img1.src = "../images/slide12.png";
        imgs.classList.add("animate__animated", "animate__fadeInLeft");
        break;
      case "/images/slide12.png":
        img1.src = "../images/slide1.png";
        imgs.classList.add("animate__animated", "animate__fadeInLeft");
        break;
    }
  }
  setTimeout(function () {
    if (imgs.classList.contains("animate__animated")) {
      imgs.classList.remove("animate__animated", "animate__fadeInLeft");
    }
  }, 1000);
}

function playPrev(e) {
  let img1 = document.querySelector(".img1");
  let img2 = document.querySelector(".img2");
  let img3 = document.querySelector(".img3");
  let url = new URL(img1.src);
  url = url.pathname + url.search + url.hash;
  console.log(url);
  if (sizeImage > 0) {
    if (url == "/images/slide1.png") {
      img1.src = "../images/slide10.png";
      imgs2.classList.add("animate__animated", "animate__fadeInRight");
      img2.src = "../images/slide11.png";
      img3.src = "../images/slide12.png";
    } else if (url == "/images/slide10.png") {
      img1.src = "../images/slide7.png";
      imgs2.classList.add("animate__animated", "animate__fadeInRight");
      img2.src = "../images/slide8.png";
      img3.src = "../images/slide9.png";
    } else if (url == "/images/slide4.png") {
      img1.src = "../images/slide1.png";
      imgs2.classList.add("animate__animated", "animate__fadeInRight");
      img2.src = "../images/slide2.png";
      img3.src = "../images/slide3.png";
    } else if (url == "/images/slide7.png") {
      img1.src = "../images/slide4.png";
      imgs2.classList.add("animate__animated", "animate__fadeInRight");
      img2.src = "../images/slide5.png";
      img3.src = "../images/slide6.png";
    }
  } else if (sizeImage == 0) {
    switch (url) {
      case "/images/slide1.png":
        img1.src = "../images/slide12.png";
        imgs2.classList.add("animate__animated", "animate__fadeInRight");
        break;
      case "/images/slide12.png":
        img1.src = "../images/slide11.png";
        imgs2.classList.add("animate__animated", "animate__fadeInRight");
        break;
      case "/images/slide11.png":
        img1.src = "../images/slide10.png";
        imgs2.classList.add("animate__animated", "animate__fadeInRight");
        break;
      case "/images/slide10.png":
        img1.src = "../images/slide9.png";
        imgs2.classList.add("animate__animated", "animate__fadeInRight");
        break;
      case "/images/slide9.png":
        img1.src = "../images/slide8.png";
        imgs2.classList.add("animate__animated", "animate__fadeInRight");
        break;
      case "/images/slide8.png":
        img1.src = "../images/slide7.png";
        imgs2.classList.add("animate__animated", "animate__fadeInRight");
        break;
      case "/images/slide7.png":
        img1.src = "../images/slide6.png";
        imgs2.classList.add("animate__animated", "animate__fadeInRight");
        break;
      case "/images/slide6.png":
        img1.src = "../images/slide5.png";
        imgs2.classList.add("animate__animated", "animate__fadeInRight");
        break;
      case "/images/slide5.png":
        img1.src = "../images/slide4.png";
        imgs2.classList.add("animate__animated", "animate__fadeInRight");
        break;
      case "/images/slide4.png":
        img1.src = "../images/slide3.png";
        imgs2.classList.add("animate__animated", "animate__fadeInRight");
        break;
      case "/images/slide3.png":
        img1.src = "../images/slide2.png";
        imgs2.classList.add("animate__animated", "animate__fadeInRight");
        break;
      case "/images/slide2.png":
        img1.src = "../images/slide1.png";
        imgs2.classList.add("animate__animated", "animate__fadeInRight");
        break;
    }
  }
  setTimeout(function () {
    if (imgs2.classList.contains("animate__animated")) {
      imgs2.classList.remove("animate__animated", "animate__fadeInRight");
    }
  }, 1000);
}
