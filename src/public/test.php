<?php
//Задание 4
function check ($data): string {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return htmlspecialchars($data);
}

if (isset($_POST)) {
    $capital = $_POST['capital'] ?? '';
    $math = check($_POST['math'] ?? '');
    $happy = $_POST['checkbox'] ?? '';

    $genderOne = $_POST['genderOne'] ?? '';
    $genderTwo = $_POST['genderTwo'] ?? '';
    $genderThree = $_POST['genderThree'] ?? '';
    $genderFour = $_POST['genderFour'] ?? '';


    $result = 0;

    if ($capital === "Дыра") {
        ++$result;
    }

    if ($math === '15') {
        ++$result;
    }



    $subResult = 0;


    if ($genderOne !== '') {
        ++$subResult;
    }
    if ($genderThree !== '') {
        ++$subResult;
    }

    if ($genderTwo !== '') {
        --$subResult;
    }
    if ($genderFour !== '') {
        --$subResult;
    }

    if ($subResult === 2) {
        $result += 2;
    } elseif ($subResult === 1) {
        ++$result;
    }

    if ($happy === "checkbox3") {
        ++$result;
    }

    if ($result === 5) {
        echo "Вы дали $result правильных ответов, молодец";
    } elseif ($result === 4) {
        echo "Вы дали $result правильных ответов, неплохо";
    } elseif ($result === 3) {
        echo "Вы дали $result правильных ответов, ну такое себе";
    } elseif ($result === 2) {
        echo "Вы дали $result правильных ответов, туповат";
    } elseif ($result === 1) {
        echo "Вы дали $result правильных ответов, у меня плохие новости от твоем интелекте";
    } elseif ($result === 0) {
        echo "Вы дали $result правильных ответов, просто денегерат";
    }
}