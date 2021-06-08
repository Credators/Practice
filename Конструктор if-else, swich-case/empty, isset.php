<?php


//Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'.

//$a = '';
//$a = 1;
//$a = 3;
//$a = -3;
//$a = 0;
$a = null;
//$a = true;
//$a = '0';

var_dump($a);

echo "<br>";

if(empty($a)){
    echo 'its Correct';
}else {
    echo 'its no Correct';
}

//Если переменная $a НЕ пустая, то выведите 'Верно', иначе выведите 'Неверно'.

echo "<br><br>";
var_dump($a);
echo "<br>";

if(!empty($a)){
    echo 'its Correct';
}else {
    echo 'its no Correct';
}

//Если переменная $a существует, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 3 и null.

echo "<br><br>";
var_dump($a);
echo "<br>";

if(isset($a)){
    echo 'its Correct';
}else {
    echo 'its no Correct';
}

//Если переменная $a НЕ существует, то выведите 'Верно', иначе выведите 'Неверно'.

echo "<br><br>";
var_dump($a);
echo "<br>";

if(!isset($a)){
    echo 'its Correct';
}else {
    echo 'its no Correct';
}