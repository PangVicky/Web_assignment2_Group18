<?php session_start() ?>
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
    error_reporting(0);
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

    $login = $_REQUEST['username'];
    $password = $_REQUEST['password2'];
    $chkLogin = "SELECT LOGIN FROM USERS WHERE LOGIN = '$login'";
    $chkPass = "SELECT PASSWORD FROM USERS WHERE LOGIN = '$login'";
    $getEmail = "SELECT EMAIL FROM USERS WHERE LOGIN = '$login'";
    $getUserId = "SELECT ID FROM USERS WHERE LOGIN = '$login'";
    $result = mysqli_query($conn, $chkLogin);
    $resultP = mysqli_query($conn, $chkPass);
    $resultE = mysqli_query($conn, $getEmail);
    $resultU = mysqli_query($conn, $getUserId);
    $resultLogin = mysqli_fetch_assoc($result);
    $resultPass = mysqli_fetch_assoc($resultP);
    $resultEmail = mysqli_fetch_assoc($resultE);
    $resultUserId = mysqli_fetch_assoc($resultU);

    if ($login == $resultLogin['LOGIN'] && $password == $resultPass['PASSWORD']) {
        $_SESSION["login"] = $login;
        $_SESSION["password"] = $password;
        $_SESSION["email"] = $resultEmail['EMAIL'];
        $_SESSION["userId"] = $resultUserId['ID'];
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