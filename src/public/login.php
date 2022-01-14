<?php
session_start();

$data = $_POST;

if (isset($data['do_login'])) {
    $errors = [];

    if (isset($_SESSION['password'])) {
        if ($_SESSION['password'] === md5($data['password'])) {
            header('Location: home.php');
        } else {
            $errors[] = 'Данные введены неверно!';
        }
    }
    if (check($data['login']) === '') {
        $errors[] = 'Введите логин!';
    }

    if (check($data['password']) === '') {
        $errors[] = 'Введите пароль!';
    }

    if (!empty($errors)) {
         huy($errors);
    }
}

function huy($arr)
{
    foreach ($arr as $value) {
        echo "<div class='errors'>". $value, "</div>";
    }
}

function check($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return htmlspecialchars($data);
}

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
        .main {
            max-width: 500px;
            margin: 0 auto;
            background: coral;
            color: white;
            border-radius: 50px;
        }
        .form {
            max-width: 400px;
            margin: 30px auto;
            display: flex;
            flex-direction: column;
            padding-top: 30px;
        }

        input {
            margin-bottom: 10px;
            border: 2px solid;
            border-radius: 5px;
            height: 20px;
        }

        label {
            margin-bottom: 10px;
        }

        button {
            margin-bottom: 30px;
            margin-top: 10px;
            height: 30px;
            border: 2px solid;
            border-radius: 10px;
            cursor: pointer;
        }

        .errors {
            color: red;
            text-align: center;
            max-width: 150px;
            margin: 0 auto;
            background: aquamarine;
        }
    </style>
</head>
<body>
<form action="" method="post" class="main">
    <div class="form">
        <label for="login">Логин</label>
        <input type="text" name="login" id="login">
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password">
        <button type="submit" name="do_login">Войти</button>
    </div>
</form>
</body>
</html>
