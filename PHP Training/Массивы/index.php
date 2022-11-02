<!DOCTYPE html>
<html>
<body>

<?php
//Ассоциативные массивы
// №1
$arr = ['a', 'b', 'c'];
echo var_dump($arr), "<br>";
// №2
$arr = ['a', 'b', 'c', 'd'];
echo $arr[0], " + ", $arr[1], ", ", $arr[2], " + ", $arr[3], "<br>";
// №3
$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
//Ассоциативные массивы
// №1
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$result = $arr['a'] + $arr['b'] + $arr['c'];
echo $result, "<br>";
// №2
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo $arr['Коля'], "<br>", $arr['Петя'], "<br>";
// №3
$week = [1=>'пн','вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
echo $week[5], "<br>";
//Многомерные массивы
// №1
$arr = [
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
   ];
echo $arr['cms'][0], "<br>", $arr['cms'][2], "<br>", $arr['colors']['green'], "<br>", $arr['colors']['red'], "<br>";
// №2
$arr = [
    'ru'=>['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en'=>['mn', 'th', 'wd', 'tu', 'fr', 'st', 'sn'],
   ]; 
   echo $arr['ru'][0], "<br>";
   echo $arr['en'][2], "<br>";
// №3
$arr = [
    'ru'=>['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en'=>['mn', 'th', 'wd', 'tu', 'fr', 'st', 'sn'],
   ]; 
$lang = $arr['ru'];
$day = $arr['ru'][2];
echo $arr['ru'][2], "<br>";
?>

</body>
</html>
