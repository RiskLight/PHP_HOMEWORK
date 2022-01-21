<?php
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
<div style="max-width: 700px; margin: 0 auto;">
    <p style="font-weight: bold"><?php echo $_COOKIE['name'];?></p>
    <p><?php echo $_COOKIE['short']; ?></p>
    <div><?php echo $_COOKIE['textNews'];?></div>
    <p><?php echo $_COOKIE['date']; ?></p>
    <p><?php echo $_COOKIE['author']; ?></p>
    <img src="uploads/<?php echo $_COOKIE['text'] ?>" width="700px" height="500" alt="хуй">
</div>
</body>
</html>
