<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING); 
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $tel = filter_var(trim($_POST['tel']),
    FILTER_SANITIZE_NUMBER_INT);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "Недопустимая длина логина";
        exit();
    
    } else if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "Недопустимая длина имени";
        exit(); 
        
    } else if (mb_strlen($pass) < 3 || mb_strlen($pass) > 10) {
        echo "Недопустимая длина пароля (от 3 до 10 символов)";
        exit();
    }
    

    $pass = md5($pass."gsdhjfgsd11");

    $mysql = new mysqli('localhost', 'root', '', 'register-bd');
    $mysql->query("INSERT INTO `users` (`login`, `name`, `tel`, `pass`)
    VALUES('$login', '$name', '$tel', '$pass')");

    $mysql->close();

    header('Location: /dip/index.php')
?>