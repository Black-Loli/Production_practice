<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css"/>
    <title>Личный кабинет</title>
</head>
<body>
<div class="pass">
    <form action="loginFormHandler.php" class="pass1" method="post" id="loginForm">
        <h2 class="z"> Aзбука<br>Программирования </h2>


        <input type="text" name="name" placeholder="Введите имя" required="" minlength="2" maxlength="30"/>
        <input type="text" name="surname" placeholder="Введите фамилию" required="" minlength="2" maxlength="30"/>
        <input type="text" name="patronymic" placeholder="Введите отчество" minlength="2" maxlength="30"/>
        <select name="type" class="dol" required="">
            <option class="op" selected>Выберите должность</option>

            <?php
            include 'bd.php';
            try {
                $userw = $bdmr->query('SELECT * FROM Types ');
                while ($us = $userw->fetch(PDO::FETCH_OBJ)) {
                    echo "<option value='{$us->ID}' class='option'>{$us->Description}</option>";
                }
            } catch (PDOExeption $y) {
                echo $y->getMessage();
            }
            ?>

        </select>
        <input type="email" name="login" placeholder="Введите почту" required=""/>
        <input onkeyup="vvpass(this)" name="password" class="password_field" id="pass1" type="password"
               placeholder="Придумайте пароль"
               required="" minlength="6" maxlength="12"/>
        <input onkeyup="vvpass(this)" name="password_confirmation" class="password_field" id="pass2" type="password"
               placeholder="Подтвердите пароль"
               required="" minlength="6" maxlength="12"/>
        <label for="pass2" id="password_check_label" class="d-none text-danger">Пароли не совподуют</label>
        <button onclick="entrance()" type="submit" class="btn btn-outline-light bt"> Зарегистрироваться</button>
    </form>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function passwordEqualityCheck() {
        var passw = $("#pass1")
        var passwo = $("#pass2")
        if (passw.val() === passwo.val()) {
            $('.password_field').removeClass("error")
            $('#password_check_label').addClass('d-none');
        } else {
            $('.password_field').addClass("error")
            $('#password_check_label').removeClass('d-none');
        }
        return passw.val() === passwo.val()
    }

    function vvpass(element) {
        passwordEqualityCheck()
    }

    $('#loginForm').on('submit', function () {
        if (!passwordEqualityCheck()) {
            return false;
        }
    })
</script>
</html>
