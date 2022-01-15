<?php
$createFile = fopen('fruits.txt', 'wb+');
$text = ['Рука Будды', 'Кивано', 'Дуриан', 'Панданус', 'Рамбутан', 'Атемойя', 'Питанга', 'Маракуйя', 'Питайя', 'Карамбола'];
$text = implode(PHP_EOL, $text);
fwrite($createFile, $text);
$arr = file_get_contents('fruits.txt');
$arr = explode( PHP_EOL, $arr);
sort($arr);
$arr = implode(PHP_EOL, $arr);
file_put_contents('fruits.txt', $arr);
fclose($createFile);
$final = fopen('fruits.txt', 'rb');
echo fread($final, filesize('fruits.txt'));
fclose($final);
