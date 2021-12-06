<?php
ini_set('session.use_cookies', 1);
ini_set('session.use_only_cookies', 1);
session_start();
//require_once "config_local.php";


?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css?v.0.0.2" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                            <p class="logo"><img src="/img/axacode.png"></p>
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
        <div class="nav-mobile">
            <div class="header">
                <div class="menu">
                    <a class="menu-triger" href="#"></a>
                    <div class="menu-popup">
                        <a class="menu-close" href="#"></a>
                        <ul>
                            <li>
                                <a href="index.php">
                                    <p class="logo"><img src="/img/axamobile.png"></p>
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
                <a href="index.php">
                    <p class="logo"><img src="/img/axamobile.png"></p>
                </a>
            </div>

            <section>
                <div class="container-offer">
                    <div class="row">
                        <div class="business-offer col-12 col-md-6 col-xl-4">
                            <!-- <div class="business-offer"> -->
                            <h1>
                                Мы поможем сделать Вам Ваш
                                <span style="color: #7bc0e3">веб-сайт</span>
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
                            <!-- <div class="analyse"> -->
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



        <section class="our-services">
            <div class="container">
                <h2>Наши услуги</h2>
                <p>Мы делаем сайты под ключ. Среди них есть варианты:</p>
                <div class="row cardrow">
                    <div class="card col-12 col-md-6 col-xl-4">
                        <div class="web-site"></div>
                        <h3>Интернет-магазин</h3>
                        <p class="service">
                            Все просто: каталог, акции, заказ или покупка, личный кабинет
                        </p>
                    </div>
                    <div class="card col-12 col-md-6 col-xl-4">
                        <div class="web-site"></div>

                        <h3>Лэндинг пейдж</h3>
                        <p class="service">Lorem ipsum dolor sit amet consectetur</p>
                    </div>
                    <div class="card col-12 col-md-6 col-xl-4">
                        <div class="corp-site"></div>
                        <h3>Корпоративный сайт</h3>
                        <p class="service">
                            Обычно так называют сайт компании с описанием товаров и услуг,
                            информацией о компании, новостями и статьями.
                        </p>
                    </div>
                    <div class="card col-12 col-md-6 col-xl-4">
                        <div class="redesign"></div>

                        <h3>Порталы</h3>
                        <p class="service">
                            Подобрать и заказать жильё, сделать макет футболки с надписью,
                            сдать отчётность в налоговую, вести клиентов (CRM).
                        </p>
                    </div>
                    <div class="card col-12 col-md-6 col-xl-4">
                        <div class="services"></div>

                        <h3>Сервисы</h3>
                        <p class="service">
                            Сервисом обычно называют сайт, который позволяет пользователю
                            что-то сделать.
                        </p>
                    </div>
                    <div class="card col-12 col-md-6 col-xl-4">
                        <div class="promo-site"></div>

                        <h3>Промо-сайт</h3>
                        <p class="service">
                            Так называют сайт, представляющий один продукт, услугу или
                            событие.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-work">
            <div class="container-work">
                <p style="color: #7bc0e3">Портфолио</p>
                <h2>Наша лучшая работа</h2>
                <div style="text-align:center;">
                    <button class="btn">Веб оптимизация</button>
                    <button class="btn-disabled">Редизайн сайта</button>
                    <button class="btn-disabled">СЕО оптимизация</button>
                </div>
            </div>
            <div class="container" style="">
                <!-- <slider class=""> -->
                <div class="btn-prev"></div>
                <div class="imgs imgs2">
                    <img class="img1" src="images/slide1.png" alt="slide1" />
                    <img class="img2" src="images/slide2.png" alt="slide2" />
                    <img class="img3" src="images/slide3.png" alt="slide3" />
                </div>
                <div class="btn-next"></div>
                <!-- </slider> -->
            </div>
            <div class="look">
                <a href="works.php" class="btn-black">Смотреть все</a>
            </div>
        </section>
        <section class="idea">
            <div class="container">
                <h2 style="text-align: center;">
                    Трансформируем Вашу идею в
                    <span style="color: #7bc0e3">реальность</span>
                </h2>
                <div class="tasks">
                    <p style="max-width: 800px">
                        Каждый проект веб-разработки мы начинаем с того, что менеджер
                        проекта из AXA Code берет интервью у вас о цели проекта. Это
                        делается для того, чтобы мы могли предложить решение для вашего
                        бизнеса, оценить сроки и составить бюджет.
                    </p>
                </div>
            </div>
            <div class="container">
                <ul class="tasks">
                    <li>
                        <img class="number" src="img/n1.svg" />
                        <div class="number2">
                            <h3>Ваша идея</h3>
                            <p>
                                Чтобы мы в AXA Code знали, что мы хорошо подходим для вашего
                                проекта, мы всегда начинаем с проверки вопросов, чтобы
                                убедиться, что мы подходим для вашей компании.
                            </p>
                        </div>
                    </li>
                    <li>
                        <img class="number" src="img/n2.svg" />
                        <div class="number2">
                            <h3>Стратегическая встреча</h3>
                            <p>
                                Эта встреча будет встречей, на которой мы вместе обсудим нашу
                                предложенную стратегию о том, как мы можем достичь целей
                                вашего веб-сайта. Здесь мы создадим систему обновления
                                проекта, в которой вы сможете следить за всем процессом от
                                начала до конца.
                            </p>
                        </div>
                    </li>
                    <li>
                        <img class="number" src="img/n3.svg" />
                        <div class="number2">
                            <h3>Фреймворк Agile и Scrum</h3>
                            <p>
                                На этом этапе у нас будет командная встреча с менеджером
                                проекта и ведущим разработчиком и дизайнером. Затем мы будем
                                работать с Agile и scrum-фреймворками, чтобы обеспечить
                                выполнение вашего проекта вовремя и в рамках бюджета.
                            </p>
                        </div>
                    </li>
                    <li>
                        <img class="number" src="img/n4.svg" />
                        <div class="number2">
                            <h3>Ваш сайт заработает</h3>
                            <p>
                                Произойдет окончательная проверка веб-сайта, мы убедимся, что
                                все пиксели отслеживания, ссылки и пользовательский интерфейс
                                совместим со всеми различными устройствами. Мы также проведем
                                несколько различных тестов, чтобы убедиться, что веб-сайт
                                оптимизирован для удобства пользователей.
                            </p>
                        </div>
                    </li>
                </ul>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js?v.0.0.2" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/signin.js"></script>
    <script src="js/signout.js"></script>
    <script src="js/card.js"></script>
    <script src="js/scripts_rotate.js"></script>

</body>

</html>