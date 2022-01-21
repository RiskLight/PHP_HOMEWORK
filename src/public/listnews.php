<?php


//echo $_COOKIE['title'];
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
    <a href="allnews.php"><?php echo $_COOKIE['name'];?></a>
    <p><?php echo $_COOKIE['author'];?></p>
    <p><?php echo $_COOKIE['date'];?></p>
    <p><?php echo $_COOKIE['short'];?></p>
</div>
</body>
</html>
