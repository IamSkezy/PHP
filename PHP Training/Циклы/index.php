<!DOCTYPE html>
<html>
<body>

<?php
// #1
$arr = [2, 5, 9, 15, 0, 4];
foreach($arr as $el) {
	if ($el > 3 and $el < 10) {
    	echo $el, "<br>";
    }
}
// #2
$arr = [];
for ($i = 0; $i < 10; $i++) {
	$arr[$i] = rand(-50, 50);
}
foreach ($arr as $el) {
	if($el > 0) {
    	echo $el, "<br>";
    }
}
// #3
$arr = [1, 2, 5, 9, 4, 13, 4, 10];
foreach ($arr as $el) {
	if($el == 4) {
    	echo "Есть!<br>";
        break;
    }
}
// #4
$arr = ['10', '20', '30', '50', '235', '3000'];
foreach ($arr as $el) {
	if ($el[0] == 1 or $el[0] == 2 or $el[0] == 5) {
    	echo $el, "<br>";
    }
}
// #5
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $el) {
	echo "-", $el;
}
echo "-<br>";
?>

</body>
</html>