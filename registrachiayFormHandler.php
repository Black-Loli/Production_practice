<?php
session_start();
include 'bd.php';
echo json_encode($_POST, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

try {
    $bdmr->prepare("INSERT INTO Users (Name, Surname, Patronymic, Type, Login, Password) VALUES (?,?,?,?,?,?)")
        ->execute([$_POST['name'], $_POST['surname'], $_POST['patronymic'], $_POST['type'], $_POST['login'], $_POST['password']]);
    header("Location: personal_account_student.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}