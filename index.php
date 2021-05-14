<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veni</title>
    <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css?<?php echo time();?>">
</head>

<body>
    <header class="header" id="header">
        <div class="container">
            <div class="head">
                <nav>
                    <div class="nav">
                        <a href="index.php"><img src="img/logo.svg" alt="Veni" class="logo animated fadeInDown"></a>
                        <div class="menuD">
                            <ul class="menu animated fadeInDown">
                                <li>
                                    <a href="index.php" class="active">
                                        Главная
                                    </a>
                                </li>
                                <li>
                                    <a href="umward.php">
                                        Умные шкафы
                                    </a>
                                </li>
                                <li>
                                    <a href="umhouse.php">
                                        Умный дом
                                    </a>
                                </li>
                                <li>
                                    <a href="ship_pay.php">
                                        Доставка
                                    </a>
                                </li>
<?php if (isset($_COOKIE['user']) == ''):?>


                                <li class="register">
                                <li>
                                    <a href="login.php">
                                        Вход
                                    </a>
                                </li>
                                <li>
                                    <a href="register.php">
                                        Регистрация
                                    </a>
                                </li>
<?php else: ?>
                                <li>
                                    <li>
<?=$_COOKIE['user']?>
                                </li>
                                
                                <li>
                                    <a href="exit.php">Выход</a>
                                </li>
<?php endif; ?>

                            </ul>
                        </div>

                    </div>


                    <div class="offer" id="offer">
                        <h1 class="animated fadeIn">
                            Делаем будущее уже сегодня
                        </h1>
                        <a href="#">
                            <img src="img/CTA.svg" alt="" class="CTA animated fadeIn" id="CTA">
                        </a>
                    </div>



                    <div class="mobham">
                        <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="50" onclick="this.classList.toggle('active')">
                            <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                            <path class="line middle" d="m 30,50 h 40" />
                            <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                        </svg>
                    </div>

                    <div class="menumob">
                        <ul class="menu__box">
                            <li>
                                <a href="index.php" class="active">
                                    Главная
                                </a>
                            </li>
                            <li>
                                <a href="umward.php">
                                    Умные шкафы
                                </a>
                            </li>
                            <li>
                                <a href="umhouse.php">
                                    Умный дом
                                </a>
                            </li>
                            <li>
                                <a href="ship_pay.php">
                                    Доставка
                                </a>
                            </li>
                            <li>
<?php if ($_COOKIE['user'] == ''):?>

                            <li>
                                <a href="login.php">
                                    Вход
                                </a>
                            </li>
                            <li>
                                <a href="register.php">
                                    Регистрация
                                </a>
                            </li>
<?php else: ?>
                                <li>
                                    <li>
<?=$_COOKIE['user']?>
                                </li>
                                
                                <li>
                                    <a href="exit.php">Выход</a>
                                </li>
<?php endif; ?>
                        </ul>
                    </div>


                </nav>
            </div>
        </div>
    </header>
    <section class="aboutus animated " id="aboutus">
        <div class="container">
            <div class="us y">
                <div class="ustext animated">
                    <h2>
                        Кто мы и чем занимаемся
                    </h2>
                    <p class="ushi">
                        Привет дорогой гость, мы - компания VENI.
                    </p>
                    <p>
                        Наша цель - продвижение новых технологий в жизни людей, сделать то, что раньше можно было увидеть только в кино, чем-то более доступным, или даже повседневным.
                    </p>
                    <p>
                        Сейчас мы работаем всего в двух направлениях - умные шкафы и умные дома - но это только начало.
                    </p>
                    <p>
                        Надеюсь, тебе это также интересно, как и нам
                    </p>
                </div>
                <img src="img/robo.png" class="robo">
            </div>
        </div>
    </section>
    <section class="umshk" id="umshk">
        <div class="container">
            <div class="umshktxt animated">
                <h2>
                    Умные шкафы
                </h2>
                <p>
                    Наш инновационный подход к автоматизации повседневных задач
                </p>
                <div class="btn">
                    <div class="btn1">
                        <a href="umward.php">Подробнее ></a>
                    </div>

                </div>
            </div>
            <img src="img/site1.png" alt="" class="simg animated">
        </div>
    </section>
    <section class="umhouse" id="umhouse">
        <div class="container">
            <div class="umhousetxt animated">
                <h2>
                    Умные дома
                </h2>
                <p>
                    Внесите в вашу жизнь новые технологии и впечатления
                </p>
                <div class="btn">
                    <div class="btn1">
                        <a href="umhouse.php">Подробнее ></a>
                    </div>

                </div>
            </div>
            <div class="simgg animated">
                <img src="img/site2.png" alt="" class="simg animated">
            </div>
        </div>
    </section>
    <section class="spp" id="spp">
        <div class="container">
            <div class="carts" id="carts">
                <div class="cart cart1 animated">
                    <h2>
                        Доставка и оплата
                    </h2>
                    <p>
                        Всё, что необходимо знать при заказе
                    </p>

                    <div class="btn1 btnpodr">
                        <a href="ship_pay.php">Подробнее ></a>
                    </div>
                    <img src="img/shipay.jpg" alt="" class="imgcart">
                </div>

            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer animated" id="footer">
                <img src="img/logoblack.svg" class="logofooter">
                <div class="col col1">
                    <ul class="fotmenu">
                        <li>
                            <h3>
                                Наши контакты
                            </h3>
                        </li>
                        <li>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1410.5012731653248!2d30.329373860152433!3d60.00263866916683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46963475ee23888d%3A0x4bceadfd8a8c0ce!2z0JjQvdGB0YLQuNGC0YPRgiDRgdGA0LXQtNC90LXQs9C-INC_0YDQvtGE0LXRgdGB0LjQvtC90LDQu9GM0L3QvtCz0L4g0L7QsdGA0LDQt9C-0LLQsNC90LjRjw!5e0!3m2!1sru!2sru!4v1620907841333!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </li>
                        <li>
                            <a href="#" class="ftel">
                                Номер телефона: +7 911 193 15-12
                            </a>
                        </li>
                        <li>
                            <a href="#" class="femail">
                                Email: matvezukmax@gmail.com
                            </a>
                        </li>
                    </ul>
                </div>


                <p class="prav">2021 Все права защищены</p>

            </div>
        </div>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/anim.js"></script>
    <script>
        function burgerMenu(icon) {
            icon.classList.toggle("change");
        }

    </script>

    <script>
        let i = 0;
        $(".mobham").click(function() {
            $(".menumob").toggle();
            if (i == 0) {
                $("body").css("overflow", "hidden");
                i = 1;
            } else {
                $("body").css("overflow", "");
                i = 0;
            }

        })

    </script>
</body>

</html>
