<?php

    session_start();
    unset($_SESSION['password']);
    // session_destroy();
    header('Location: loginPage.php')
    exit();
    
?>