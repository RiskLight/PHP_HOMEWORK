<?php
if (isset($_COOKIE['filtername'])) {
    $var = json_decode($_COOKIE['filtername']);
    foreach ($var as $value) {
        echo "<a href='allnews.php?id=$value->id'>".$value->name."</a>" , "<br>";
        echo "<p>". $value->author . "</p>";
        echo "<p>". $value->date . "</p>";
        echo "<p>". $value->short . "</p>";
//        echo $value->name;
    }
//    echo "<pre>";
//        var_dump($var);
//        echo "</pre>";
}




//$path = __DIR__ . '/data/';
////$arr = file($path.'data.txt');
//$arr = file_get_contents($path.'data.txt');
//
////$arr = explode(PHP_EOL.PHP_EOL, $arr);
////var_dump($arr);
////for($i = 0; $i < count($arr); $i++)
////{
////    $arr[$i] = explode(PHP_EOL, $arr[$i]);
////}
//$b = array_map(static fn($line) => explode('|', $line), explode("\n", $arr));
//
//echo '<pre>';
//print_r($b);
//echo '</pre>';
//
//foreach ($b as $key => $value) {
//    echo $value[0] . "<br>";
//    $new = explode(':', $value[0]);
////    var_dump($new);
//    foreach ($new as $val) {
//        echo $val."<br>";
//    }
//}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
<!--    <a href="allnews.php">--><?php //echo $_COOKIE['name'];?><!--</a>-->
<!--    <p>--><?php //echo $_COOKIE['author'];?><!--</p>-->
<!--    <p>--><?php //echo $_COOKIE['date'];?><!--</p>-->
<!--    <p>--><?php //echo $_COOKIE['short'];?><!--</p>-->
</div>
</body>
</html>
