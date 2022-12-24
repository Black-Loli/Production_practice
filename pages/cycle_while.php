<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Цикл While</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/style.css"/>
</head>
<body>

<?php include 'menu.php'; ?>

<h1>Цикл While</h1>

<div class="text">
    <p> Цикл <b>while</b> является циклом с предусловием. В заголовке цикла находится логическое выражение. Если оно
        возвращает
        <b>true</b>, то тело цикла выполняется, если <b>false</b> – то нет. </p>
    <p> Когда тело цикла было выполнено, то ход программы снова возвращается в заголовок цикла. Условие выполнения тела
        снова проверяется (находится значение логического выражения). Тело цикла выполнится столько раз, сколько раз
        логическое выражение вернет <b>true</b>. Поэтому очень важно в теле цикла предусмотреть изменение переменной,
        фигурирующей в заголовке цикла, таким образом, чтобы когда-нибудь обязательно наступала ситуация <b>false</b>.
        Иначе произойдет так называемое <b>зацикливание</b>, одна из самых неприятных ошибок в программировании. </p>

    <div class="code">
        <p><b> var </b></p>
        <p class="indent"> i, n: <b>integer</b>;</p>
        <p class="indent_top"><b>begin</b></p>
        <p class="indent"> write (<span class="color_text">'Количество знаков: '</span>);</p>
        <p class="indent">readln (n);</p>
        <p class="indent_top indent">i := 1;</p>
        <p class="indent"><b>while</b> i <= n <b>to begin</b></p>
        <p class="indent_more">write (<span class="color_text">'(*) '</span>);</p>
        <p class="indent_more">i := i + <span class="color_text">1</span>;</p>
        <p class="indent"><b>end;</b></p>
        <p class="indent_top">readln</p>
        <p><b>end.</b></p>
    </div>

</div>
</body>
</html>