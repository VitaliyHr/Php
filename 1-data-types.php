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
    // Начало на ст. 123


    // Получение даты в переменную в двух форматах
    $dat = date("d.m.y");
    $time = date("h:i:s");

    echo "<h1> Today's date is $dat and time is $time </h1>\n";

    // Сколько байт занимает целочисення переменная
    echo "<p>Size of int is \n".PHP_INT_SIZE."</p>\n\n";

    // Максимальный размер целочисленной переменной
    echo "<p> Max int size is ".PHP_INT_MAX."\n</p>";   

    // Получение типа переменной у виде строки
    echo "<p> Type of dat is ".gettype($dat)."</p>";

    // Способ задания чисел двойной точности
    $numb = 1.2e-4;

    echo "<p>you can write letters like this: 12e-4 whitch will look like this $numb </p>";

    // Вывод NAN из-за невосможности такой математической операции
    echo "<p>Olso there is such data type as nan whitch will be printed when mathimatical operation dosent work ".sqrt(-1)."</p>";

    // Вывод INF из-за преувиличеня лимита переменной
    $some_big_value = 9999999999999999999999999999999999999999999999999999999999999999999999999900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000;
    echo "<p>Inf data type ".$some_big_value."</p>";

    // Инициализация хеш-таблицы или массива
    $arr = array(
        0 => "hello",
        1 => "I am",
        2 => "Vitaliy",
        3 => "Hryhoriv",
        4 => 18,
        "age" => 25
    );

    // Инициализация копии массива
    $test = $arr;

    // Изминение елемента массива
    $test[1] = "My name is";

    // Цыкл
    for($i = 0; $i < sizeof($arr) - 1; $i++){
        echo "<p>arr Our keys and values $arr[$i]</p>\n";
        echo "<p>test Our keys and values $test[$i]</p>\n";
    };

    // Вывод елемента массива по ключу
    echo "<p>My age is ".$arr["age"]."</p>";

    // Изминение елемента массива по ключу
    $arr["age"] = 100;
    echo "<p>Now my age is ".$arr["age"]."</p>";

    // Иницализация логической переменной
    $bool = false;

    // Оператор условия
    if($bool == false) {
        echo "<p>bool is false $bool</p>";
    }

    // Проверка на существования переменной
    if(isset($test)){
        echo("<p>Test is exist</p>");
    };

    // Удаление переменной
    unset($test);

    // Проверка на существования переменной
    if(isset($test)){
        echo("<p>Test is exist</p>");
    }
    else{echo("<p>Test is not exist</p>");}

    // Инициализация переменной типом null
    $nul = null;

    // Проверка на относительность переменной к тому или инному типу
    echo "<p> Sqrt from -1 is Nan type: ".is_nan(sqrt(-1))."</p>";
    echo "<p> arr is array: ".is_array($arr)."</p>";
    echo "<p> Bool is boolean type: ".is_bool($bool)."</p>";
    echo "<p> numb is double type: ".is_double($numb)."</p>";
    echo "<p> arr[4] is integer type: ".is_int($arr[4])."</p>";
    echo "<p> some_big_value is Infinity type: ".is_infinite($some_big_value)."</p>";
    echo "<p> Date is string type: ".is_string($dat)."</p>";
    echo "<p> numb is numeric type: ".is_numeric($numb)."</p>";
    echo "<p> numb is finite type: ".is_finite($numb)."</p>";
    echo "<p> numb is salar type: ".is_scalar($numb)."</p>";
    echo "<p> Nul is null type: ".is_null($nul)."</p>";


    $a = "24";

    $b = 1.3333;

    // Установка типа переменной
    settype($a, "integer");

    // Превращает число в строке в число
    echo "<p>".gettype(intval("42"))."</p>";

    floatval($b);
    // doubleval($b);

    echo gettype($b);

    echo gettype($a);



    $elem1 = 10;
    
    // Ссылка на переменную
    $elem2 = & $elem1;

    // Теперь $elem1 and $elem2 = 0
    $elem2 = 0;

    $elem3 = $arr[2];

    echo "<p>elem1 = $elem1 a elem2 = $elem2 a elem3 = $elem3</p>";

    // Символичекая ссылка тоесть ссылается на имя переменной если добавить еще один знак $
    $sym_link = "elem1";

    echo "<p> name of link to the element".$$sym_link."</p>";

    // Константа указывающая на расположение данного файла
    echo "<p> Where is located this file ".__FILE__."</p>";

    
    // Константа указывающая на строку в которой вызвана
    echo "<p> Where interpretator now is (line in code)".__LINE__."</p>";
    
    // Константа указывающая на версию текущего интерпретатора
    echo "<p>".PHP_VERSION."</p>";

    // Константа указывающая на операционную систему 
    echo "<p>".PHP_OS."</p>";

    // Константа указывающая escape-последовательность (\n Linux  \r\n Windows)
    echo "<p>".PHP_EOL."</p>";

    // Опредиление новой константы
    define("consta", "some constant value", false);

    echo "<p>".consta."</p>";

    // true Если константа существует
    echo "<p>".defined("consta")."</p>";


    $value = mt_rand(1, 10);

    $name = "VALUE{$value}";

    define($name, $value);

    echo "<p> $name ".constant($name)."</p>";

    // Отладочные функции
    echo "<p>"; print_r($arr); echo "</p>";

    echo "<p>"; var_dump($arr); echo "</p>";
   
    echo "<p>"; var_export($arr);  echo "</p>";
    // echo "<p>""</p>";


    // Конец на ст. 142
     ?>
</body>
</html>