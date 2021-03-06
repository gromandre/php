<pre>
    <!-- Задание 1 -->

    <p>1. Выведите числа от 0 до 9</p>  
    <?php

        for ($i = 0; $i < 10; $i++) {
            echo $i . ' ';
        }
        ?>
    <br>


    <!-- Задание 2 -->

    <p>2. Выведите 10 случайных чисел от 1 до 10</p>
    <?php
        for ($i = 0; $i < 10; $i++) {
            echo rand(1, 10) . ' ';
        }
    ?>
    <br>


    <!-- Задание 3 -->

    <p>3. Создайте массив $items из 10 случайных целых значений от 0 до 9</p>
    <?php
        $items = [];

        for($i = 0; $i <= 10; $i++) {
            $rundomNumber = rand(0, 9);
            array_push($items, $rundomNumber);
        };
        var_dump($items);
    ?>
    <br>


    <!-- Задание 4 -->

    <p>4. Добавляйте случайные целые числа от 1 до 9 в массив $numbers до тех пор, пока сумма всех элементов этого массива меньше 100
    А затем выведите сколько числе всего в массиве: 'Длинна массива numbers = {}'</p>

    <?php
        $numbers = [];

        for ($i = 0; array_sum($numbers) < 100; $i++) {
            $rundomNumber = rand(1, 9);
            array_push($numbers, $rundomNumber);
        }

        var_dump($numbers);

        echo('Длинна массива numbers = ' . count($numbers));


    // Задание 5 

        /* 5. Переберите массив $numbers, созданный ранее, и посчитайте сумму всех четных чисел в нем
        Выведите следующие строки (как всегда вместо {} подставив нужные значения):
        Общая сумма массива numbers = {}
        Из нее часть, которая приходится на четные числа = {}
        И часть из нечетных чисел = {} */

        $even = [];
        $odds = [];

        foreach ($numbers as $value) {
            if ($value % 2 == 0) {
                $even[] = $value;
            } else {
                $odds[] = $value;
            }
        }

        echo(
            ' Общая сумма массива numbers = ' . array_sum($numbers) . 
            ' Из нее часть, которая приходится на четные числа = ' . array_sum($even) . 
            ' И часть из нечетных чисел = ' . array_sum($odds)
        )
    ?>
</pre>
