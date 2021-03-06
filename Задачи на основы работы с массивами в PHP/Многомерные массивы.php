<?php

/*создайте многомерный массив $arr. С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный'.*/

$arr = [
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];

echo "Word = {$arr['cms'][0]} , {$arr['cms'][2]} , {$arr['colors']['red']}, {$arr['colors']['blue']} <br><br>";

/*Создайте двухмерный массив. Первые два ключа - это 'ru' и 'en'.
Пусть первый ключ содержит элемент, являющийся массивом названий дней недели по-русски, а второй - по-английски.
Выведите с помощью этого массива понедельник по-русски и среду по английски (пусть понедельник - это первый день).*/

$arr = [
    'ru'=>[1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс' ],
    'en'=>[1=>'mo', 'tu', 'we', 'th', 'fr', 'sa', 'su' ]
];

echo "По русски - {$arr['ru'][1]} , english - {$arr['en'][3]} <br><br>";

/*Пусть теперь в переменной $lang хранится язык (она принимает одно из значений или 'ru', или 'en' - либо то, либо то),
а в переменной $day - номер дня. Выведите словом день недели, соответствующий переменным $lang и $day.
То есть: если, к примеру, $lang = 'ru' и $day = 3 - то выведем 'среда'.*/

$lang = $arr['ru'];
$day = $lang['3'];

echo $day;

