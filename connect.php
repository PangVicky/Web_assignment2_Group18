<?php

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "assignment2";
   
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (mysqli_connect_errno()) {
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }
    echo "Connected Successfully";

?>
