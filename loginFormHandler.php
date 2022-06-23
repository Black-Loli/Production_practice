<?php
session_start();
include 'bd.php';
echo json_encode($_POST, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

try {
    $userQuery = $bdmr->prepare("SELECT * FROM Users WHERE Login=? AND Password=?");
    $userQuery->execute([$_POST['login'], $_POST['password']]);
    $users = $userQuery->fetchAll(PDO::FETCH_OBJ);
    var_dump($users);
    if (count($users) == 0) {
        $_SESSION['MESSAGE'] = "Логин или пароль неверен";
        header("Location: entrance.php");
    } else {
        $_SESSION['MESSAGE'] = "";
        $_SESSION['user_name'] = $users[0]->name;
        $_SESSION['user_id'] = $users[0]->ID;
        $_SESSION['user_type'] = $users[0]->Type;

        if ($_SESSION['user_type'] == 1) {
            header("Location: personal_account_student.php");
        } else if ($_SESSION['user_type'] == 2){
            header("Location: personal_account_teacher.php");
        } else {
            header("Location: personal_account_admin.php");
        }

    }
} catch (PDOException $e) {
    echo $e->getMessage();
}