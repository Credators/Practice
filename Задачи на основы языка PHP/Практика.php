<?php

/*Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.*/

echo "Итого количество секунд в часе = " . 60*60 . "сек. <br><br>";

/*Создайте три переменные - час, минута, секунда.
С их помощью выведите текущее время в формате 'час:минута:секунда'.*/

$hour = '12';
$minute = '00';
$second = '00';

echo "$hour : $minute : $second <br><br>";

/*Создайте переменную, присвойте ей число. Возведите это число в квадрат
(это значит нужно умножить его само на себя). Выведите его на экран.*/

$i = 6;
echo $i*$i . "<br><br>";

/*Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=.
Количество строк кода при этом не должно измениться.

$var = 47;
$var = $var + 7;
$var = $var - 18;
$var = $var * 10;
$var = $var / 20;
echo $var;*/

$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo "$var <br><br>";

/*Переделайте этот код так, чтобы в нем использовалась операция .=.
Количество строк кода при этом не должно измениться.

$text = 'Я';
$text = $text.' хочу';
$text = $text.' знать';
$text = $text.' PHP!';
echo $text;*/

$text = 'Я';
$text .= ' хочу';
$text .= ' знать';
$text .= ' PHP!';
echo $text . "<br><br>";


/*Переделайте этот код так, чтобы в нем использовались операции ++ и --.
Количество строк кода при этом не должно измениться.

$var = 10;
$var = $var + 1;
$var = $var + 1;
$var = $var - 1;
echo $var;*/

$var = 10;
$var =+ 1;
$var ++ ;
$var --;
echo $var . "<br><br>";

/*Переделайте этот код так, чтобы в нем использовались операции ++, -- , +=, -=, *=, /=.
Количество строк кода при этом не должно измениться.

$var = 10;
$var = $var + 7;
$var = $var + 1;
$var = $var - 1;
$var = $var + 12;
$var = $var * 7;
$var = $var - 15;
echo $var;*/

$var = 10;
$var += 7;
$var ++;
$var --;
$var += 12;
$var *= 7;
$var -= 15;
echo $var;