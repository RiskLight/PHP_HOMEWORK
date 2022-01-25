<?php
use registration\UserValidator;

require ('app/UserValidator.php');

$errors = [];

if (isset($_POST['submit'])) {
    $validation = new UserValidator($_POST);
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
        .new-user {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        h1 {
            text-align: center;
        }

        label {
            margin-bottom: 10px;
        }

        input {
            margin-bottom: 20px;
        }

        .error {
            color: red;
            margin-top: -15px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div>
    <h1>Create a new user</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="new-user" enctype="multipart/form-data">

        <label for="username">Username: </label>
        <input type="text" name="username" id="username">
        <div class="error">
            <?php echo $errors['username'] ?? '' ?>
        </div>
        <label for="email">Email: </label>
        <input type="text" name="email" id="email">
        <div class="error">
            <?php echo $errors['email'] ?? '' ?>
        </div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <div class="error">
            <?php echo $errors['password'] ?? '' ?>
        </div>
        <label for="passwordTwo">Repeat password</label>
        <input type="password" name="passwordTwo" id="passwordTwo">
        <div class="error">
            <?php echo $errors['passwordTwo'] ?? '' ?>
        </div>
        <label for="image">Add image</label>
        <input type="file" name="image" id="image">
        <div class="error">
            <?php echo $errors['image'] ?? '' ?>
        </div>
        <input type="submit" value="submit" name="submit">

    </form>
</div>

</body>
</html>
