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
                    <li style="margin-top: 20px"></li>
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
                                Страничка креатива
                                <span style="color: #7bc0e3">Творчество</span>
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


        <section class="creative">
            <div class="container-creative">

                <div class="svg">
                    <a class="btn-prev2" onclick="$(pagerPrev);"></a>
                    <p class="current"></p>
                    <a class="btn-next2" onclick="$(pagerNext);"></a>

                    <div class="row comment active">


                        <h3>О фильме Лекарь: Ученик Авиценны</h3>
                        <p class="response">Скажу сразу, фильм очень понравился, потому что он исторический. Не могу
                            точно сказать, сколько в нем правды. Но то, что в фильме рассказывается об истоках настоящей
                            медицины и высмеивается знахарство, похвально.<br>
                            Фильм начинается с того, что у главного героя умирает мама, когда он еще ребенок. Он решает
                            посвятить жизнь искусству врачевания. Очень ясный ум и рациональное мышление позволяют ему
                            выбрать человека умного: Авиценну. Но перед этим он работает и лечит людей вместе со
                            знахарем, который лечит людей чем сам придумал, и говорит, что чем больнее лечение, тем
                            благодарнее вылеченные люди. Уже не мальчик, а молодой человек заработав достаточно денег,
                            он отправляется на Восток, где и знакомится с Авиценной.<br>
                            Дальше смотрите сами, как люди,обладающие умом и начитанные создают науку врачевания, и как
                            люди, которые верят в Бога, им мешают. В фильме поднимается очень серьезная проблема
                            взаимоотношения науки и религии. Я не берусь судить, кто из них прав. </p>
                    </div>
                    <div class="row comment">
                        <h3>Благое повествование или фильм Сын Бога</h3>
                        <p class="response">Посмотрел я фильм Сын Бога. Понравился, даже очень. Теперь буду ругать
                            наших. Почему вы пропустили такой великолепный фильм, а всякую дрянь переводите? Нашел я
                            этот фильм только в любительском переводе. Никакого дубляжа на фильм нет.
                            Спасибо за то, что это не Страсти Христовы, а благое повествование. Назвать фильм скучным
                            нельзя, потому что он о Христе. Единственно только очень смазливое лицо у актера, сыгравшего
                            Иисуса.<br>
                            Хорошо показаны чудеса Христа. Не все почему-то, но ладно, простим. Христос ходит по воде.
                            Умножает пищу. Знает о Своем распятии наперед. И воскрешает.<br>
                            Мне поначалу показалось при просмотре фильма, что Иисуса хотят показать как бестолкового,
                            Который не смог раскрыть предательства Иуды, и заговора Каифы, но нет (!), Иисус все
                            предвидит заранее. Спасибо за отличный фильм. Не раз и не два его пересмотрю.</p>
                    </div>
                    <div class="row comment">
                        <h3>Рецензия на фильм Новый человек-паук 2</h3>
                        <p class="response">Неужели нельзя было оставить одного из героев фильма в живых? Я намекаю на
                            то, что американцы стали более кровожадными в фильмах. Не то ли наблюдается в
                            действительности? Жизнь человеческая им уже не важна. Вы слышали? Жизнь не важна. А что
                            тогда важно? Деньги, зависть и предательство ради них.<br />
                            Главная тема фильма – супергерой, которому надо уничтожить суперзлодея. Но если раньше
                            злодеев перевоспитывали, так по крайней мере в наших фильмах, то теперь его непременно
                            убивают.
                            Один из героев становится злодеем по сюжету фильма. Всему виной зависть. Надо отдать должное
                            – непонятно хорошо это или плохо. Я скажу – это очень плохо, что после фильма надо гадать.
                            Зависть – это грех. И следует говорить об этом твердо. Тем более, что фильм рассчитан на
                            детей.<br>
                            И еще один важный момент. В фильме говорится о том, что жить надо не ради идей других людей,
                            а в жизни надо непременно найти свой смысл. Так вот это не так, человек в праве выбирать
                            ради чего ему жить. Помощь другим еще никто не отменял. Впрочем, это чисто американский
                            индивидуалистский подход, который нам, россиянам, не указ.</p>
                    </div>
                    <div class="row comment">
                        <h3>О фильме Дивергент</h3>
                        <p class="response">Посмотрел я данную картину. Сюжет достаточно интересный, но не сказал бы,
                            что он захватывающий. Многие моменты в фильме можно предсказать. В первые минуты просмотра
                            фильма я думал о том, что он задуман для того, чтобы подорвать моральный дух россиян.
                            Например, то, что главная героиня не проходит тест, и ей суждено стать изгоем. Но потом
                            сюжет стал закручиваться.
                            Город после апокалипсиса окружен забором, люди разделены на пять фракций:</p>
                        <ul class="response">
                            <li>эрудиты, для которых знания и логика превыше всего,</li>
                            <li>дружелюбие,</li>
                            <li>искренность,</li>
                            <li>бесстрашие,</li>
                            <li>отречение, альтруисты или убогие.</li>
                        </ul>
                        <p class="response">
                            Беатрис, главная героиня, выбирает самостоятельно бесстрашие. Знаете, выбор конечно сделан
                            специально, чтобы было, как это сказать, - «интересней» смотреть фильм. Ну кому, например,
                            захочется смотреть про эрудитов. Ну да ладно, проглотили.
                            Героиня выбирает себе новое имя - Трис. Она оказывается самой слабой и вот-вот ее выгонят в
                            изгои. Но этого не происходит и вот почему.<br>
                            Кульминацией фильма становится психологический тест. В тесте необходимо убить невинного
                            человека. В кинокартине это называют слабостью человека или страхом. Но что говорит нам
                            мораль с детства – нельзя убивать людей ни под каким предлогом, это грех для верующих, и
                            тюрьма для всех остальных. Повторюсь: грех подменяется страхом, т.е. надо не бороться с
                            грехом, чтобы не убивать, а бороться со страхом, чтобы убить. Вот это то и ужасно.<br />
                            Фильм по моему мнению безусловно провалился. Спасибо.</p>
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
                    <a class="btn-disabled" href="#">Смотреть</a>
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