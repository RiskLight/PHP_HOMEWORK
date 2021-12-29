<?php
//Задание 3
function check ($data): string {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return htmlspecialchars($data);
}

$nameGood = $prodGood = $seoGood = "";


if (isset($_POST)) {
    $nameGood = check($_POST['name-good']);
    $prodGood = check($_POST['prod-good']);
    $seoGood = check($_POST['seo-good']);
}


$current_path = $_FILES['photo-good']['tmp_name'];

$filename = $_FILES['photo-good']['name'];
$new_path = __DIR__ . '/uploads/' . $filename;

move_uploaded_file($current_path, $new_path);

if (isset($_FILES['photo-good'])) {
    $file = $_FILES['photo-good'];
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
<div style="margin: 50px">
    <div>Названние введенной херни: <?php echo $nameGood ? ucfirst($nameGood) : 'Некорректное значение' ?></div>
    <div>Прозвоитель введеной херни: <?php echo $prodGood ? ucfirst($prodGood) :'Некорректное значение' ?></div>
    <div>Опимание введеной херни: <?php echo $seoGood ? ucfirst($seoGood) : 'Некорректное значение' ?></div>
    <div>
        <img src="uploads/<?php echo $filename?>" width="100px" height="150px" alt="хуй">
    </div>
</div>

</body>
</html>
