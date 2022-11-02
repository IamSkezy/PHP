<!DOCTYPE html>
<html>
<body>

<?php
// #1
$arr1 = [1, 2, 3, 4];
$arr2 = [5, 6, 7, 8];
function getSumSqure($arr) {
	foreach($arr as $el) {
    	echo Sqrt($el), "<br>";
    }
}
getSumSqure($arr1);
getSumSqure($arr2);
// #2
$num = rand(1,7);
function getDayOfWeek($num) {
	$arr_week = [1 => "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];
	return $arr_week[$num];
}
echo getDayOfWeek($num), "<br>";
// #3
$result = getDivisors(10);
var_dump($result);
 
function getDivisors($num) {
    $result = [];
    for ($i = 1; $i < $num; $i++)
        if ($num % $i == 0) 
            array_push($result, $i); 
    return $result;
}
?>

</body>
</html>