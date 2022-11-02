<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Занятие 1</title>
</head>
<body>
    <div class="container">
        <h2>Задача 1</h2>
        <div class="task">
            <?php
                function CheckOddNumbers($i) {
                    return $i % 2 != 0 ? true : false;
                }
                $sum = 0;
                for ($i = 100;$i>=50;$i--) {
                    if (CheckOddNumbers($i)) {
                        echo "$i</br>";
                        $sum++;
                    }
                }
                echo "Всего $sum нечетных чисел";
            ?>
        </div>
        <h2>Задача 2</h2>
        <div class="task">
            <?php
                $x = (15+(37*11))/(95+21/2);
                echo "Переменная х в формуле равна $x";
            ?>
        </div>
        <h2>Задача 3</h2>
        <div class="task">
            <?php
                function GenerationMonth($count_day, $first_day) {
                    $month = [];
                    for ($i=1; $i<=$count_day; $i++) {
                        if ($i==1 or $i%7==1) {
                            $month[$i] = $first_day;
                        } elseif ($i==2 or $i%7==2) {
                            $month[$i] = 'Суббота';
                        } elseif ($i==3 or $i%7==3) {
                            $month[$i] = 'Воскресенье';
                        } elseif ($i==4 or $i%7==4) {
                            $month[$i] = 'Понедельник';
                        } elseif ($i==5 or $i%7==5) {
                            $month[$i] = 'Вторник';
                        } elseif ($i==6 or $i%7==6) {
                            $month[$i] = 'Среда';
                        } elseif ($i==7 or $i%7==7) {
                            $month[$i] = 'Четверг';
                        }
                    }
                    print_r($month);
                }
                GenerationMonth(31, 'Пятница');
            ?>
        </div>
    </div>
</body>
</html>