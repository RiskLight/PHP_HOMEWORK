<?php

if (isset($_POST['send'])) {
    $current_path = $_FILES['text']['tmp_name'];

    $filename = $_FILES['text']['name'];
    $fileExt = getExt($filename);
    $new_path = __DIR__ . '/uploads/' . $filename;
    $fileExtPost = 'txt';


    if (isset($_FILES['text'])) {
        $file = $_FILES['text'];
        if ($fileExt === $fileExtPost) {
            move_uploaded_file($current_path, $new_path);
            echo "<div class='success'>" . 'Файл успешно загружен' . "</div>";
        } else {
            echo 'Файл должен иметь расширение txt';
        }
    }
}

function getExt($filename): bool|string
{
    $temp = explode('.', $filename);
    return end($temp);

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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main-two">
    <form method="POST" enctype="multipart/form-data" class="upload">
        <input type="file" name="text">
        <input type="submit" name="send" value="Отправить">
    </form>
</div>
<div class="echo">
    <?php
    if (isset($_FILES['text']) && $fileExt === $fileExtPost) {
        $final = file_get_contents('uploads/' . $filename);
        echo $final;
    }
    ?>
</div>
</body>
</html>