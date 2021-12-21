<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Palmo Hellow world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>

<body style="margin: 50px; text-align: left">

<?php
//ЗАДАНИЕ 1
$name = 'Олег';
echo $name, "<br/>";


//ЗАДАНИЕ 2
$a = 8;
$b = 1;

echo $a + $b, "<br/>";
echo $a - $b, "<br/>";
echo $a / $b, "<br/>";
echo $a % $b, "<br/>";


//ЗАДАНИЕ 3
$number = 5;
$result = pow($number, 3);

echo $result, "<br/>";


//4. ЗАДАНИЕ 4
//5. ЗАДАНИЕ 5
$age = 27;

//if ($age >= 18 && $age <= 60) {
//    echo "Вам ещё работать и работать", "<br/>";
//} elseif ($age < 18) {
//    echo "Вам ещё рано работать", "<br/>";
//} else {
//    echo "Пора на отдых", "<br/>";
//}

echo($age >= 18 && $age <= 60 ? "Вам ещё работать и работать" : ($age < 18 ? "Вам ещё рано работать" : "Пора на отдых")), "<br/>";


//ЗАДАНИЕ 6
$dayNumber = 7;

//if ($dayNumber >= 1 && $dayNumber <= 5) {
//    echo "Это рабочий день", "<br/>";
//} elseif ($dayNumber == 6 || $dayNumber == 7) {
// echo "Это выходной", "<br/>";
//} else {
//    echo 'Ошибка', "<br/>";
//}

echo ($dayNumber >= 1 && $dayNumber <= 5) ? 'Это рабочий день' : (($dayNumber == 6 || $dayNumber == 7) ? 'Это выходной' : 'Ошибка'), "<br/>";


//ЗАДАНИЕ 7
//define('DAYS_COUNT', 7);
//define('MONTH_COUNT', 12);
const MONTH_COUNT = 12;
const DAYS_COUNT = 7;
echo DAYS_COUNT, "<br/>";
echo MONTH_COUNT, "<br/>";


//ЗАДАНИЕ 8
$one = 5;
$two = 5;

//if ($one == $two) {
//    echo "Сумма чисел равна ", $one + $two, "<br/>";
//} else {
//    echo "Разница чисел равна ", $one - $two, "<br/>";
//}

echo ($one == $two) ? "Сумма чисел равна " . $one + $two : "Разница чисел равна " . $one - $two, "<br/>";


//ЗАДАНИЕ 9
$randomNumber = rand(1, 100);

echo $randomNumber, "<br/>";

//if ($randomNumber % 2 == 0) {
//    echo "Число кратное", "<br/>";
//} else {
//    echo "Число не кратное", "<br/>";
//}

echo ($randomNumber % 2 == 0) ? "Число кратное" : "Число не кратное", "<br/>";

?>
</body>

</html>
