<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Умные дома Veni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style_black.css?<?php echo time();?>">
    <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">

</head>

<body>
    <header class="header" id="header">
        <div class="container">
            <div class="nav">
                <a href="index.php"><img src="img/umhouse/logowhite.svg" alt="Veni" class="logo animated fadeInDown"></a>
                <ul class="menu animated fadeInDown">
                    <li>
                        <a href="index.php">
                            Главная
                        </a>
                    </li>
                    <li>
                        <a href="umward.php">
                            Умные шкафы
                        </a>
                    </li>
                    <li>
                        <a href="umhouse.php" class="active">
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
            <div class="mobham">
                <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="50" onclick="this.classList.toggle('active')">
                  <path
                        class="line top"
                        d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                  <path
                        class="line middle"
                        d="m 30,50 h 40" />
                  <path
                        class="line bottom"
                        d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
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
                                <a href="umward.php">
                                    Умные шкафы
                                </a>
                            </li>
                            <li>
                                <a href="umhouse.php" class="active">
                                    Умный дом
                                </a>
                            </li>
                            <li>
                                <a href="ship_pay.php" >
                                    Доставка
                                </a>
                            </li>
                            
                        </ul>
                    </div>
        </div>
    </header>
    <section class="offersect">
        <div class="container">
            <div class="wrapper" id="wrapper">
                <div class="offer animated fadeIn">

                    <p>Будущее в каждом доме</p>
                    <div class="h1btn">
                        <h1>
                            Умный дом Veni
                        </h1>
                        <a href="#">
                            <img src="img/CTA.svg" alt="" class="CTA animated pulse" id="CTA">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="aboutit" id="aboutit">
        <div class="container">
            <div class="it animated fadeIn">
                <img src="img/umhouse/slide1.png" class="slide1">
                <div class="ittext">
                    <h2>
                        Умный дом -
                    </h2>

                    <p>
                        инженерная система и интерфейс управления всеми устройствами современного жилого пространства
                    </p>
                </div>

            </div>
        </div>
    </section>
     <section class="calcul">
        <div class="container">
            <form action="#" name="form">
                <input type="hidden" name="project_name" value="">
                <input type="hidden" name="admin_email" value="admin@mail.com">
                <input type="hidden" name="form_subject" value="form">
                <div class="calc">
                    <div class="left">
                        <div class="room">
                            <h3>Выбор помещения:</h3>
                            <div class="room__radio">
                                <img src="img/Kvartira.svg">
                                <input type="radio" name="room" value="Квартира" id="room_1">
                                <label for="room_1">Квартира</label>
                            </div>
                            <div class="room__radio">
                                <img src="img/Dom.svg">
                                <input type="radio" name="room" value="Частный дом" id="room_2">
                                <label for="room_2">Частный дом</label>
                            </div>
                        </div>
                        <div class="characteristic">
                            <h3>Характеристика помещения:</h3>
                            <label for="square">Площадь, м2</label>
                            <div class="slider">
                                <output for="range" id="volume" class="square" name="Площадь = ">1</output>
                                <input type="range" min="1" max="500" step="1" name="square" value="1" id="range" oninput="outputUpdate(value)">
                            </div>
                            <div class="buttons">
                                <div class="rooms__value">
                                    <label for="rooms">Кол-во комнат</label>
                                    <div class="but">
                                        <button class="minus"></button>
                                        <input type="text" value="1" name="rooms" min="1" max="100" step="1" id="room">
                                        <button class="plus"></button>
                                    </div>
                                </div>
                                <div class="bath__value">
                                    <label for="bath">Кол-во санузлов</label>
                                    <div class="but">
                                        <button class="minus"></button>
                                        <input type="text" value="1" name="bath" min="1" max="100" step="1" id="bath">
                                        <button class="plus"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="center">
                        <h3>Опции:</h3>
                        <div class="options">
                            <img src="img/svet.svg" type="">
                            <input type="checkbox" value="Освещение" id="option_1" name="options">
                            <label for="option_1">Освещение</label>
                        </div>
                        <div class="options">
                            <img src="img/zhalyuzi.svg" type="">
                            <input type="checkbox" value="Жалюзи и шторы" id="option_2" name="options">
                            <label for="option_2">Жалюзи и шторы</label>
                        </div>
                        <div class="options">
                            <img src="img/klimat-kontrol.svg" type="">
                            <input type="checkbox" value="Климат контроль" id="option_3" name="options">
                            <label for="option_3">Климат контроль</label>
                        </div>
                        <div class="options">
                            <img src="img/bezopasnost.svg" type="">
                            <input type="checkbox" value="Безопасность" id="option_4" name="options">
                            <label for="option_4">Безопасность</label>
                        </div>
                        <div class="options">
                            <img src="img/videonablyudenie.svg" type="">
                            <input type="checkbox" value="Видеонаблюдение" id="option_5" name="options">
                            <label for="option_5">Видеонаблюдение</label>
                        </div>
                        <div class="options">
                            <img src="img/Upravlenie.svg" type="">
                            <input type="checkbox" value="Управление" id="option_6" name="options">
                            <label for="option_6">Управление</label>
                        </div>
                        <div class="options">
                            <img src="img/multimedia.svg" type="">
                            <input type="checkbox" value="Мультимедия" id="option_7" name="options">
                            <label for="option_7">Мультимедия</label>
                        </div>
                    </div>

                    <div class="right">
                        <div id="light">
                            <div class="light_1" id="l1">
                                <input type="checkbox" name="light" id="light_1" value="3000">
                                <label for="light_1">Обычный свет</label>
                                <div class="but" id="but_l1">
                                    <button class="minus"></button>
                                    <input type="text" value="0" name="rooms" min="0" max="99" step="1" id="qty_l1">
                                    <button class="plus"></button>
                                </div>
                            </div>
                            <div class="light_2" id="l2">
                                <input type="checkbox" name="light" id="light_2" value="6000">
                                <label for="light_2" title="Возможность регулировать интенсивность света">Диммируемый свет</label>
                                <div class="but" id="but_l2">
                                    <button class="minus"></button>
                                    <input type="text" value="0" name="rooms" min="0" max="99" step="1" id="qty_l2">
                                    <button class="plus"></button>
                                </div>
                            </div>
                        </div>
                        <div id="curtains">
                            <div class="curtains_1" id="c1">
                                <input type="checkbox" name="curtains" id="curtains_1" value="40000">
                                <label for="curtains_1">Раздвижная штора</label>
                                <div class="but" id="but_c1">
                                    <button class="minus"></button>
                                    <input type="text" value="0" name="rooms" min="0" max="99" step="1" id="qty_c1">
                                    <button class="plus"></button>
                                </div>
                            </div>
                            <div class="curtains_2" id="c2">
                                <input type="checkbox" name="curtains" id="curtains_2" value="40000">
                                <label for="curtains_2">Рулонная штора</label>
                                <div class="but" id="but_c2">
                                    <button class="minus"></button>
                                    <input type="text" value="0" name="rooms" min="0" max="99" step="1" id="qty_c2">
                                    <button class="plus"></button>
                                </div>
                            </div>
                        </div>
                        <div id="climate">
                            <div class="climate__left">
                                <div class="climate_1">
                                    <input type="radio" name="climate" value="10000" id="climate_1">
                                    <label for="climate_1" title="Подключение к готовому кондиционеру">Готовый кондиционер</label>

                                </div>
                                <div class="climate_2">
                                    <input type="radio" name="climate" value="50000" id="climate_2">
                                    <label for="climate_2">Установка с нуля</label>
                                </div>
                            </div>
                            <div class="climate__right">
                                <div class="climate_3">
                                    <input type="checkbox" name="climate" value="5000" id="climate_3">
                                    <label for="climate_3" title="Подключение к батарее">Батарея</label>
                                </div>
                                <div class="climate_4">
                                    <input type="checkbox" name="climate" value="5000" id="climate_4">
                                    <label for="climate_4" title="Подключение к тёплому полу">Тёплый пол</label>
                                </div>
                            </div>
                        </div>
                        <div id="safety">
                            <div class="safety__left">
                                <div class="safety_1">
                                    <input type="checkbox" name="safety" value="15000" id="safety_1">
                                    <label for="safety_1">Утечка воды</label>
                                    <div class="but" id="but_s1">
                                        <button class="minus"></button>
                                        <input type="text" value="0" name="rooms" min="0" max="99" step="1" id="qty_s1">
                                        <button class="plus"></button>
                                    </div>
                                </div>
                                <div class="safety_2" id="">
                                    <input type="checkbox" name="safety" value="20000" id="safety_2">
                                    <label for="safety_2">Утечка газа</label>
                                    <div class="but" id="but_s2">
                                        <button class="minus"></button>
                                        <input type="text" value="0" name="rooms" min="0" max="99" step="1" id="qty_s2">
                                        <button class="plus"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="safety__right">
                                <div class="safety_3">
                                    <input type="checkbox" name="safety" value="4000" id="safety_3">
                                    <label for="safety_3">Датчик движения</label>
                                    <div class="but" id="but_s3">
                                        <button class="minus"></button>
                                        <input type="text" value="0" name="rooms" min="0" max="99" step="1" id="qty_s3">
                                        <button class="plus"></button>
                                    </div>
                                </div>
                                <div class="safety_4">
                                    <input type="checkbox" name="safety" value="4000" id="safety_4">
                                    <label for="safety_4" title="Датчик разбития окон">Датчик окон</label>
                                    <div class="but" id="but_s4">
                                        <button class="minus"></button>
                                        <input type="text" value="0" name="rooms" min="0" max="99" step="1" id="qty_s4">
                                        <button class="plus"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="video">
                            <div class="video__left">
                                <div class="video_1">
                                    <input type="checkbox" name="video" value="12000" id="video_1">
                                    <label for="video_1">Камера</label>
                                    <div class="but" id="but_v1">
                                        <button class="minus"></button>
                                        <input type="text" value="0" name="rooms" min="0" max="99" step="1" id="qty_v1">
                                        <button class="plus"></button>
                                    </div>
                                </div>
                                <div class="video_2">
                                    <input type="checkbox" name="video" value="7000" id="video_2">
                                    <label for="video_2">Хранение записей</label>
                                </div>
                            </div>
                            <div class="video__right">
                                <div class="video_3">
                                    <input type="checkbox" name="video" value="10000" id="video_3">
                                    <label for="video_3">Управление воротами</label>
                                </div>
                                <div class="video_4">
                                    <input type="checkbox" name="video" value="20000" id="video_4">
                                    <label for="video_4">Видеодомофон</label>
                                </div>
                            </div>
                        </div>
                        <div id="control">
                            <div class="control__left">
                                <div class="control_1">
                                    <input type="checkbox" name="control" value="10000" id="control_1">
                                    <label for="control_1">Управление голосом</label>
                                </div>
                                <div class="control_2">
                                    <input type="checkbox" name="control" value="25000" id="control_2">
                                    <label for="control_2" title="Интернет включает в себя точки дотупа WI-FI">Wi-Fi</label>
                                </div>
                            </div>
                            <div class="control__right">
                                <div class="control_3">
                                    <input type="checkbox" name="control" value="150000" id="control_3">
                                    <label for="control_3" title="Проектор с экраном и колонками">Проектор</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="rasch">
                    <div class="price">
                        <input type="button" id="btn" class="btn1" value="Рассчитать">
                        <span id="out">0</span>
                        <span id="rub">₽</span>
                    </div>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="submit">Отправить запрос</a>
                </div>
                <div id="modal">
                    <div class="send">
                        <h2>Введите свои данные</h2>
                        <p><label for="firstname">Фамилия</label>
                            <input required type="text" id="firstname">
                        </p>
                        <p><label for="middlename">Имя</label>
                            <input required type="text" id="middlename">
                        </p>
                        <p><label for="lastname">Отчество</label>
                            <input required type="text" id="lastname">
                        </p>
                        <p><label for="tel">Телефон</label>
                            <input required type="tel" id="tel">
                        </p>
                        <p><label for="email">Email</label>
                            <input required type="email" id="email">
                        </p>
                        <input type="submit" class="send__form" value="Отправить">
                    </div>
                </div>
            </form>
            </div>
    </section>
    <section class="korobka">

    </section>
    <section class="usedsys" id="usedsys">
        <div class="container">
            <div class="syscont">
                <h2>
                    Какие системы мы используем
                </h2>
                <div class="sysp">
                    <p>
                        Наша компания работает с готовыми решениями компаний Sonoff и Aqara, также используются системы собственного производства
                    </p>
                </div>
                <div class="logosys">
                    <img src="img/umhouse/logo1.png" alt="">
                    <img src="img/umhouse/logo2.png" alt="">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    let ham=0;
    $(".mobham").click(function(){
        $(".menumob").toggle();
        
        if(ham==0){
        $("body").css("overflow","hidden"); 
        ham=1;
        }
        else
        {
        $("body").css("overflow",""); 
 
        ham=0;
        }
         
    })
</script>
</body>

</html>
