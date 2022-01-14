<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .link {
            display: flex;
            background: gray;
            height: 50px;
            width: 150px;
            margin: 20px auto 40px;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: white;
            border-radius: 10px;
        }

        .main {
            max-width: 250px;
            margin: 50px auto;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="main">
    <?php
    echo 'Здравствуйте, ' . $_SESSION['name'];
    ?>
    <a href='logout.php' class='link'>Exit</a>
</div>
</body>
</html>


