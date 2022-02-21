<?php

require 'data.php';
require 'functions.php';

if (!empty($_POST))
{
    //debug($_POST); //вывод key - value

    $fields = load($fields); //почему не инициализирована???
    //debug($fields); //вывод $fields с данными

    if ($errors = validate($fields))
    {
        debug($errors);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма 6 лаба</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="post" action="welcome.php">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" placeholder="email@welcome.com" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" placeholder="Введите пароль" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label for="password_check" class="form-label">Повторите пароль</label>
                    <input type="password" placeholder="Введите пароль ещё раз" class="form-control"
                           name="password_check">
                </div>
                <div class="mb-3">
                    <label>Форма собственности:</label>
                    <select name='own'>
                        <option value="1">Собственник</option>
                        <option value="0">Не собственник</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="organisation" class="form-label">Название организации</label>
                    <input type="text" placeholder="Название организации" class="form-control" name="organisation">
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Контактное лицо</label>
                    <input type="text" placeholder="Контактное лицо" class="form-control" name="contact">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Адрес</label>
                    <input type="field" placeholder="Адрес" class="form-control" name="address">
                </div>
                <div class="mb-3">
                    <label>Откуда узнали о нас:</label>
                    <select name="from_question">
                        <option value="1">Птички напели</option>
                        <option value="2">Ветром занесло</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="Зарегистрироваться"/>
            </form>
        </div>
    </div>
</div>

</body>
</html>
