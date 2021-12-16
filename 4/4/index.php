<?php
$result2 = [
    'authors' => [
        [
            'nameAuthor' => 'Иванов Иван Иванович', 
            'email' => 'author1@ya.ru'
        ],
        [
            'nameAuthor' => 'Петров Петр Петрович', 
            'email' => 'author2@ya.ru'
        ]
    ],
    'books' => [
        [
            'titleBook' => 'Первая', 
            'emailAuthor' => 'author@ya.ru'
        ],
        [
            'titleBook' => 'Вторая', 
            'emailAuthor' => 'author@ya.ru'
        ]
    ]
];

$nameAuthorBook1 = $result2['books'][0]['titleBook'];
$nameAuthorBook2 = $result2['books'][1]['titleBook'];
$nameAuthorAutor1 = $result2['authors'][0]['nameAuthor'];
$emailAutor1 = $result2['authors'][0]['email'];
$nameAuthorAutor2 = $result2['authors'][0]['nameAuthor'];
$emailAutor2 = $result2['authors'][1]['email'];

var_dump('В нашей библиотеке точно есть две книги, которые вы ищете: ' . '"' . $nameAuthorBook1. '"' . ' и ' . '"' . $nameAuthorBook2 . '"');
var_dump('Пожалуйста, перестаньте писать гневные письма на адрес нашего любимого автора ' . $result2['authors'][0]['nameAuthor'] . ' (' . $emailAutor1 . '). Пишите их лучше другому нашему автору — ' . $nameAuthorAutor2 . ' (' . $emailAutor2 . ').');

