<?php
    if(isset($_POST["submit"]))
    {
        // print_r($_POST['name']);

        include_once("config.php");

        $name = $_POST["name"];

        $result = mysqli_query($connection, "INSERT INTO `confirmed_names`(`name`) VALUES ('$name')");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/confirmPage.css">
    <link rel="stylesheet" href="../styles/notify.css">
    <link rel="stylesheet" href="../styles/light.css">
    <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Confirm Presence</title>
</head>
<body id="body-theme" onload="checkTheme()">
    <h1 class="title">Confirm Presence</h1>

    <div class="notify-div">
        <i class='bx notify-icon'></i>
        <div class="notify-content">
            <h2 class="notify-title"></h2>
            <p class="notify-text"></p>  
        </div>
    </div>

    <main>
        <img src="../assets/casal.jpg" alt="Couple" class="image">
        <div class="informations">
            <h3 class="couple-name">John & Julia</h3>

            <form action="confirmPage.php" method="POST">
                <input type="text" name="name" id="name" class="confirm-input" required>
                <br>
                <input type="submit" name="submit" id="submit" class="confirm-page" value="Confirm Presence">
            </form>
        </div>
    </main>

    <a href="../index.html" class="back">&lt; Back</a>

    <button class="theme" onclick="changeTheme()"><i class='bx bxs-moon icon-theme'></i></button>

    <footer>
        <p class="author">Developed by João Pedro Moreno</p>
    </footer>

    <script src="../javascript/script.js"></script>
    <script src="../javascript/notify.js"></script>
    <script src="../javascript/theme.js"></script>
</body>
</html>