<?php

// 1. Создайте переменную $errorCode, положите в нее случайное значение от 1 до 3
// для каждого отдельного кода ошибки выведите сообщение:
// 1 - 'Что-то пошло не так'
// 2 - 'Все прошло так как надо, но мы этого совсем не ждали'
// 3 - 'Я в домике'
// $errorCode = ...;

$errorCode = rand(1, 3);

switch($errorCode){
    case 1:
        var_dump('Что-то пошло не так');
        break;

    case 2:
        var_dump('Все прошло так как надо, но мы этого совсем не ждали');
        break;

    case 3:
        var_dump('Я в домике');
}


// 2. Четный не с нами. Создайте переменную $myNumber - в которую поместите случайное значение от 0 до 10
// Если это число четное (2, 4, 6, 8, 10) - то выведите сообщение: 'Четный. Ты не с нами!', если это нечетное или 0 - то выведите 'var_dump('Четный. Ты не с нами!');'
// Для решения задачи применяйте switch, даже если очень хочется решить с if
// $myNumber = ...;

$myNumber = rand(0, 10);
var_dump($myNumber);

switch($myNumber){
    case $myNumber%2 == 0:
        var_dump('Четный. Ты с нами!');
        break;
        
    case $myNumber != 0:
        var_dump('Четный. Ты не с нами!');
}



/* 3. Создайте массив $foods с продуктами питания: Яблоко, Клубника, Апельсин, Кабачок, Патиссон, Банан, Арбуз, Картошка, Лягушачие лапки
Создайте переменную $foodItem - случайное число от 0 до 8 (количество продуктов - 1)
Определите к какому виду относится продукт из массива $foods под индексов $foodItem: 'Ягода', 'Фрукт', 'Овощ', 'Что-то не вегетарианское'
Выведите сообщение: 'Выбранный продукт {} - это {}', вместо {} подставьте соответственно название продукта и его вид
# Создайте дополнительную переменную для вида продукта, а вывод сделайте в конце скрипта. Кстати, если вы слышите это название первый раз, 
то патиссоны на вкус как кабачки, и с вампирами ничего общего не имеют)
$foodItem = ...; */

$foods = ['Яблоко', 'Клубника', 'Апельсин', 'Кабачок', 'Патиссон', 'Банан', 'Арбуз', 'Картошка', 'Лягушачие лапки'];

$foodItem = rand(0, 8);

$product = $foods[$foodItem];

$type = ['Ягода', 'Фрукт', 'Овощ', 'Что-то не вегетарианское'];

switch($product)
{
    case 'Клубника':
    case 'Арбуз':
        var_dump('Выбранный продукт ' . $product . ' - это ' . $type[0]);
        break;
    case 'Яблоко':
    case 'Апельсин':
    case 'Банан':
        var_dump('Выбранный продукт ' . $product . ' - это ' . $type[1]);
        break;
    case 'Кабачок':
    case 'Патиссон':
    case 'Картошка':
        var_dump('Выбранный продукт ' . $product . ' - это ' . $type[2]);
        break;
    case 'Лягушачие лапки':
    var_dump('Выбранный продукт ' . $product . ' - это ' . $type[3]);
}

