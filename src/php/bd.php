<?php
$bdName = 'programingalphabet';
$bdUser = 'dana';
$bdPass = 'oA7hX0yX7g';
$bdHost = '185.9.147.1';
$bdmr = null;
try {
    //подключаемся к базе
    $bdmr = new PDO('mysql:host=' . $bdHost . ';dbname=' . $bdName, $bdUser, $bdPass);
    $bdmr->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdmr->exec('SET CHARACTER SET utf8');
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

