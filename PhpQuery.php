<?php
// Включение и выполнение указанного файла
include "setting.php";

if ($_SESSION['auth'] !== true) {

    // Проверка на пустые поля
    if(!empty($_REQUEST['login']) && !empty($_REQUEST['password']))
    {
        $login = $_REQUEST['login'];
        $Password = $_REQUEST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $query = mysqli_query($link, "SELECT * FROM users WHERE login = '".$login."' AND password = '".$hash."' ");
        // $result = $link -> query($query);
        $user = $query -> fetch_assoc();
        print_r($user);
        die();
        if(!empty($user)) {
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['login'];
            echo "Добро пожаловать, ".$_SESSION['login'];
        } else {
            echo 'Такой логин с паролем не найдены в базе данных.';
        }
    }
} else {
    echo "Получилось!";
}
?>