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
echo "<p style='font-weight: bold'> Задаие 1: выведите  10 раз фразу You are welcome!</p>";

$j = 1;
while ($j <= 10) {
    echo "You are welcome! <br/>";
    $j++;
}

echo "<p style='font-weight: bold'> Задание 2: найти сумму  1+4+7+10+...+112. Ответ: 2147</p>";


$sum = 0;
for($i=1;$i<=112;$i+=3){
    $sum = $sum + $i;
    echo "Сумма = $sum, <br/>";
}

echo "<p style='font-weight: bold'> Задане 3: вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 и которые не делятся на 5.<br>
                                    Тут должно быть десять тысяч, но пиздец это много текста, поэтому меняю на 100</p>";

//Тут должно быть десять тысяч, но пиздец это много текста, поэтому меняю на 100
for($i = 0;$i < 100; $i++) {
    if (str_contains($i, 3) && $i % 5 !== 0) {
        echo "$i, <br/>";
    }
}


echo "<p style='font-weight: bold'> Задание 4: вывести 3 случайных числа от 0 до 100 без повторений.</p>";


$randArray = [];

while (true) {
    $rand = rand(1, 100);
    if (!in_array($rand, $randArray)) {
        $randArray[] = $rand;
        if (sizeof($randArray) === 3) {
            break;
        }
    }

}


foreach ($randArray as $row) {
    echo $row . " ";
}


echo "<p style='font-weight: bold'> Задание 5: вывести на экран все шестизначные счастливые билеты.<br> 
                                    Билет называется счастливым, если сумма первых трех цифр в номере билета равна<br>
                                    сумме последних трех цифр. Найдите количество счастливых билетов и  процент от общего числа билетов.<br>
                                    Для удобности отображения уменьшу количество выводимых билетов в теории их от 111111 до 999999, а это немножко дохуя</p>";

$min = 111111;
$max = 112111;
$count = 0; //Количество выиграшных билетов
for ($i = $min; $i <= $max; $i++){
    $s = (string)$i;
    $s1 = $s[0] + $s[1] + $s[2];
    $s2 = $s[3] + $s[4] + $s[5];
    if ($s1 === $s2) {
        echo "$i <br/>"; //Вывод выиграшных билетов
        $count++;
    }
}

echo "Количество выиграшных билетов $count <br/>", "Процент выиграшных билетов " . $count / ($max - $min) * 100 . "%";


echo "<p style='font-weight: bold'> Задание 6: Определите, есть ли в массиве повторяющиеся элементы.</p>";

$array = ['1', '1', '1', '2', '2', '3', '4', '5', '6'];

print_r(array_count_values($array));


echo "<p style='font-weight: bold'> Задание 7: Поменять местами наибольший и наименьший элементы массива.</p>";

//$arrayTwo = [-11,12,3,4,5,27,7,-8,99,4];
//$min_i = $max_i = 0; // индексы максимального и минимального элемента
//foreach($arrayTwo as $key=>$value) {
//    $min_i =  $value < $arrayTwo[$min_i] ? $key : $min_i;
//    $max_i =  $value > $arrayTwo[$max_i] ? $key : $max_i;
//}
//list($arrayTwo[$min_i], $arrayTwo[$max_i]) = [$arrayTwo[$max_i],$arrayTwo[$min_i]]; // меняем местами элементы
//
//print_r($arrayTwo);

$arrayThree = [-11,12,3,4,5,27,7,-8,99,4];

foreach ($arrayThree as $row) {
    echo $row . " ";
}

echo "<br/>";

$max_val = max($arrayThree);
$min_val = min($arrayThree);
$max_key = array_search($max_val, $arrayThree);
$min_key = array_search($min_val, $arrayThree);
list($arrayThree[$min_key], $arrayThree[$max_key]) = [$arrayThree[$max_key],$arrayThree[$min_key]];
//print_r($arrayThree);
foreach ($arrayThree as $row) {
    echo $row . " ";
}
echo "<br/>";


echo "<p style='font-weight: bold'> Задание 8: удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом будет 1 2 4 5</p>";


$arrayFour = [1, 2, 4, 4, 2, 5,];

print_r(array_unique($arrayFour));


echo "<p style='font-weight: bold'> Задание 9: Даны два упорядоченных по возрастанию массива. Образовать из этих двух массивов единый упорядоченный по возрастанию массив</p>";


$arrForMergeOne = [1, 5];
$arrForMergeTwo = [3, 2, 4];

$resultArray = array_merge($arrForMergeOne, $arrForMergeTwo);
asort($resultArray);

foreach ($resultArray as $row) {
    echo $row . " ";
}

echo "<p style='font-weight: bold'> Задание 10: Создайте двухмерный массив. Первые два ключа - это 'ru' и 'en'. <br> 
                                    Пусть первый ключ содержит элемент, являющийся массивом названий дней недели по-русски, а второй - по-английски. <br>
                                    Выведите с помощью этого массива понедельник по-русски и среду по английски (пусть понедельник - это первый день).</p>";


$arrRuEn = [
    'ru'=>[ 1 => 'Понедельник',
            2 => 'Вторник',
            3 => 'Среда',
            4 => 'Четверг',
            5 => 'Пятница',
            6 => 'Суббота',
            7 => 'Воскресенье'],

    'en'=>[ 1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Wednesday',
            4 => 'Thursday',
            5 => 'Friday',
            6 => 'Saturday',
            7 => 'Sunday'],
];

echo $arrRuEn['ru']['1'], "<br/>";
echo $arrRuEn['en']['3'], "<br/>";


echo "<p style='font-weight: bold'> Задание 11: Пусть теперь в переменной &#36;lang хранится язык (она принимает одно из значений или 'ru', или 'en' - либо то, либо то), <br> 
                                    а в переменной day - номер дня. Выведите словом день недели, соответствующий переменным &#36;lang и &#36;day. То есть: если, <br> 
                                    к примеру, &#36;lang = 'ru' и &#36;day = 3 - то выведем 'среда'.</p>";

$lang = 'ru';
$day = 3;

echo $arrRuEn[$lang][$day], "<br/>";


echo "<p style='font-weight: bold'> Задание 12: Дан массив с числами от 1 до 9, с помощью цикла выведите на экран элементы массива в таком виде
                                                <pre style='font-weight: bold'>
                                                     1, 2, 3
                                                     4, 5, 6
                                                     7, 8, 9.
                                                     </pre></p>";

//Дан массив с числами от 1 до 9, с помощью цикла выведите на экран элементы массива в таком виде
//1, 2, 3
//4, 5, 6
//7, 8, 9

$arrayNeo = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$i=0;

foreach($arrayNeo as $elem )
{
    if($elem % 3 == 0)
    {
        $i = $elem . "<br/>";
    }
    else
    {
        $i = $elem . ', ';
    }

    echo $i;
}

echo "<p style = 'font-weight: bold'>Задание 13: cоздать массив из 10 чисел и создать переменную с номером элемента;<br/>
                                     сделать алгоритм, который меняет нулевой и заданный в переменной элемент массива, например:<br/>
                                     &#36;arr = [4,7,1]; <br/>
                                     &#36;index = 2; <br/>
                                     результат выполнения функции: [1,7,4];<br/>
                                     добавить проверки на наличие заданного индекса в  массиве <br/></p>";

$arrayTen = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$indexShown = 2;

foreach ($arrayTen as $row) {
    echo $row . " ";
}

echo "<br/>";

if (array_key_exists($indexShown, $arrayTen)) {
    list($arrayTen[0], $arrayTen[$indexShown]) = [$arrayTen[$indexShown], $arrayTen[0]];
    foreach ($arrayTen as $row) {
        echo $row . " ";
    }
} else {
    echo "Херня какая-то, массив останется прежним, да, останется прежним, ослепительно снежным, и сомнительно нежным...<br/>";
}
?>
</body>

</html>
