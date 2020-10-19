<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ( !isset($_REQUEST['Go'])): ?>

    <form action="<?=$_SERVER['SCRIPT_NSME']?>" method="get">
        <input type="number" name="salary" id="">
        <button type="submit" name="Go">Send</button>
    </form>

    <?php
        // Начало на ст. 176

        // Пример использования альтернативного else
        else :

                if($_REQUEST['salary'] <= 5000) {
                    echo "Money is not important :)<br>";
                }
                // Пример использования else if(){} (Альтернативный вариант elseif(){} )
                else if($_REQUEST['salary'] > 5000 && $_REQUEST['salary'] <= 10000){
                    echo "You have middle salary<br>";
                }
                else{
                    echo "You are rich man ;)<br>";
                }


                // Пример использования цыкла while
                $i = 5;
                $b = 1;
                while($i!= 1){
                    $b = $b * $i;
                    $i--; 
                    echo $b."<br>";
                }

                // Альтернативный вид
                while($i!= 1):
                    $b = $b * $i;
                    $i--; 
                    echo $b."<br>";
                endwhile;

                // Пример использования цыкла do while (Альтернативного вида не сужествует)
                do{
                    echo $i;
                    $i--;
                    echo "<br>";
                } while($i<-1);

                // Пример использованя цыкла for
                for($d = 0, $f = 10;$d <= $f; ++$d, $f--){
                    echo date("y.m.d h:i:s")."<br>";
                }

                // Альтернативний вид цыкла for
                for($d = 0, $f = 10;$d <= $f; ++$d, $f--):
                    echo date("y.m.d h:i:s")."<br>";
                endfor;

                // ct. 180
        endif;
    ?>
</body>
</html>