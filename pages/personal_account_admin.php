<!doctype html>
<?php
session_start();
include 'bd.php';
$userQuery = $bdmr->prepare("SELECT * FROM Users JOIN Types ON Users.Type = Types.ID WHERE Users.ID=?");
$userQuery->execute([$_SESSION['user_id']]);
$userQueryResult = $userQuery->fetch(PDO::FETCH_OBJ);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Личный кабинет </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/style.css"/>
</head>
<body>
<?php include 'menu.php'; ?>

<div class="menu_acc">
    <div class="menu">
        <div class="person">
            <img src="https://3.downloader.disk.yandex.ru/preview/fef01af9ac01de5e8b4a850679d8906ceb738fd086c0b035e765ada8c0a76028/inf/jA_kSFI5ol72RAKk83uu4kLC8ttpWQszL5u0tdolgdWI2PFmYyNPKz-mddwTLdfKEBC2vnsl9sfzhWkfHd3SHQ%3D%3D?uid=555148530&filename=head.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=555148530&tknv=v2&size=1838x937">
            <div>
                <?php
                echo "<h1>$userQueryResult->Surname $userQueryResult->Name</h1>
                        <h1>$userQueryResult->Patronymic</h1>
                        <h6>$userQueryResult->Description</h6>";
                ?>
            </div>
        </div>
        <ul>
            <li>Наполнение сайта</li>
            <li>Чаты с учениками и учителями</li>
            <li>Настройки аккаунта</li>
        </ul>
    </div>
</div>


</body>
</html>
