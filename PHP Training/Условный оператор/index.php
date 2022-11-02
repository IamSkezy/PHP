<!DOCTYPE html>
<html>
<body>

<?php
// #1
$day = rand(1,31);
echo "Число = $day", "<br>";
if($day <= 10) {
	echo "Первая декада", "<br>";
}
elseif($day > 10 and $day <=20) {
	echo "Вторая декада", "<br>";
}
else {
	echo "Третья декада", "<br>";
}
// #2
$month = rand(1,12);
echo "Месяц = $month", "<br>";
if ($month >=1 and $month <=2 or $month == 12) {
	echo "Зима!", "<br>";
}
elseif ($month >= 3 and $month <= 5) {
	echo "Весна!", "<br>";
}
elseif ($month >=6 and $month <=8) {
	echo "Лето!", "<br>";
}
elseif ($month >= 9 and $month <=11) {
	echo "Осень!", "<br>";
}
// #3
$year = rand(1,2022);
echo "Год = $year", "<br>";
if( $year % 4 == 0 and $year % 100 != 0 or $year % 100 == 0) {
	echo "Високосный!", "<br>";
}
else {
	echo "Обычный!", "<br>";
}
// #4
$str_1 = "abcde";
$str_2 = "edcba";
if ($str_1[0] == "a") {
	echo "Да!", "<br>";
}
else {
	echo "Нет!", "<br>";
}
// #5
$str = "237";
$str_sum = $str[0] + $str[1] + $str[2];
echo $str_sum, "<br>"
?>

</body>
</html>
