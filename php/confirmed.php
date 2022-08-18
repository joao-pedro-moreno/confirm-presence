<?php

    include("login_verification.php");
    include("config.php");

    $result = mysqli_query($connection, "SELECT `name` FROM `confirmed_names`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/confirmed.css">
    <link rel="stylesheet" href="../styles/light.css">
    <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Confirm Presence</title>
</head>
<body id="body-theme" onload="checkTheme()">
    <h1 class="title">Confirm Presence</h1>

    <a href="../index.html" class="back">&lt; Back</a>
    <a href="loginPage.php" class="logout">&lt; Logout</a>

    <div class="confirmedList">
        <?php

            while ($data = $result->fetch_array()) {
                echo '<p class="confirmed-name">' . $data['name'] . '</p>';
            }

        ?>
    </div>

    <button class="theme" onclick="changeTheme()"><i class='bx bxs-moon icon-theme'></i></button>

    <script src="../javascript/script.js"></script>
    <script src="../javascript/theme.js"></script>
</body>
</html>