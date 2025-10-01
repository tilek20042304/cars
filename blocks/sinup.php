<?php

require_once __DIR__ . '/header.php';

$login = $_POST['login'];
$password = $_POST['password'];

$connect = getDB();

$sql = "INSERT INTO `Users`(login,password) VALUES ('$login' , '$password')";
if ($connect->query($sql) === TRUE) {
    echo 'Регистрация прошло успесно';
} else {
    echo 'Такой пользовател есть уже ';
}

