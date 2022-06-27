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
<form action="" method="post" id="TestFormTwo">
    <?php
    $number = 0;
    foreach ($questionQueryResult as $question) {
        $number++;
        echo "<div class='test'>";
        echo "<p><b><i>Задание {$number}</i></b></p>";
        echo $question['Text_question'];
        echo "<div class='answers'>";
        $questionQueryID = $question['ID'];
        $answerQuery = $bdmr->query("SELECT * FROM Answer_variant WHERE ID_Question = {$questionQueryID}");
        $answerQueryResult = $answerQuery->fetchAll(PDO::FETCH_ASSOC);
        if (count($answerQueryResult) == 0) {
            echo "<input class='text_response' type='text'>";
        } else {
            foreach ($answerQueryResult as $answer) {
                echo "<div>
                        <input type='radio' name='task' class='answer_variant'> <p>{$answer['Description']}</p>
                      </div>";
                echo "\n\r";
            }
        }
        echo "</div>";
        echo "</div>";
        echo "\n\r";
    }
    ?>
</form>

</body>
</html>