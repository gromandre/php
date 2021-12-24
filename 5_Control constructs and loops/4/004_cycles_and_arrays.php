<pre>
    <?php

        // Циклы для данных в массивах

        // 1. Создайте массив скучных игрушек - $boringToys. Создайте в нем случайное количество элементов от 1 до 10, где каждый элемент этого массива это ассоциативный массив с двумя полями:
        // - Название игрушки: в виде 'Игрушка 1'
        // - Цена игрушки: случайное число от 100 до 1000
        $boringToys = [];
        $rundomNumber = rand(1, 10);

        for ($i=1; $i <= $rundomNumber; $i++) {
            $randomPrice = rand(100, 1000);

            $boringToys[] = [
                'nameToy' => 'Игрушка ' . $i,
                'praceToy' => $randomPrice
            ];
        };

        var_dump($boringToys);


        //ИМПРОВИЗИРОВАННЫЙ ОТСТУП
        echo("
        ");


        // Дан массив $cars. Состоящий из трех машин со следующими данными: Мерседес - 10000 руб, BMW - 9999 руб, Автобус - 20000 руб.
        $cars = [
            [
                'name' => 'Мерседес',
                'price' => 10000,
                'colors' => [],
            ],
            [
                'name' => 'BMW',
                'price' => 9999,
                'colors' => [],
            ],
            [
                'name' => 'Автобус',
                'price' => 20000,
                'colors' => [],
            ],
        ];
        
        // 2. Посчитайте и выведите стоимость стоимость всех машин
        $priceCars = [];

        foreach ($cars as $value) {
            $priceCars[] = $value['price'];
        }

        $allCarsSum = array_sum($priceCars);
        var_dump($allCarsSum);

        //ИМПРОВИЗИРОВАННЫЙ ОТСТУП
        echo("
        ");


        /* 3. Для каждой машины заполните поле colors. В этом поле должны хранится все возможные варианты цветов для этой машины, при чем для каждого этого цвета, 
        есть своя надбавка к стоимости (разная для разных машин)
        Создайте массив colors с цветами доступными для каждой машины. И случайным образом выберите из этого массива по 3 цвета для каждой машины. 
        Эти цвета добавьте в массив $cars в поле colors. Для каждого цвета также укажите случайную надбавку к цене - случайное число от 0 до 100
        Выведите итоговый массив $cars c помощью функции var_dump и убедитесь в его правильности. */

        $colors = ['Белый', 'Черный', 'Синий', 'Зеленый', 'Желтый', 'Коричневый', 'Серый', 'Индиго', 'Кварц'];
        $countColors = count($colors);
        $maxIndexColors = $countColors - 1;
    
        foreach ($cars as &$value) {
            
            for ($i=0; $i<3; $i++) {

                $index = rand(0, $maxIndexColors);

                $value['colors'][] = [
                    'color' => $colors[$index],
                    'price' => rand(0, 100)  
                ];  

            }
            
        }
        
        var_dump($cars);




        // 4. Каталог автомобилей.
        // А теперь выведите весь каталог автомобилей в виде:
        // 'Купите автомобиль {} цвета {} всего за: {} руб'
        // вместо {} поставьте соответственно: название автомобиля, цвет, стоимость в этом цвете.

        foreach ($cars as &$value) {

            $nameCar = $value['name'];
            $priceCar = $value['price'];
            
            foreach ($value['colors'] as $val) {

                $colorCar = $val['color'];
                $priceColor = $val['price'];
                $fullPriceCar = $priceCar + $priceColor;

                var_dump('Купите автомобиль ' . $nameCar . ' цвета ' . $colorCar . ' всего за: ' . $fullPriceCar . ' руб');

            }
        }

    ?>
</pre>
