<!doctype html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/style2.css" />
    <title>Личный кабинет</title>
</head>
<body>
    <div class="pass">
        <form action="../src/php/loginFormHandler.php" method="post" class="pass1">
            <h2 class="z"> Aзбука<br>Программирования </h2>
            <input type="email" name="login" placeholder="Логин" required="" />
            <input type="password" name="password" placeholder="Пароль" required="" minlength="6" maxlength="12" />
            <h3>
                <?php
                echo $_SESSION['MESSAGE'] ?? "";
                ?>
            </h3>
            <button id="entrance" type="submit" class="btn btn-outline-light"> Войти </button>
            <a href="registrachiay.php" class="btn btn-outline-light reg"> Регистрация </a>
        </form>
    </div>
</body>

</html>
