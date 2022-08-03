<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Group18_Section303_Assignment2">
    <title>Login</title>
    <link href="assignment2.css" rel="stylesheet" type="text/css">
    <script src="script.js" defer></script>
</head>

<?php include 'header.php' ?>

<?php

    $servername = "localhost:3307";
    $dbuser = "root";
    $dbpwd = "";
    $dbname = "assignment2";
   
    $conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
    if (mysqli_connect_errno()) {
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }

    $login = $_REQUEST['login'];
    $password = $_REQUEST['pass'];
    $email = $_REQUEST['email'];
    $chkLogin = "SELECT LOGIN FROM USERS";
    $result = mysqli_query($conn, $chkLogin);
    $resultLogin = mysqli_fetch_assoc($result);

    if ($login == $resultLogin['LOGIN'] ) {
        echo "Username already taken. Please enter a different username.";
        if(isset($conn)) {
            mysqli_close($conn);
        }
    }
    else {
        $sql = "INSERT INTO USERS (LOGIN, PASSWORD, EMAIL) VALUES ('$login', '$password', '$email')";
        if (mysqli_query($conn, $sql)) {
            echo "<p id=signup>Thanks for signing up!</p>";
        }
        else {
            echo "error" . mysqli_error($conn);
        }
    
        if(isset($conn)) {
            mysqli_close($conn);
        }
    }



?>
    <?php include 'footer.php' ?>