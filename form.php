<?php

require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';

if (!empty($_POST))
{
    debug($_POST);
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
            <form method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" placeholder="email@welcome.com" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" placeholder="Введите пароль" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label for="password_check" class="form-label">Повторите пароль</label>
                    <input type="password" placeholder="Введите пароль ещё раз" class="form-control"
                           id="password_check">
                </div>
                <div class="mb-3">
                    <label>Форма собственности:</label>
                    <select>
                        <option>Собственник</option>
                        <option>Не собственник</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="organisation" class="form-label">Название организации</label>
                    <input type="text" placeholder="Название организации" class="form-control" id="organisation">
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Контактное лицо</label>
                    <input type="text" placeholder="Контактное лицо" class="form-control" id="contact">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Адрес</label>
                    <input type="field" placeholder="Адрес" class="form-control" id="address">
                </div>
                <div class="mb-3">
                    <label>Откуда узнали о нас:</label>
                    <select>
                        <option>Птички напели</option>
                        <option>Ветром занесло</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</div>

</body>
</html><?php
