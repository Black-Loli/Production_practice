<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css" />
    <title>Личный кабинет</title>
</head>
<body>
<div class="pass">
    <form action="#" class="pass1">
        <h2 class="z"> Aзбука<br>Программирования </h2>
        <input type="text" placeholder="Введите имя" required="" minlength="2" maxlength="30"/>
        <input type="text" placeholder="Введите фамилию" required="" minlength="2" maxlength="30"/>
        <select class="dol" required="">
            <option  class="op" selected>Выберите должность</option>
            <option value="1" class="option">Учащийся</option>
            <option value="2" class="option">Учитель</option>
            <option value="3" class="option">Администратор</option>
        </select>
        <input type="email" placeholder="Введите почту" required="" />
        <input type="password" placeholder="Придумайте пароль" required="" minlength="6" maxlength="12" />
        <input type="password" placeholder="Подтвердите пароль" required="" minlength="6" maxlength="12" />
        <button type="submit" class="btn btn-outline-light bt"> Зарегистрироваться </button>
    </form>
</div>
</body>
</html>