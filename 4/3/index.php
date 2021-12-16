<?php
$result1 = [
    "author" => [
        "nameAuthor" => "Иванов Иван Иванович", 
        "email" => "author@ya.ru"
    ],
    "book" => [
        "titleBook" => 'Первая', 
        "emailAuthor" => "author@ya.ru"
    ],
];

var_dump($result1["author"]["nameAuthor"] . " написал книгу, которая называется " . $result1["book"]["titleBook"]);
var_dump("Автор  " . $result1["author"]["nameAuthor"] . " ждёт ваших отзывов, напишите ему на электронную почту " . $result1["book"]["emailAuthor"]);

