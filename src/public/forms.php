<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .form {
            display: flex;
            flex-direction: column;
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
        }

        .form input {
            margin-bottom: 20px;
        }

        .form label {
            margin-bottom: 5px;
        }

        .checkbox{
            position:relative;
            height:auto;
            width:200px;
            display:inline-block;
        }
        .checkbox img{
            height:200px;
            width:200px;
            display:block;
        }
        .checkbox span{
            margin:5px;
            display:block;
        }
        .checkbox label{
            display:block;
            cursor:pointer;
            position:relative;
        }
        .checkbox label:before{
            content:"";
            display:block;
            width:50px;
            height:50px;
            margin:auto;
            position:absolute;
            left:0;
            right:0;
            top:75px;
            background-color:transparent;
            border-radius:50px;
        }
        .checkbox label:after{
            content:"";
            display:block;
            width:26px;
            height:12px;
            margin:auto;
            position:absolute;
            left:0;
            right:0;
            top:88px;
            border-left:5px solid transparent;
            border-bottom:5px solid transparent;
            transform:rotate(-45deg);
        }
        .checkbox input[type=radio]{
            display:none;
        }
        .checkbox input[type=radio]:checked + label:before{
            background-color:#8dc3ff;
        }
        .checkbox input[type=radio]:checked + label:after{
            border-color:#fff;
        }

        .task-four {
            max-width: 650px;
            margin: 0 auto 50px;
        }


    </style>
</head>
<body>
<div class="form">
    <p>Задание 1. Спросите город пользователя с помощью формы. Выведите на экран фразу 'Ваш город: "Город"</p>
    <form action="index.php" method="GET">
        <label>Введи город сцуко <input type="text" name="city"></label>
        <input type="submit">
    </form>
</div>



<div class="task-four">
    <p>Задание 2. Спросите у пользователя его возраст с помощью нескольких radio-кнопок.
        Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.</p>
    <form action="age.php" method="POST">
        <span>Какой у Вас возраст?</span>
        <input type="radio" id="age-one" name="age" value="1">
        <label for="age-one">Менее 20 лет</label>
        <input type="radio" id="age-two" name="age" value="2">
        <label for="age-two">От 20 до 25 лет</label>
        <input type="radio" id="age-three" name="age" value="3">
        <label for="age-three">От 26 до 30 лет</label>
        <input type="radio" id="age-four" name="age" value="4">
        <label for="age-four">Более 30 лет</label><br>
        <input type="submit" style="margin-top: 10px">
    </form>
</div>
<div class="task-four">
    <p>Задание 3. Создайте форму создания товара(Ввести его наименование,производитель,краткая характеристика,фотография)</p>
    <form method="post" action="goods.php" enctype="multipart/form-data" class="form">
        <label for="name-good">Название товара</label>
        <input type="text" id="name-good" name="name-good">
        <label for="prod-good">Производитель</label>
        <input type="text" id="prod-good" name="prod-good">
        <label for="seo-good">Краткое описание</label>
        <input type="text" id="seo-good" name="seo-good">
        <label for="photo-good">Фото товара</label>
        <input type="file" id="photo-good" name="photo-good">
        <input type="submit" value="Создать товар">
    </form>
<div class="task-four">
    <p>Задание 4. Создайте страницу теста.В тесте должны быть разные типы ответов(Текстовый,Один из нескольких вариантов,
        Несколько правильных ответов,вопрос с картинками).По отправке формы отобразить ответы пользователя,
        правильные ответы и подсчитать количество баллов</p>
    <form method="post" action="test.php" class="form-four">
        <div>
            <p>Столица Украины?</p>
            <label><input type="radio" name="capital" value="Санкт-Петербург">Москва</label>
            <label><input type="radio" name="capital" value="Париж">Париж</label>
            <label><input type="radio" name="capital" value="Москва">Киев</label>
            <label><input type="radio" name="capital" value="Дыра">Дыра</label>
        </div>
        <div>
            <p>Сколько будет (5 + 5 + 5) - (5 + 5) * 0</p>
            <label><input type="text" name="math" placeholder="Введите сюда ответ"/></label>
        </div>
        <div>
            <p><strong>Вопрос №3:</strong> Выберите мужские имена</p>
            <label><input type="checkbox" name="genderOne" value="Михаил">Михаил</label>
            <label><input type="checkbox" name="genderTwo" value="Анастасия">Анастасия</label>
            <label><input type="checkbox" name="genderThree" value="Стёпа">Стёпа</label>
            <label><input type="checkbox" name="genderFour" value="Светлана">Светлана</label>
        </div>
        <div>
            <p><strong>Вопрос №4:</strong> Выберите радугу</p>
            <label>
                    <span class="checkbox">
                        <input id="checkbox" type="radio" name="checkbox" value="checkbox">
                        <label for="checkbox">
                            <img src="img/3.jpg" alt="хуй">
                        </label>
                    </span>
                    <span class="checkbox">
                        <input id="checkbox2" type="radio" name="checkbox" value="checkbox2">
                        <label for="checkbox2">
                            <img src="img/2.jpg" alt="хуй">
                        </label>
                    </span>
                    <span class="checkbox">
                        <input id="checkbox3" type="radio" name="checkbox" value="checkbox3">
                        <label for="checkbox3">
                            <img src="img/1.jpg" alt="хуй">
                        </label>
                    </span>
            </label>
        <div class="element">
            <p><input type="submit" value="Отправить ответы"/></p>
        </div>
</div>
</body>
</html>
<?php
