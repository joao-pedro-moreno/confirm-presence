<?php

    session_start();
    include("config.php");

    if(empty($_POST['password'])) {
        header('Location: loginPage.php');
        exit();
    }

    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "SELECT `password` FROM `connection_password` WHERE `password` = md5('{$password}')";

    $result = mysqli_query($connection, $query);

    $row = mysqli_num_rows($result);

    if ($row == 1) {
        $_SESSION['password'] = $password;
        header('Location: confirmed.php');
        exit();
    } else {
        $_SESSION['no_authentication'] = true;
        header('Location: loginPage.php');
        exit();
    }
?>