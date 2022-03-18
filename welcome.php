<?php
require 'data.php';
require 'functions.php';
?>

    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Результат регистрации</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<br>
<br>
<br>
<div style="text-align: center;">
    <?php if (!empty($_POST)) {
        echo "Письмо с подтверждением регистрации отправлено на " . $_POST['email'] . "<br>" . "<br>";
        if (($_POST['from_question']) == 1){
            echo "<h4>Вам о нас напели птички, исходя из анкеты</h4>";
        }
        else echo "<h4>Ваc занесло ветром, исходя из анкеты</h4>";

    } ?>
</div>
</body>
<?php
debug($_POST);
?>