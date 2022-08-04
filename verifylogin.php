<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Group18_Section303_Assignment2">
    <title>Login</title>
    <link href="assignment2.css" rel="stylesheet" type="text/css">
    <script src="script.js" defer></script>
</head>
<body id="loginbody">
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
    $chkLogin = "SELECT LOGIN FROM USERS WHERE LOGIN = '$login'";
    $chkPass = "SELECT PASSWORD FROM USERS WHERE LOGIN = $login";
    $result = mysqli_query($conn, $chkLogin);
    $resultP = mysqli_query($conn, $chkPass);
    $resultLogin = mysqli_fetch_assoc($result);
    $resultPass = mysqli_fetch_assoc($resultP);

    if ($login == $resultLogin['LOGIN'] && $password == $resultPass['PASSWORD']) {
        session_start();
        if ( !isset($_SESSION["login"])) {
            $_SESSION["login"] = $login;
        }
        echo "Login Successful.";
        
    }
    else {
        echo "Login or password invalid.";
    }

    if(isset($conn)) {
        mysqli_close($conn);
    }
?>
<?php include 'footer.php' ?>