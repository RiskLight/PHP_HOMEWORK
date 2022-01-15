<?php
$pattern = "/^\+380\d{3}\d{2}\d{2}\d{2}$/";
$patternEmail = "/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i";

if (isset($_POST['do_signup'])) {
    $name = check($_POST['name']);
    $surname = check($_POST['surname']);
    $email = check($_POST['email']);
    $phone = check($_POST['phone']);

    setcookie('name', $name, time() + 3600);
    setcookie('surname', $surname, time() + 3600);
    setcookie('phone', $phone, time() + 3600);
    setcookie('email', $email, time() + 3600);

    $path = __DIR__ . '/data/';
    $file = fopen($path . 'data.txt', 'ab+');

    $errors = [];

    if ($name === '') {
        $errors[] = 'Введите имя';
    }

    if ($surname === '') {
        $errors[] = 'Введите фамилию';
    }

    if ($phone === '') {
        $errors[] = 'Введите телефон';
    }

    if (!preg_match($pattern, $phone)) {
        $errors[] = 'Телефон введен в неверном формате';
    }

    if ($email === '') {
        $errors[] = 'Введите email';
    }

    if (!preg_match($patternEmail, $email)) {
        $errors[] = 'Email введен в неверном формате';
    }

    if (empty($errors)) {
        echo "<div class='errors'>" . 'Вы успешно зарегистрировались' . "</div>";
        fwrite($file, 'Name: ' . ucfirst($name) . PHP_EOL);
        fwrite($file, 'Surname: ' . ucfirst($surname) . PHP_EOL);
        fwrite($file, 'Phone: ' . $phone . PHP_EOL);
        fwrite($file, 'Email: ' . $email . PHP_EOL . PHP_EOL);
    } else {
        huy($errors);
    }

    fclose($file);

}

function huy($arr)
{
    foreach ($arr as $value) {
        echo "<div class='errors'>" . $value, "</div>";
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
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="main">
    <form action="" method="post" class="form">
        <label for="name">Имя</label>
        <input type="text" id="name" name="name" placeholder="Введите имя" value="<?php echo $_COOKIE['name'] ?? '' ?>">
        <label for="surname"> Фамилия</label>
        <input type="text" id="surname" name="surname" placeholder="Введите фамилию" value="<?php echo $_COOKIE['surname'] ?? '' ?>">
        <label for="email"> Email</label>
        <input type="email" id="email" name="email" placeholder="Введите email" value="<?php echo $_COOKIE['email'] ?? '' ?>">
        <label for="phone"> Телефон</label>
        <input type="tel" id="phone" name="phone" placeholder="Введите телефон" value="<?php echo $_COOKIE['phone'] ?? '' ?>">
        <label for="password"> Пароль</label>
        <input type="password" id="password" name="password" placeholder="Введите пароль">
        <input type="submit" name="do_signup">
    </form>
</div>
</body>
</html>
