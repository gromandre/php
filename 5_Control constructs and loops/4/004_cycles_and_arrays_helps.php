<?php

// Циклы для данных в массивах

// 1. Создайте массив скучных игрушек - $boringToys. Создайте в нем случайное количество элементов от 1 до 10, где каждый элемент этого массива это ассоциативный массив с двумя полями:
// - Название игрушки: в виде "Игрушка 1"
// - Цена игрушки: случайное число от 100 до 1000
// # Подойдет цикл for, но не используйте его счетчик, чтобы записывать поля в массив, т.к. вы можете сразу добавить в качестве элемента ассоциативный массив
$boringToys = [];


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
// # для итерации по массивам используйте foreach
$allCarsSum = 0;


// 3. Для каждой машины заполните поле colors. В этом поле должны хранится все возможные варианты цветов для этой машины, при чем для каждого этого цвета, есть своя надбавка к стоимости (разная для разных машин)
// Создайте массив colors с цветами доступными для каждой машины. И случайным образом выберите из этого массива по 3 цвета для каждой машины. Эти цвета добавьте в массив $cars в поле colors. Для каждого цвета также укажите случайную надбавку к цене - случайное число от 0 до 100
// Выведите итоговый массив $cars c помощью функции var_dump и убедитесь в его правильности.
// # используйте ассоциативный массив для каждого цвета с двумя полями: цвет и надбавка
// # в цикле foreach можно использовать итерацию вместе с ключом или использовать ссылку на элемент массива, при использовании ссылки, будьте осторожны, ведь переменная, со ссылкой на последний элемент существует и после цикла
$colors = [];


// 4. Каталог автомобилей.
// А теперь выведите весь каталог автомобилей в виде:
// "Купите автомобиль {} цвета {} всего за: {} руб"
// вместо {} поставьте соответственно: название автомобиля, цвет, стоимость в этом цвете.
// # Чтобы пройти по всем машинам нужен один foreach, а чтобы пройти по их цветам еще foreach один внутри.
