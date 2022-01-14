<?php
session_start();
//session_destroy();
$pattern = "/^\+380\d{3}\d{2}\d{2}\d{2}$/";
if (isset($_POST['do_signup'])) {

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['password'] = md5($_POST['password']);
    $_SESSION['passwordTwo'] = $_POST['passwordTwo'];

    $name = $_SESSION['name'];
    $login = $_SESSION['login'];
    $phone = $_SESSION['phone'];
    setcookie('name', $name, time()+3600);
    setcookie('login', $login, time()+3600);
    setcookie('phone', $phone, time()+3600);

    $errors = [];

    if (check($_POST['name']) === '') {
        $errors[] = 'Введите имя!';
    }

    if (check($_POST['login']) === '') {
        $errors[] = 'Введите логин! ';
    }

    if (check($_POST['phone']) === '') {
        $errors[] = 'Введите номер телефона! ';
    }

    if(!preg_match($pattern, $_POST['phone'])) {
        $errors[] = "Телефон задан в неверном формате";
    }

    if (check($_POST['password']) === '') {
        $errors[] = 'Введите пароль! ';
    }

    if (check($_POST['passwordTwo']) !== $_POST['password']) {
        $errors[] = 'Повтор пароля не соотествует паролю';
    }

    if (empty($errors)) {
        header('Location: home.php');
    } else {
        huy($errors);
    }

}


function huy ($arr) {
    foreach ($arr as $value) {
        echo "<div class='errors'>". $value, "</div>";
    }
}

function check ($data): string {
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
            background: blueviolet;
            max-width: 550px;
            border-radius: 10px;
            margin: 0 auto;
        }

        .form {
            display: flex;
            flex-direction: column;
            max-width: 500px;
            margin: 30px auto;
            padding-top: 30px;
        }

        label {
            margin-bottom: 10px;
            color: aliceblue;
        }

        input {
            margin-bottom: 10px;
            border: 2px solid;
            border-radius: 5px;
            height: 20px;
        }

        button {
            margin-top: 10px;
            height: 30px;
            border: 2px solid;
            border-radius: 10px;
            margin-bottom: 30px;
            cursor: pointer;
        }

        .errors {
            color: red;
            text-align: center;
            max-width: 300px;
            margin: 0 auto;
            background: aquamarine;
        }
    </style>
</head>
<body>
<form action="" method="post" class="main">
    <div class="form">
        <label for="name">Введите имя</label>
        <input type="text" id="name" name="name" value="<?php echo $_COOKIE['name'] ?? '' ?>">
        <label for="login">Введите логин</label>
        <input type="text" id="login" name="login" value="<?php echo $_COOKIE['login'] ?? '' ?>">
        <label for="phone">Телефон</label>
        <input type="tel" id="phone" name="phone" value="<?php echo $_COOKIE['phone'] ?? '' ?>">
        <label for="password">Пароль</label>
        <input type="password" id="password" name="password">
        <label for="passwordTwo">Пароль повторно</label>
        <input type="password" id="passwordTwo" name="passwordTwo">
        <button type="submit" name="do_signup">Зарегистрироваться</button>
    </div>
</form>
</body>
</html>