## Тесты для сдачи экзамена ПДД (только для Эстонии)

** конечно , можно использовать и для вашего региона - но имейте ввиду есть подводные камни - например : ограничение скоростного режима на территории Эстонии - 50 км/ч в населенном пункте **

Здесь проект - созданный на фреймворке - Laravel 5.* 

### Как это работает ?

! Рекомендую прежде всего решать тесты в книжке - которую получили в автошколе 

Вопросы на которые вы решили не верно можно ввести в базу - и тренироваться уже  на данном списке 

#### Как ввести свой вопрос в базу данных ?

Если вводить много вопросов / ответов - то можно через seederы

/database/seeds/QuestionTableSeeder.php

      Question::create(array(
            'question'  => 'Что является дорогой ?',
            'ans1' => 'Улица',
            'ans2' => 'Придорожная территория',
            'ans3' => 'Мост',
            'ans4' => '',
        ));



/database/seeds/AnswerTableSeeder.php

```

Answer::create(array(
            'questions_id'  => '1',
            'ans_1' => '1',
            'ans_2' => '0',
            'ans_3' => '1',
            'ans_4' => '0',
        ));


```


Чуть позже будет функционал - позволяющий редактировать вопросы/ответы прямо на сайте 


