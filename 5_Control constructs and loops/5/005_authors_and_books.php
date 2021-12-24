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
        //Добавьте каждому автору новое поле — «Год рождения».

        foreach ($library['authors'] as $key => $val) {
            $newKey = $val['email'];
            $library['authors'][$newKey] = $val;
            $library['authors'][$newKey] += ['year of birth'=> rand(1970, 1990)];
            
            unset($library['authors'][$key]);
        }


        //Добавьте каждой книге новое поле — «Дата публикации».
        foreach ($library['books'] as $key => $val) {
            $timestamp = rand( strtotime("Jan 01 2000"), strtotime("Dec 31 2020") );
            $random_Date = date("d.m.Y", $timestamp );
            $library['books'][$key] += ['publication date' => $random_Date];
        }

        
        //Добавьте ещё одного автора в массив авторов и ещё одну книгу, которую написал этот автор, в массив книг.
        
        $library['authors'] += [
            'piter_parkerk@example.com' => [
                'name' => 'Питер Паркер',
                'email' => 'piter_parkerk@example.com',
                'year of birth'=> rand(1970, 1990)  
            ]
        ];

        $library['books'][] = [
            'title' => 'Человек паук',
            'author' => 'piter_parkerk@example.com',
            'publication date' => '$random_Date'
        ];
        
        
        //Выведите информацию по всем книгам в формате: Книга <Название книги>, её написал <ФИО автора> <Год рождения автора> (<email автора>).

        foreach ($library['books'] as $key => $val) {

            $titleBook = $val['title'];

            $nameAutor = $library['authors'][$val['author']]['name'];

            $yearOfBirthAutor  = $library['authors'][$val['author']]['year of birth'];

            $emailAitors = $val['author'];

            var_dump('Книга ' . $titleBook . ', её написал ' . $nameAutor . ' ' . $yearOfBirthAutor . ' (' . $emailAitors . ') ');
            
        }

        print_r($library);

    ?>
</pre>