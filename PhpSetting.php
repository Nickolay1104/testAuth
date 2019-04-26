<?php

    $host = "localhost"; // адресс сервера
    $user = "root"; // имя пользователя
    $db = "nk"; // имя БД
    $password = ""; // пароль

    // подключение к СУБД
    $link = new mysqli ($host, $user, $password, $db);
    $link -> query("SET NAMES 'utf-8'");

     if ($link -> connect_errno) {
     echo 'Ошибка соединения: ' .$link->connect_error;
     } else {
     echo 'Успешно соединились';
     }
?>