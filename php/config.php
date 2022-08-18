<?php

    $dbHost = "Localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "confirmed";

    $connection = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($connection->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>