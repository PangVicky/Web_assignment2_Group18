<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Group18_Section303_Assignment2">
    <title>Login</title>
    <link href="assignment2.css" rel="stylesheet" type="text/css">
    <script src="script.js" defer></script>
</head>
<body>
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
error_reporting(0);
$login = $_SESSION['login'];
$password = $_REQUEST['pass'];
$email = $_REQUEST['email'];
$chkLogin = "SELECT LOGIN FROM USERS WHERE LOGIN = '$login'";
$result = mysqli_query($conn, $chkLogin);
$resultLogin = mysqli_fetch_assoc($result);

if ($_SESSION['login'] == $resultLogin['LOGIN'] ) {
    if ($email == "" && $password == "") {
        echo "Enter a valid email or password to edit.";
    }
    elseif ($email == "") {
        $sql = "UPDATE USERS SET `PASSWORD` = '$password' WHERE LOGIN = '$login'";
        if (mysqli_query($conn, $sql)) {
            echo "<p>Password successfully updated.</p>";
            $_SESSION['password'] = $password;
        }
        else {
            echo "error" . mysqli_error($conn);
        }
    }
    elseif ($password == "") {
        $sql = "UPDATE USERS SET EMAIL = '$email' WHERE LOGIN = '$login'";
        if (mysqli_query($conn, $sql)) {
            echo "<p>Email address successfully updated.</p>";
            $_SESSION['email'] = $email;
        }
        else {
            echo "error" . mysqli_error($conn);
        }
    }
    else {
        $sql = "UPDATE USERS SET EMAIL = '$email', PASSWORD = '$password' WHERE LOGIN = '$login'";
        if (mysqli_query($conn, $sql)) {
            echo "<p>Email address and password successfully updated.</p>";
            $_SESSION['password'] = $password;
            $_SESSION['email'] = $email;
        }
        else {
            echo "error" . mysqli_error($conn);
        }
    }
}
if(isset($conn)) {
    mysqli_close($conn);
}
?>
<?php include 'footer.php' ?>