<?php

    $library = [
        'authors' => [
            'john_makkormik@example.com' => [
                'name' => 'Джон Маккормик',
                'email' => 'john_makkormik@example.com',
                'birthYear' => 1972,
            ],
            'martin_robert@example.com' => [
                'name' => 'Мартин Роберт',
                'email' => 'martin_robert@example.com',
                'birthYear' => 1952,
            ],
            'martin_fauler@example.com' => [
                'name' => 'Мартин Фаулер',
                'email' => 'martin_fauler@example.com',
                'birthYear' => 1963,
            ],
        ],
        'books' => [
            [
                'title' => 'Чистый код: создание, анализ и рефакторинг',
                'author' => 'martin_robert@example.com',
                'year' => 2013,
            ],
            [
                'title' => 'Девять алгоритмов, которые изменили будущее',
                'author' => 'john_makkormik@example.com',
                'year' => 2011,
            ],
            [
                'title' => 'Идеальный программист',
                'author' => 'martin_robert@example.com',
                'year' => 2011,
            ],
            [
                'title' => 'Шаблоны корпоративных приложений',
                'author' => 'martin_fauler@example.com',
                'year' => 2002,
            ],
        ],
    ];

    $title = 'Библиотека программиста';

    //Реализуйте условие: если переменная $red истинна, необходимо к заголовку H1 добавить атрибут class="red", чтобы он выводился красным цветом.
    $red = (bool) rand(0, 1);

    /* if ($red == true) {

    } */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo($title) ?></title>
    <style type="text/css">.red {color: red;}</style>
</head>
<body>
    <h1><?php echo($title) ?></h1>
    <div>Авторов на портале <Укажите количество авторов></div>
    <!-- Выведите все книги -->
    <?php 
        foreach ($library['books'] as $key => $val) {

            $titleBook = $val['title'];
        
            $yearOfBirthAutor  = $library['authors'][$val['author']]['birthYear'];
        
            $nameAutor = $library['authors'][$val['author']]['name'];
        
            $emailAutors = $val['author'];
        
            echo "<p>Книга $titleBook, её написал \"" . $nameAutor . ' ' . $yearOfBirthAutor . ' (' . $emailAutors . ') ' . "\"</p>";
        }
    ?>
</body>
</html>
