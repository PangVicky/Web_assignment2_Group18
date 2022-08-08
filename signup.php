<?php session_start() 
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
    <script src="script.js" defer></script>
</head>
<body id="loginbody">
<?php include 'header.php' // Adds header.php to page, prints header and nav bar ?>

<?php
    /*
        Connects to database and, through various queries, sets new user information
        into database
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
    $login = $_REQUEST['login'];
    $password = $_REQUEST['pass'];
    $email = $_REQUEST['email'];
    $chkLogin = "SELECT LOGIN FROM USERS WHERE LOGIN = '$login'";
    $result = mysqli_query($conn, $chkLogin);
    $resultLogin = mysqli_fetch_assoc($result);

    /*
        Checks if username entered by user matches any usernames stored in the database,
        if username matches a message is printed, if the username does not match the data
        is inserted into the database
    */
    if ($login == $resultLogin['LOGIN'] ) {
        echo "Username already taken. Please enter a different username.";

    }
    else {
        $sql = "INSERT INTO USERS (LOGIN, PASSWORD, EMAIL) VALUES ('$login', '$password', '$email')";
        if (mysqli_query($conn, $sql)) {
            echo "<p id=signup>Thanks for signing up!</p>";
        }
        else {
            echo "error" . mysqli_error($conn);
        }
    }
    // Disconnects from database
    if(isset($conn)) {
        mysqli_close($conn);
    }
?>
<?php include 'footer.php' // Adds footer.php to page, prints footer ?>