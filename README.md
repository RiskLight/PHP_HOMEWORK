1.1 Создать файл index.php в котором две кнопки для регистрации и авторизации на сайте
1.2 Если пользователь уже авторизирован, то вместо кнопок регистрации и авторизации добавить ссылку для 
перехода на страницу Home

2.1 Создать страницу для регистрации пользователя на сайте, состоящую из имени пользователя, логина, пароля и его подтверждения
2.2 Добавить валидацию полей на пустоту, номер телефона должен быть из 10 цифр. Если валидация не прошла то выводить 
в форму список ошибок
2.3 Так же необходимо сохранять поля формы в куки (кроме пароля) что бы не вводить их повторно
2.4 При прохождении валидации сохранять данные с формы регистрации в сессию и перенаправлять на страницу Home, 
где вывести текст: Здравствуйте, "Имя пользователя"!

3.1 Немного доработать форму авторизации, добавив валидацию (авторизация пользователя по логину и паролю)
3.2 При успешной авторизации так же перенаправлять на страницу Home

4.1 На странице Home, помимо приветственного текста, необходимо сделать кнопку с выходом из учетной записи (завершение сессии)