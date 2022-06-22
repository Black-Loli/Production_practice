<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Цикл Repeat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

<?php include 'menu.php'; ?>

<h1>Цикл Repeat</h1>

<div class="text">
    <p> Цикл <b>while</b> может не выполниться ни разу, если логическое выражение в заголовке сразу вернуло <b>false</b>.
        Однако такая ситуация не всегда может быть приемлемой. Бывает, что тело цикла должно выполниться хотя бы один
        раз, не зависимо оттого, что вернет логическое выражение. В таком случае используется цикл repeat – цикл с
        постусловием. </p>
    <p> В цикле <b>repeat</b> логическое выражение стоит после тела цикла. Причем, в отличие от цикла <b>while</b>, здесь всё
        наоборот: в случае <b>true</b> происходит выход из цикла, в случае <b>false</b> – его повторение. </p>

    <div class="code">
        <p><b> var </b></p>
        <p class="indent"> i, n: <b>integer</b>;</p>
        <p class="indent_top"><b>begin</b></p>
        <p class="indent"> write (<span class="color_text">'Количество знаков: '</span>);</p>
        <p class="indent">readln (n);</p>
        <p class="indent_top indent">i := 1;</p>
        <p class="indent"><b>repeat</b></p>
        <p class="indent_more">write (<span class="color_text">'(*) '</span>);</p>
        <p class="indent_more">i := i + <span class="color_text">1</span>;</p>
        <p class="indent"><b>until</b> i > n;</p>
        <p class="indent_top">readln</p>
        <p><b>end.</b></p>
    </div>

    <p> В примере, даже если n будет равно 0, одна звездочка все равно будет напечатана. </p>

</div>
</body>
</html>