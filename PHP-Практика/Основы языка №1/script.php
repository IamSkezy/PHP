<?php
//Работа с переменными
// №1
$a = 10;
$b = 2;
echo $a + $b, + "<br>";
// №2
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result, + "<br>";
//Работа со строками
// №1
$text1 = "Привет ";
$text2 = "Мир!";
echo $text1 . $text2, + "<br>";
// №2
$age = "19";
echo "Мне $age лет!", + "<br>";
//Обращение к символам строки
// №1
$text = "abcde";
echo $text[0], + "<br>";
echo $text[1], + "<br>";
echo $text[2], + "<br>";
echo $text[3], + "<br>";
echo $text[4], + "<br>";
// №2
$text = "text";
$text[0] = "!";
echo $text, + "<br>";
// №3
$num = "12345";
$first = (int)$num[0];
$second = (int)$num[1];
$third = (int)$num[2];
$four = (int)$num[3];
$five = (int)$num[4];
$result = $first + $second + $third + $four + $five;
echo $result, + "<br>";
//Практика
$hour = 60*60;
$day = 60*60*24;
$month = 60*60*24*30;
echo "Количество секунд в часе = $hour<br/>Количество секунд в сутках = $day<br/>Количество секунд в месяце = $month<br/>";
//Работа с присваиванием и декрементами
// №1
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var;
// №2
$text = 'Я';
$text .= 'хочу';
$text .= 'знать';
$text .= 'PHP!', + "<br>";
echo $text;
// №3
$var = 10;
$var++;
$var++;
$var--;
echo $var;
// №4
$var = 10;
$var += 7;
$var += 1;
$var -= 1;
$var += 12;
$var *= 7;
$var -= 15;
echo $var;
?>
