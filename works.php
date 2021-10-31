<?php
ini_set('session.use_cookies', 1);
ini_set('session.use_only_cookies', 1);
session_start();
//require_once "config_local.php";
// if (!isset($_POST['login']) && !isset($_POST['password']) && !isset($_SESSION['login']) && !isset($_SESSION['password'])){
//     header("Location: index.php");
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Подключение normalize.css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Подключение Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?v.0.0.2" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css?v.0.0.2" rel="stylesheet">

    <!-- Подключение пользовательских стилей -->
    <link rel="stylesheet" href="css/styles.css?v.0.0.3" />
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <ul class="logos">
                    <li>
                        <a href="index.php">
                            <p class="logo">АХА Code</p>
                        </a>
                    </li>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="works.php">Работы</a></li>
                    <li><a href="creative.php">Творчество</a></li>
                    <li><a href="photos.php">Фотогалерея</a></li>
                    <li><a href="aboutus.php">Контакты</a></li>
                    <li style="margin-top: 20px"> </li>
                    <!-- <a href='#' class='btn lk'>Личный кабинет</a>
<a href='index.php' class='btn logout'>Выход</a> -->
                    <?php
                    if (!isset($_POST['login']) && !isset($_POST['password']) && !isset($_SESSION['login']) && !isset($_SESSION['password'])) {
                        echo "<a href='#' class='btn lk' data-bs-toggle='modal' data-bs-target='#exampleModal'>Личный кабинет</a>";
                    } else {
                        echo "<a href='lk.php' class='btn lkk'>ЛК</a><a href='index.php' class='btn logout'>Выход</a>";
                    }
                    ?>


                </ul>
            </div>
        </div>
        <div class="nav-mobile">
            <div class="header">
                <div class="menu">
                    <a class="menu-triger" href="#"></a>
                    <div class="menu-popup">
                        <a class="menu-close" href="#"></a>
                        <ul>
                            <li>
                                <a href="index.php">
                                    <p class="logo">АХА Code</p>
                                </a>
                            </li>
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="works.php">Работы</a></li>
                            <li><a href="creative.php">Творчество</a></li>
                            <li><a href="photos.php">Фотогалерея</a></li>
                            <li><a href="aboutus.php">Контакты</a></li>
                            <li style="margin-top: 20px"></li>
                            <li>
                                <!-- <a href='#' class='btn lk'>Личный кабинет</a>
<a href='index.php' class='btn logout'>Выход</a> -->
                                <?php
                                if (!isset($_POST['login']) && !isset($_POST['password']) && !isset($_SESSION['login']) && !isset($_SESSION['password'])) {
                                    echo "<a href='#' class='btn lk' data-bs-toggle='modal' data-bs-target='#exampleModal'>Личный кабинет</a>";
                                } else {
                                    echo "<a href='lk.php' class='btn lkk'>ЛК</a><a href='index.php' class='btn logout'>Выход</a>";
                                }
                                ?>



                            </li>
                        </ul>
                    </div>
                </div>
                <p class="logo">АХА Code</p>
            </div>


            <section>
                <div class="container-offer">
                    <div class="row">
                        <div class="business-offer col-12 col-md-5 col-xl-5">
                            <h1>
                                Здесь превью наших
                                <span style="color: #7bc0e3">работ</span>
                            </h1>
                            <p>
                                Мы давно работаем на рынке услуг по созданию сайтов. Мы делаем с
                                нуля как маленькие, так и крупные. С Вас дизайн - с нас готовый
                                сайт.
                            </p>
                            <div>
                                <a class="btn" href="#">Начать</a>
                                <a class="btn-disabled" href="#">Контакты</a>
                                <!-- <div class="circles"> -->
                                <img class="circles" src="img/Group56.svg" alt="" />
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="col-12 col-md-2 col-xl-2">
                            <canvas id="canvas" class="canvas"><img id="logos" class="img-rotate" src="ima/logo.png" alt="" /></canvas>
                        </div>
                        <div class="business-offer col-12 col-md-5 col-xl-5">
                            <img class="analyse" src="img/analyse1.png" />
                        </div>
                    </div>
            </section>
        </div>
    </header>
    <main>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form class="form1" name="form1">
                    <h6 class="header-title">login-form</h6>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">login-form</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <h3>AXA Code</h3>
                                <p>Войдите, чтобы продолжить</p>
                                <div class="error"></div>
                                <input type="text" name="login" id="login" placeholder="Введите логин, почту или телефон" />
                                <br />
                                <input type="password" name="passwd" id="passwd" />
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-login">Войти</button>
                            <button type="button" class="btn btn-register">
                                Зарегистрироваться
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




        <section class="slider2">
            <div class="container-slider">
                <div class="row justify-content-center">
                    <div id="carousel" class="col-10 col-md-8 col-lg-6 carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="9" aria-label="Slide 10"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="10" aria-label="Slide 11"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="11" aria-label="Slide 12"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/slide1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slide2.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slide3.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slide4.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slide5.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slide6.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slide7.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slide8.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slide9.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slide10.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slide11.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slide12.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="work-as work">
            <div class="container">
                <h2>Заинтересованы в работе с нами ?</h2>
                <p>Отправьте письмо здесь и ждите ответа.</p>
                <div>
                    <a href="mailto:pevec1@yandex.ru" rel="nofollow" class="btn-black">Напишите нам</a>
                </div>
            </div>
        </section>
        <section class="our-blog">
            <div class="container">
                <div>
                    <div class="about-blog">
                        <h2>Наш блог</h2>
                        <p>
                            В AXA Code блоге мы расскажем как мы черпаем идеи из фильмов.
                        </p>
                    </div>
                    <a class="btn-disabled" href="creative.php">Смотреть</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <h3>AXA Code 2021</h3>
            <div>Контакты</div>

            <div class="buttons">
                <a class="btns btn-vk" href="#" target="_self"> </a>
                <a class="btns btn-fb" href="#" target="_self"> </a>
                <a class="btns btn-google" href="#" target="_self"> </a>
                <a class="btns btn-qr" href="#" target="_self"> </a>
                <a class="btns btn-more" href="#" target="_self"> </a>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js?v.0.0.2"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="js/menu.js"></script>
    <script src="js/signin.js"></script>
    <script src="js/signout.js"></script>
    <script src="js/scripts_rotate.js"></script>

</body>

</html>