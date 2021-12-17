<?php
$daysBeforeExam = rand(0, 9);
$daysToPrepareForExam = rand(0, 9);

$phrase1 = $daysToPrepareForExam  > $daysBeforeExam ? 'Мне крышка' : 'Главное — не расслабляться';
$phrase2 = $daysToPrepareForExam  < $daysBeforeExam ? 'Ууу, ещё успею в дотку поиграть' : 'Успею или не успею';
$phrase3 = $daysToPrepareForExam === $daysBeforeExam ? 'Впритирочку' : 'Либо все плохо, либо очень плохо';

var_dump($daysBeforeExam);
var_dump($daysToPrepareForExam);

var_dump($phrase1);
var_dump($phrase2);
var_dump($phrase3);
