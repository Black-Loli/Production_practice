<!doctype html>
<?php
session_start();
include 'bd.php';
$questionQuery = $bdmr->prepare("SELECT * FROM Question WHERE `Group` = 2");
$questionQueryResult = $questionQuery->fetchAll(PDO::FETCH_OBJ);
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
<form action="" method="post" id="TestForm">

    <?php
    //    echo "$questionQueryResult->Text_question";
    //    try {
    //
    //        while ($question = $questionQueryResult->fetchAll(PDO::FETCH_OBJ)) {
    //            echo "<div class='test'>{$question->Text_question}
    //                        <div class='answers'> ... </div>
    //                   </div>";
    //        }
    //    } catch (PDOExeption $y) {
    //        echo $y->getMessage();
    //    }
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

</form>
</body>
</html>