<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="./regular.php">
<input type="button" value="Click" name="Go">
</form>

    <?php
    // Начало на ст. 143

    // Логичиские выражения
    $less = 10 < 20;

    $eqal = 10 == 10;

    $trut = !false;

    $one_else_true = $trut || $less;

    $fals = !$trut && $less;

    echo "<p>$less $eqal $trut $one_else_true $fals</p>";

    // Пример использования " кавычек 
    $var = "some string whitch 
    can be multiline";
    
    // Разница между " i '
    $str = 'Differense between " and \' \\ $var ';
    echo "<p>$str</p>";

    $hell = "Hell";

    // Пример использования {}
    echo "<p>${hell}o World</p>";


    $arr = array(
        "name" => "Vitaliy",
        "age" => 18
    );
    // Вывод елемента массива с помощью {}
    echo "<p> {$arr["name"]}</p>";

    // HERE документ

    // $name = <<<'MARKER' 
    // hello my dear friend
    // MARKER;

    // Возвидение в степень
    echo "<p>".(5**2)."</p>"; 

    // Конкатенация строк
    $hell .= "o";

    echo "<p>$hell</p>";

    // Задание явного типа
    settype($less, "integer");
    ++$less;
    echo "<p>$less</p>";

    // Задание констант
    define("LINE", 1);
    define("RECTAGLE",2);

    // echo "<p>".LINE | RECTAGLE."</p>";

    $a = 10;
    $b = 20;

    // Если а меньше б то -1 если ровно то 0 и если б больше а то 1
    echo "<p>".($a <=> $b)."</p>";

    
    // Если сравнивать число с чем либо то будет сравниваться в числовом формате
    if("" == 0) {
        echo "<p>Some text</p>"; // Will not be printed
    }

    $c = "0";
    $d = 0;

    // Проверка по типу (Ничего не выведеться)
    if($c === $b) {
        echo "<p>Sovpadenie</p>";
    }

    // Удаление переменной 
    unset($arr);

    $arr = array(1,5,6,3,2,4);

    // Сортировка массива с помошью оператра <=>
    usort($arr , function ($a, $b){ return $a <=> $b; });

    echo "<p>";
    print_r($arr);
    echo "</p>";

    // Тоже самое что и && (для || (or) )
    if(1 and 1) {
        echo "some text";
    }

    // Игнорирование потенциальной ошибки
    if(@$_REQUEST["Go"]){
        echo "Button was pushed";
    }

    // Решение проблемы с выводом ошибки
    if(isset($_REQUEST["GO"])){
        echo "Butto was pushed";
    }

    $x = null;
    $y = null;
    $z = 3;

    // Новый оператор 
    echo "<p>".($x ?? $y ?? $z)."</p>";

    // Конец на ст. 163
    ?>
</body>
</html>