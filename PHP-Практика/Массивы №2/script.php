<?php
//Ассоциативные массивы
// №1
$arr = ['a', 'b', 'c'];
var_dump($arr);
// №2
$arr = ['a', 'b', 'c', 'd'];
echo $arr[0], " + ", $arr[1], ", ", $arr[2], " + ", $arr[3];
// №3
$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
//Ассоциативные массивы
// №1
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$result = $arr['a'] + $arr['b'] + $arr['c'];
// №2
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo $arr['Коля'], $arr['Петя'];
// №3
$week = [1=>'пн','вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
echo $week[5];
//Многомерные массивы
// №1
$arr = [
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
   ];
echo $arr['cms'][0], $arr['cms'][2], $arr['colors']['green'], $arr['colors']['red'];
// №2
$arr = [
    'ru'=>['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en'=>['mn', 'th', 'wd', 'tu', 'fr', 'st', 'sn'],
   ]; 
   echo $arr['ru'][0];
   echo $arr['en'][2];
// №3
$arr = [
    'ru'=>['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en'=>['mn', 'th', 'wd', 'tu', 'fr', 'st', 'sn'],
   ]; 
$lang = $arr['ru'];
$day = $arr['ru'][2];
echo $arr['ru'][2];
?>
