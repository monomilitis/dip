<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Умные шкафы</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style_white.css?<?php echo time();?>">
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector('input').focus();
        })

    </script>
</head>

<body>
    <header class="header" id="header">
        <div class="container">
            <div class="nav">
                <a href="index.php"> <img src="img/logoblack.svg" alt="Veni" class="logo animated fadeInDown"></a>
                <ul class="menu animated fadeInDown">
                    <li>
                        <a href="index.php">
                            Главная
                        </a>
                    </li>
                    <li>
                        <a href="umward.php" class="active">
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
            <div class="wrapper animated fadeIn" id="wrapper">

                <img src="img/umward/render.jpg" class="imgmain">

                <p>Мы знаем как сделать ваш бизнес немного технологичнее</p>
                <div class="h1btn">
                    <h1>
                        Умные шкафы Veni
                    </h1>
                    <a href="#">
                        <img src="img/umward/CTA.svg" alt="" class="CTA animated fadeIn" id="CTA">
                    </a>
                </div>
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
                        <a href="index.php">
                            Главная
                        </a>
                    </li>
                    <li>
                        <a href="umward.php" class="active">
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
    </header>

    <section class="about">
        <div class="container y">
            <div class="opr animated fadeIn">
                <h2>
                    Умный шкаф
                </h2>
                <img src="img/umward/line.svg" alt="">
                <div class="topr">
                    <p>
                        Инновационное решение для вас и вашего бизнеса.
                        Автоматизация процессов, позволяющая выйти на новые высоты и снижающая затраты
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section class="resh">
        <div class="container">
            <h2>
                Готовые решения
            </h2>
            <div class="opr">
                <div class="cols">
                    <h3>
                        Для офиса
                    </h3>
                    <p>
                        Наша продукция позволит увеличить КПД вашего офиса, упростит работу с документами и на производстве, и ещё многое другое.
                    </p>
                    <div class="vozms">
                        <h3>
                            Возможности применения
                        </h3>
                        <div class="vozm">
                            <img src="img/umward/box.svg" alt="">
                            <p>Cистема для хранения архивов и бухгалтерии</p>
                        </div>
                        <div class="vozm">
                            <img src="img/umward/od.svg" alt="">
                            <p>Cистема хранения и выдачи вещей</p>
                        </div>
                        <div class="vozm">
                            <img src="img/umward/umb.svg" alt="">
                            <p>Cистема сушки зонтов и одежды</p>
                        </div>
                        <div class="vozm">
                            <img src="img/umward/food.svg" alt="">
                            <p>Cистема хранения еды</p>
                        </div>
                        
                    </div>

                </div>
                <img src="img/umward/office.jpg" alt="" class="officeimg">
            </div>



            <div class="opr">
                <img src="img/umward/proizv.jpg" alt="" class="officeimg">
                <div class="cols">
                    <h3>
                        Для производства
                    </h3>
                    <p>
                        Наша продукция позволит уменьшить риски простоя производства, снизить затраты на обслуживание
                    </p>
                    <div class="vozms">
                        <h3>
                            Возможности применения
                        </h3>
                        <div class="vozm">
                            <img src="img/umward/bigob.svg" alt="">
                            <p>Система выдачи и учёта большого оборудования</p>
                        </div>
                        <div class="vozm">
                            <img src="img/umward/mrash.svg" alt="">
                            <p>Система выдачи и учёта мелких расходников</p>
                        </div>
                        <div class="vozm">
                            <img src="img/umward/enter.svg" alt="">
                            <p>Терминал выдачи однодневных пропусков для гостей при входе</p>
                        </div>
                        <div class="vozm">
                            <img src="img/umward/food.svg" alt="">
                            <p>Cистема хранения еды</p>
                        </div>
                        
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="calc">
        <div class="container">
            <div class="cart">
                <form action="#">
                    <input type="hidden" name="project_name" value="Veni">
                    <input type="hidden" name="admin_email" value="timur.narzikulov@gmail.com">
                    <input type="hidden" name="form_subject" value="Умные шкафы">
                    <div class="calc__items">
                        <h2>Расчёт стоимости</h2>
                        <div class="calc__item">
                            <div class="calc__input">
                                <h4>Сколько ячеек будет нужно?</h4>
                                <div class="number__but">
                                    <button class="number__down" aria-label="меньше"></button>
                                    <input type="number" name="Количество ячеек" min="6" max="100" step="1">
                                    <button class="number__up" aria-label="больше" onclick="document.getElementById('full').style.display='block'"></button>
                                </div>
                            </div>
                            <div class="calc__input">
                                <h4>Высота:</h4>
                                <div class="number__but">
                                    <button class="number__down" aria-label="меньше"></button>
                                    <input type="number" name="Количество ячеек" min="1" max="100" step="1">
                                    <button class="number__up" aria-label="больше"></button>
                                </div>
                            </div>
                            <div class="calc__input">
                                <h4>Ширина:</h4>
                                <div class="number__but">
                                    <button class="number__down" aria-label="меньше"></button>
                                    <input type="number" name="Количество ячеек" min="1" max="100" step="1">
                                    <button class="number__up" aria-label="больше"></button>
                                </div>
                            </div>
                            <div class="calc__input">
                                <h4>Глубина:</h4>
                                <div class="number__but">
                                    <button class="number__down" aria-label="меньше"></button>
                                    <input type="number" name="Количество ячеек" min="1" max="100" step="1">
                                    <button class="number__up" aria-label="больше"></button>
                                </div>
                            </div>
                        </div>
                        <div id="full">
                            <div class="calc__item">
                                <p class="title">Выберите Мариал:</p>

                                <input type="radio" name="material" value="Оргстекло" id="material_1">
                                <label for="material_1" class="inside inside_1">Огстекло</label>
                                <br>
                                <input type="radio" name="material" value="ДСП" id="material_2">
                                <label for="material_2" class="inside inside_2">ДСП</label>
                                <br>
                                <input type="radio" name="material" value="ЛСПД" id="material_3">
                                <label for="material_3" class="inside inside_3">ЛСПД</label>
                                <br>
                                <input type="radio" name="material" value="Натуральное стекло" id="material_4">
                                <label for="material_4" class="inside inside_4">Натуральное стекло</label>
                            </div>
                            <div class="calc__item">
                                <p class="title">Нужны ячеки с распашными дверцами?</p>
                                <input type="radio" value="Распашные дверцы - да" name="swing" id="swing_1" onclick="document.getElementById('swing').style.display='block'">
                                <label for="swing_1" class="inside inside_5">Да</label>
                                <br>
                                <input type="radio" value="Распашные дверцы - нет" name="swing" id="swing_2" onclick="document.getElementById('swing').style.display='none'">
                                <label for="swing_2" class="inside inside_6">Нет</label>
                                <div id="swing">
                                    <div class="calc__input">
                                        <h4>Сколько ячеек будет нужно?</h4>
                                        <div class="number__but">
                                            <button class="number__down" aria-label="меньше"></button>
                                            <input type="number" name="Количество ячеек" min="6" max="100" step="1">
                                            <button class="number__up" aria-label="больше"></button>
                                        </div>
                                    </div>
                                    <div class="calc__input">
                                        <h4>Высота:</h4>
                                        <div class="number__but">
                                            <button class="number__down" aria-label="меньше"></button>
                                            <input type="number" name="Количество ячеек" min="1" max="100" step="1">
                                            <button class="number__up" aria-label="больше"></button>
                                        </div>
                                    </div>
                                    <div class="calc__input">
                                        <h4>Ширина:</h4>
                                        <div class="number__but">
                                            <button class="number__down" aria-label="меньше"></button>
                                            <input type="number" name="Количество ячеек" min="1" max="100" step="1">
                                            <button class="number__up" aria-label="больше"></button>
                                        </div>
                                    </div>
                                    <div class="calc__input">
                                        <h4>Глубина:</h4>
                                        <div class="number__but">
                                            <button class="number__down" aria-label="меньше"></button>
                                            <input type="number" name="Количество ячеек" min="1" max="100" step="1">
                                            <button class="number__up" aria-label="больше"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="calc__item">
                                <p class="title">Выберите размер монитора:</p>
                                <input type="radio" value="Маленький монитор" name="monitor" id="monitor_1">
                                <label for="monitor_1" class="inside inside_7">Маленький</label>
                                <br>
                                <input type="radio" value="Средний монитор" name="monitor" id="monitor_2">
                                <label for="monitor_2" class="inside inside_8">Средний</label>
                                <br>
                                <input type="radio" value="Большой монитор" name="monitor" id="monitor_3">
                                <label for="monitor_3" class="inside inside_9">Большой</label>
                            </div>
                            <div class="calc__item">
                                <p class="title">Выберите интерфейс:</p>
                                <input type="radio" value="Стандартный" name="interface" id="interface_1">
                                <label for="interface_1" class="inside inside_10">Стандартный</label>
                                <br>
                                <input type="radio" value="Кастомный" name="interface" id="interface_2">
                                <label for="interface_2" class="inside inside_11">Кастомный</label>
                            </div>
                            <div class="calc__item">
                                <p class="title">Нужна ли подсветка?</p>
                                <input type="radio" value="Подсветка - да" name="rgb" id="rgb_1">
                                <label for="rgb_1" class="inside inside_5">Да</label>
                                <br>
                                <input type="radio" value="Подсветка - нет" name="rgb" id="rgb_2">
                                <label for="rgb_2" class="inside inside_6">Нет</label>
                            </div>
                            <div class="calc__item">
                                <p class="title">Нужнен ли датчик наличия товара?</p>
                                <input type="radio" value="Подсветка - да" name="sensor" id="sensor_1">
                                <label for="sensor_1" class="inside inside_5">Да</label>
                                <br>
                                <input type="radio" value="Подсветка - нет" name="sensor" id="sensor_2">
                                <label for="sensor_2" class="inside inside_6">Нет</label>
                            </div>
                            <div class="calc__item">
                                <p class="title">Нужны ли выдвигающиеся ящики?</p>
                                <input type="radio" value="Выдвигающиеся ящики - да" name="departing" id="departing_1" onclick="document.getElementById('departing').style.display='block'">
                                <label for="departing_1" class="inside inside_5">Да</label>
                                <br>
                                <input type="radio" value="Выдвигающиеся ящики - нет" name="departing" id="departing_2" onclick="document.getElementById('departing').style.display='none'">
                                <label for="departing_2" class="inside inside_6">Нет</label>
                                <div id="departing">
                                    <div class="calc__input">
                                        <h4>Сколько ячеек будет нужно?</h4>
                                        <div class="number__but">
                                            <button class="number__down" aria-label="меньше"></button>
                                            <input type="number" name="Количество ячеек" min="6" max="100" step="1">
                                            <button class="number__up" aria-label="больше"></button>
                                        </div>
                                    </div>
                                    <div class="calc__input">
                                        <h4>Высота:</h4>
                                        <div class="number__but">
                                            <button class="number__down" aria-label="меньше"></button>
                                            <input type="number" name="Количество ячеек" min="1" max="100" step="1">
                                            <button class="number__up" aria-label="больше"></button>
                                        </div>
                                    </div>
                                    <div class="calc__input">
                                        <h4>Ширина:</h4>
                                        <div class="number__but">
                                            <button class="number__down" aria-label="меньше"></button>
                                            <input type="number" name="Количество ячеек" min="1" max="100" step="1">
                                            <button class="number__up" aria-label="больше"></button>
                                        </div>
                                    </div>
                                    <div class="calc__input">
                                        <h4>Глубина:</h4>
                                        <div class="number__but">
                                            <button class="number__down" aria-label="меньше"></button>
                                            <input type="number" name="Количество ячеек" min="1" max="100" step="1">
                                            <button class="number__up" aria-label="больше"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="calc__item">
                                <p class="title">Какая система индентификации клиента нужна в системе?</p>
                                <input type="radio" value="Отпечаток пальца" name="identif" id="identif_1">
                                <label for="identif_1" class="inside inside_4">Отпечаток пальца</label>
                                <br>
                                <input type="radio" value="HID пропуск" name="identif" id="identif_2">
                                <label for="identif_2" class="inside inside_12">HID пропуск</label>
                                <br>
                                <input type="radio" value="RFID пропуск" name="identif" id="identif_3">
                                <label for="identif_3" class="inside inside_13">RFID пропуск</label>
                                <br>
                                <input type="radio" value="QR код" name="identif" id="identif_4">
                                <label for="identif_4" class="inside inside_14">QR код</label>
                            </div>
                            <div class="calc__item">
                                <p class="title">Выберите озвучивание действий на экране:</p>
                                <input type="radio" name="voice" value="Диктор" id="voice_1">
                                <label for="voice_1" class="inside inside_15">Диктор</label>
                                <br>
                                <input type="radio" name="voice" value="Генератор речи" id="voice_2">
                                <label for="voice_2" class="inside inside_16">Генератор речи</label>
                                <br>
                                <input type="radio" name="voice" value="Озвучивание действий на экране не требуется" id="voice_3">
                                <label for="voice_3" class="inside inside_3">Нет</label>
                            </div>
                            <div class="calc__item">
                                <p class="title">Нужна ли дополнительная кастомизация камеры?</p>
                                <input type="radio" name="castom" value="Дополнительная кастомизация - да" id="castom_1" onclick="document.getElementById('castom').style.display='block'">
                                <label for="castom_1" class="inside inside_5">Да</label>
                                <br>
                                <input type="radio" name="castom" value="Дополнительная кастомизация - нет" id="castom_2" onclick="document.getElementById('castom').style.display='none'">
                                <label for="castom_2" class="inside inside_6">Нет</label>
                                <div id="castom">
                                    <p class="title">Какая?</p>
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="calc__item">
                                <p class="title">Нужно ли видеонаблюдение?</p>
                                <input type="radio" value="Видеонаблюдение - да" name="video" id="video_1">
                                <label for="video_1" class="inside inside_5">Да</label>
                                <br>
                                <input type="radio" value="Видеонаблюдение - нет" name="video" id="video_2">
                                <label for="video_2" class="inside inside_6">Нет</label>
                            </div>
                            <div class="calc__item">
                                <p class="title">Нужен ли резервный канал интернета?</p>
                                <input type="radio" value="Резервный канал интернета - да" name="inet" id="inet_1">
                                <label for="inet_1" class="inside inside_5">Да</label>
                                <br>
                                <input type="radio" value="Резервный канал интернета - нет" name="inet" id="inet_2">
                                <label for="inet_2" class="inside inside_6">Нет</label>
                            </div>
                            <div class="calc__item">
                                <p class="title">Нужен ли источник бесперебойного питания?</p>
                                <input type="radio" value="Бесперебойник - да" name="power" id="power_1">
                                <label for="power_1" class="inside inside_5">Да</label>
                                <br>
                                <input type="radio" value="Бесперебойник - нет" name="power" id="power_2">
                                <label for="power_2" class="inside inside_6">Нет</label>
                            </div>
                            <div class="calc__item">
                                <p class="title">Нужна ли дизинфекция камер?</p>
                                <input type="radio" value="Дизинфекция камер - да" name="disinf" id="disinf_1">
                                <label for="disinf_1" class="inside inside_5">Да</label>
                                <br>
                                <input type="radio" value="Дизинфекция камер - нет" name="disinf" id="disinf_2">
                                <label for="disinf_2" class="inside inside_6">Нет</label>
                            </div>
                            <div class="calc__item">
                                <p class="title">Введите ваши контакты</p>
                                <div class="contacts">
                                    <input type="text" placeholder="Фамилия" name="Фамилия" required>
                                    <input type="text" placeholder="Имя" name="Имя" required>
                                    <input type="text" placeholder="Отчество" name="Отчество" required>
                                    <input type="email" placeholder="E-Mail" name="E-Mail" required>
                                    <input type="tel" data-tel-input name="Телефон" placeholder="Телефон" maxlength="18" required>
                                </div>
                            </div>
                            <input type="submit">
                        </div>
                        

                    </div>
                </form>
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
								Номер телефона:  +7 911 193 15-12 
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
    <script src="js/anim.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <script>
        let ham = 0;
        $(".mobham").click(function() {
            $(".menumob").toggle();
            $(".line").css("stroke", "white");
            if (ham == 0) {
                $("body").css("overflow", "hidden");
                ham = 1;
            } else {
                $("body").css("overflow", "");
                $(".line").css("stroke", "black");
                ham = 0;
            }

        })

    </script>

</body>

</html>
