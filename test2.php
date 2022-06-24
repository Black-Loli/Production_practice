<!doctype html>
<?php
session_start();
include 'bd.php';
$questionQuery = $bdmr->query("SELECT * FROM Question WHERE `Group` = 2");
$questionQueryResult = $questionQuery->fetchAll(PDO::FETCH_ASSOC);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тест по модулю 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

<?php include 'menu.php'; ?>

<h1>Тест по модулю 2</h1>
<!--<form action="" method="post" id="TestForm">-->

    <?php
    foreach($questionQueryResult as $question){
        echo "<h1>Вопрос: {$question['Text_question']}</h1>";
        echo "\n\r";
    }
    ?>


    <!--    <div class="test">-->
    <!---->
    <!--        <div class="answers"></div>-->
    <!--    </div>-->
    <!---->
    <!--    <div class="test">-->
    <!--        <p><i><b> Задание  </b></i></p>-->
    <!---->
    <!--        <input type=”text” id=”task_six”>-->
    <!--    </div>-->
    <!---->

<!--</form>-->

<form action="" method="post" id="TestForm">
    <div class="test">
        <p><i><b> Задание 1 </b></i></p>
        <p> Параметр цикла For может получить значения… </p>

        <div class="answers">
            <div>
                <input type="radio" name="task_one" data-right>
                1,2,3,4,5
            </div>
            <div>
                <input type="radio" name="task_one">
                2,4,6,8,10
            </div>
            <div>
                <input type="radio" name="task_one">
                1,3,5,7,9
            </div>
        </div>
    </div>

    <div class="test">
        <p><i><b> Задание 6 </b></i></p>
        <p> Наберите следующую программу. Компьютер выведет на экран в столбик 15 случайных чисел от 8 до 39. </p>
        <div class="code">
            <p><b> var </b></p>
            <p class="indent"> c, s: <b>integer</b>;</p>
            <p class="indent_top"><b>begin</b></p>
            <p class="indent"> writeln('15 случайных чисел от 8 до 40');</p>
            <p class="indent_top indent"><b>for</b> c:= 1 <b>to</b> 15 <b>do</b></p>
            <p class="indent"><b>begin</b></p>
            <p class="indent_more">s:= random(32) + 8; <span class="color_text_gray">{Генерируется случайное число в диапазоне от 0 до 31, затем
                к нему прибавляется 8, получаем случайное число от 8 до 39}</span></p>
            <p class="indent_more">writeln (s);</p>
            <p class="indent"><b>end;</b></p>
            <p><b>end.</b></p>
        </div>
        <p> Самостоятельно измените программу так, чтобы на экране были напечатаны в строчку 8 случайных дробных чисел
            от 5 до 25. Ответ напишите ниже в поле. </p>

        <input type=”text” id=”task_six”>
    </div>


</form>

</body>
</html>