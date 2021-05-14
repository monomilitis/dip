<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style_white.css">
</head>

<body>
    <header class="header" id="header">
        <div class="container">
            <div class="head">
                <nav>
                    <div class="nav">
                        <a href="index.php"><img src="img/logoblack.svg" alt="Veni" class="logo animated fadeInDown"></a>
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


                            </ul>
                        </div>

                    </div>

                    

                    <div class="register">
                        <div class="h3">Войти с паролем</div>
                        <form action="auth.php" method="post">
                            <div class="register__input">
                                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
                            </div>
                            <button class="btn-success" type="submit">Войти</button>
                        </form>
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
                            
                        </ul>
                    </div>


                </nav>
            </div>
        </div>
    </header>

    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/anim.js"></script>
    <script src="js/main1.js"></script>
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
