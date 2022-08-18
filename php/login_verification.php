<?php

    session_start();

    if (!$_SESSION['password']) {
        header("Location: loginPage.php");
        exit();
    }

?>