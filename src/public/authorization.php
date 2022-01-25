<?php
use auth\ValidationForAuthorization;
require ('app/AuthInterface.php');

$errors = [];

if (isset($_POST['doLogin'])) {
    $validation = new ValidationForAuthorization($_POST);
    $errors = $validation->validateForm();
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
        .error {
            color: red;
            margin-bottom: 15px;
            margin-top: -10px;
        }

        .login {
            max-width: 300px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="login">
        <label for="login"><strong>Введите логин:</strong></label>
        <p><input type="text" name="login" id="login"></p>
        <div class="error">
            <?php echo $errors['login'] ?? '' ?>
        </div>
        <label for="password"><strong>Введите пароль:</strong></label>
        <p><input type="password" name="password" id="password"></p>
        <div class="error">
            <?php echo $errors['password'] ?? '' ?>
        </div>
        <label for="remember">Запомнить меня</label>
        <p><input type="checkbox" name="shit" id="remember"></p>
        <div class="error">
            <?php echo $errors['shit'] ?? '' ?>
        </div>
        <p>
            <button type="submit" name="doLogin">Авторизоваться</button>
        </p>
    </form>
</div>
</body>
</html>