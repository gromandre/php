<?php
    $number1 = rand(0, 10);
    $number2 = rand(0, 10);

    $sum = $number1 + $number2;
    $difference = $number1 - $number2;
    $productOfNumbers = $number1 * $number2;
    $quotient = $number1 / $number2;

    var_dump($sum);
    var_dump($difference);
    var_dump($productOfNumbers);
    var_dump($quotient);