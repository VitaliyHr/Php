<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    // Начало на ст. 164

    // Если запустить сервер (например localhost) и запросить етот файл (localhost:3000/3-from.php)
    //  и поставить знак вопроса (?) и после него написать какой-то текст то он выведеться
    echo "<p>Dannie s komandnoi stroki ".$_SERVER['QUERY_STRING']."</p>";

    echo "<p>$REQUEST_METHOD</p>";

    // Вывод массива со всеми входними данными
    echo "<p>${var_export($_REQUEST)}</p>";

    // Перемення окружения
    echo "<p>${var_export($_SERVER)}</p>";

    
    // Вывод ip aдреса пользователя
    echo "<p>Your ip address: {$_SERVER['REMOTE_ADDR']}</p>";

    // Вывод cookies
    echo "<p>${var_export($_COOKIE)}</p>";

    // Пример как брать параметры с инпутов с одинаковыми именами
    if(isset($_REQUEST['go'])){
        echo "you have setted city {$_REQUEST['Data']['city']}";
    }
    ?>

    <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
    <input type="radio" name="Data[city]" value="KIEV" id="">
    <input type="radio" name="Data[city]" value="MOSKOW" id="">
    <button type="submit" name="go">PUSH</button>
    </form>

    <?php

    // Вывод всех глобальных переменных
    print_r($GLOBALS);

    ?>

    <!-- Пример простой регистрации -->
    <?php
        // Проверка на наличие нажатой кнопки
        if(!isset($_REQUEST['Start'])) {
    ?>
    <!--Ecли кнопка не нажата выведет ету фрому -->
    <form action="<?=$_SERVER['SCRIPT_NAME']?>">
    <input type="text" name="login">
    <input type="password" name="pass" id="">
    <button type="submit" name="Start">Start</button>
    </form>

    <?php 
    }
    // Если нажата проверяет форму на нужные поля
    else
    {
        if($_REQUEST['login'] == 'VitaliyHr' && $_REQUEST['pass'] == 123) {
            echo "<h1>Hello to user {$_REQUEST["login"]}</h1>";
        } 
        else {
            echo "YOU HAVE NO ACESS";
        }
    }
    // Конец на ст. 175
    ?>
</body>
</html>