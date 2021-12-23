<pre>
    <?php

    $library = [
        'authors' => [
            [
                'name' => 'Джон Маккормик',
                'email' => 'john_makkormik@example.com',
            ],
            [
                'name' => 'Мартин Роберт',
                'email' => 'martin_robert@example.com',
            ],
        ],
        'books' => [
            [
                'title' => 'Чистый код: создание, анализ и рефакторинг',
                'author' => 'martin_robert@example.com',
            ],
            [
                'title' => 'Девять алгоритмов, которые изменили будущее',
                'author' => 'john_makkormik@example.com',
            ],
            [
                'title' => 'Идеальный программист',
                'author' => 'martin_robert@example.com',
            ],
        ],
    ];

    /* Сейчас ключами к каждому автору в этом массиве являются числовые индексы. 
    Давайте заменим их, сделав ключом для каждого из авторов его email. 
    Теперь, зная email автора, мы сможем без перебора массива с авторами получить нужного автора книги, последовательно указав несколько индексов */

    

    foreach($library['authors'] as $key => $val){
        $key = $val['email'];
    };

    var_dump( $library);

    
    ?>
</pre>