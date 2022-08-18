<?php

    session_start();
    include("config.php");

    $result = mysqli_query($connection, "SELECT `password-id`, `password` FROM `connection_password` WHERE `password-id` = 2")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/notify.css">
    <link rel="stylesheet" href="../styles/light.css">
    <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Confirm Presence</title>
</head>
<body id="body-theme" onload="checkTheme()">
    <h1 class="title">Confirm Presence</h1>

    <?php
    if(isset($_SESSION['no_authentication'])):
    ?>
    <div class="notify-div notify-error">
        <i class='bx bxs-x-circle notify-icon'></i>
        <div class="notify-content">
            <h2 class="notify-title">Error</h2>
            <p class="notify-text">Wrong password try again</p>  
        </div>
    </div>
    <?php
    endif;
    unset($_SESSION['no_authentication']);
    ?>
    <div class="section">
        <form action="login.php" method="POST">
            <input type="password" name="password" id="password-input" placeholder="Password">
            <br>
            <button type="submit" class="login">Login</button>
        </form>
    </div>

    <a href="../index.html" class="back">&lt; Back</a>

    <button class="theme" onclick="changeTheme()"><i class='bx bxs-moon icon-theme'></i></button>

    <footer>
        <p class="author">Developed by João Pedro Moreno</p>
    </footer>

    
    <!-- <script src="../javascript/login.js"></script> -->
    <script src="../javascript/notify.js"></script>
    <script src="../javascript/theme.js"></script>
</body>
</html>