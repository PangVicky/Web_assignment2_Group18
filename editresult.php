<?php session_start();
/* 
    Team Lead: Yujin Xiong
    Back End Developer: Michael Riesberry
    Front End Designer: Jingfei Wang
    Front End Developer(JS): Chunxia Pang
    Front End Developer(s)(HTML): Jingfei Wang, Yujin Xiong
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Group18_Section303_Assignment2">
    <title>Login</title>
    <link href="assignment2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js" defer></script>
</head>
<body>
<?php include 'header.php' // Adds header.php to page, prints header and nav bar ?>

<?php

    /*
        Connects to database and, through various queries,  edits the user's email and
        password
    */
    error_reporting(0);
    // Setting variables to connect to database
    $servername = "localhost:3307";
    $dbuser = "root";
    $dbpwd = "";
    $dbname = "assignment2";

    // Connection to database
    $conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
    if (mysqli_connect_errno()) {
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }

    // Setting variables to be used in database queries
    $login = $_SESSION['login'];
    $password = $_REQUEST['pass'];
    $email = $_REQUEST['email'];
    $chkLogin = "SELECT LOGIN FROM USERS WHERE LOGIN = '$login'";
    $result = mysqli_query($conn, $chkLogin);
    $resultLogin = mysqli_fetch_assoc($result);

    /*
        Checks to see if current login matches data stored in database, if no email
        or password is entered by user then a message is printed, if no email is entered
        only the password is updated, if no password is entered only the email is updated,
        if both email and password are entered both fields are updated
    */
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

    // Disconnects from database
    if(isset($conn)) {
        mysqli_close($conn);
    }
?>
<?php include 'footer.php' // Adds footer.php to page, prints footer ?>