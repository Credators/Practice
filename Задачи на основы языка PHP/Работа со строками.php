<?php

/*Создайте переменную $text и присвойте ей значение 'Привет, Мир!'.
Выведите значение этой переменной на экран.*/

echo $text = 'Hello World!' . "<br><br>";

/*Создайте переменные $text1='Привет, ' и $text2='Мир!'.
    С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.*/

$text1 = 'Hello';
$text2 = 'World!';

echo "$text $text2" . "<br><br>";


/*Создайте переменную $name и присвойте ей ваше имя.
Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.*/

$name = 'Artur';
echo "Hello $name" . "<br><br>";

/*Создайте переменную $age и присвойте ей ваш возраст. Выведите на экран 'Мне %Возраст% лет!'.*/

$age = 34;
echo "My age $age!" . "<br><br>";