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
            margin-bottom: 40px;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: white;
            border-radius: 10px;
        }

        .main {
            display: flex;
            justify-content: space-around;
            margin: 200px auto;
            max-width: 500px;
        }

        .no-main {
            display: flex;
            flex-direction: column;
            margin: 200px auto;
            max-width: 200px;
            text-align: center;
        }

        .line {
            border-bottom: 2px solid black;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .links {
            margin: 0 auto;
        }
    </style>
</head>
<body>
<?php if (isset($_SESSION['login'])) : ?>
    <div class="no-main">
        <div>Вы авторизованы</div>
        <div class="line"></div>
        <div class="links">
            <a href="logout.php" class="link">Exit</a>
            <a href="home.php" class="link">Home</a>
        </div>
    </div>
<?php else: ?>
    <div class="main">
        <a href="login.php" class="link">Sign In</a>
        <a href="reg.php" class="link">Register</a>
    </div>
<?php endif; ?>
</body>
</html>