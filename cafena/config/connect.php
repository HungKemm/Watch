<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "coffees";

    $kn = new mysqli($severname, $username, $password, $database);
    if (mysqli_connect_error()) {
        echo "loi ket noi" . mysqli_connect_error();
        exit();
    }
?>