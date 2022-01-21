<?php
if (isset($_POST['send'])) {
    $current_path = $_FILES['text']['tmp_name'];
    $filename = $_FILES['text']['name'];
    $new_path = __DIR__ . '/uploads/' . $filename;


    $title = check($_POST['title']);
    $short = check($_POST['short']);
//    $chern = $_POST['chern'];
//    $public = $_POST['public'];
    $textNews = $_POST['textNews'];
    $author = $_POST['author'];
    $date = $_POST['date'];

//    move_uploaded_file($current_path, $new_path);

    $errors = [];

    if ($title === '') {
        $errors[] = 'Введите название новости';
    }

    if ($short === '') {
        $errors[] = 'Введите краткое описание новости';
    }

    if (strlen($short) < 20) {
        $errors[] = "Краткое описание должно быть не меньше 20 символов";
    }

    if ($textNews === '') {
        $errors[] = 'Введите новость';
    }

    if (strlen($textNews) < 100) {
        $errors[] = "Новость должна состоять минимум из 100 символов";
    }

    if ($author === '') {
        $errors[] = 'У новости должен быть автор';
    }

    if ($date === '') {
        $date = date('l jS \of F Y h:i:s A');
    }

    if (isset($_FILES['text']['name'])) {
        move_uploaded_file($current_path, $new_path);
    } else {
        $errors[] = 'Добавьте фото';
    }


    if (empty($errors)) {
        setcookie('name', $title, time() + 3600);
        setcookie('short', $short, time() + 3600);
        setcookie('textNews', $textNews, time() + 3600);
        setcookie('author', $author, time() + 3600);
        setcookie('date', $date, time() + 3600);
        setcookie('text', $filename, time() + 3600);

        echo 'Вы добавили новость';
    } else {
        pushErrors($errors);
    }

}

function pushErrors($arr)
{
    foreach ($arr as $value) {
        echo "<div>" . $value . "</div>";
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
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" style="max-width: 300px; margin: 0 auto">
    <input type="text" name="title" placeholder="Название новости">
    <input type="text" name="short" placeholder="Краткое описание">
    <input type="date" name="date"><br>
    <label for="chern">Опубликовать</label>
    <input type="radio" name="chern" id="chern" value="0">
    <label for="public">Черновик</label>
    <input type="radio" name="chern" id="public" value="1">
    <textarea name="textNews" placeholder="Описание новости"></textarea>
    <input type="text" name="author" placeholder="Автор">
    <input type="file" name="text">
    <input type="submit" name="send">
</form>
</body>
</html>
