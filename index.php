<?php
ini_set('session.use_cookies',1);
ini_set('session.use_only_cookies',1);
session_start();
//require_once "config_local.php";

	
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация</title>
    <link rel="icon" href="./img/ax.ico" type="image/x-icon" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css?v0.0.3" />
    <style type="text/css">
    body {
        margin: auto;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main {
        flex-grow: 1;

    }

    footer {
        height: auto;
        text-align: left;
        flex-shrink: 0;
    }
    </style>
</head>

<body>
    <main>
        <div class="container-info">
            <div class="row logos">
                <div class="col-12 col-md-5 col-xl-5">
                    <a href="main.php" class="btn">Главная</a>

                    <a href="works.php" class="btn">Работы</a>
                </div>
                <div class="col-12 col-md-2 col-xl-2">
                    <canvas id="canvas" class="canvas"><img id="logos" class="img-rotate" src="ima/logo.png"
                            alt="" /></canvas>
                </div>
                <div class="col-12 col-md-5 col-xl-5">
                    <a href="creative.php" class="btn">Творчество</a>
                    <a href="photos.php" class="btn">Фотогалерея</a>
                </div>
            </div>
            <p>&nbsp;</p>
            <table width="" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="50">&nbsp;</td>
                    <td width="">
                        Ядерная физика дала мне широту и объем мысли. Экономика - возможность зарабатывать, растить
                        сына. А курс программирования дал мне творческое развитие, и любимую работу.

                    </td>
                    <td width="50">&nbsp;</td>
                </tr>
            </table>
        </div>
        <div class="container-info2">
            <div class="row">
                <a href="main.php" class="btn">Главная</a>
                <a href="works.php" class="btn">Работы</a>
                <canvas id="canvas2" class="canvas"><img id="logos2" src="ima/logo.png" class="minilogo"
                        alt="" /></canvas>
                <a href="creative.php" class="btn">Творчество</a>
                <a href="photos.php" class="btn">Фотогалерея</a>
            </div>
            <div class="row">
                <p>
                Ядерная физика дала мне широту и объем мысли. Экономика - возможность зарабатывать, растить сына. А курс
                программирования дал мне творческое развитие, и любимую работу.
                </p>
            </div>
        </div>
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
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/scripts_rotate.js"></script>
    <script src="js/scripts_rotate2.js"></script>
</body>

</html>