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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js" defer></script>
</head>
<body id="loginbody">
<?php include 'header.php' // Adds header.php to page, prints header and nav bar ?>

<?php 
    /* 
        Connects to database and, through various queries, verifies user login and 
        sets $_SESSION variables
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
    // Setting variables for query and to verify login
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
    
    /* 
        Checks if login and password entered by user matches data stored in database,
        $_SESSION variables are then set to match data stored in database, if data does
        not match a message is printed to tell the user
    */
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
    // Disconnects from database
    if(isset($conn)) {
        mysqli_close($conn);
    }
?>
<?php include 'footer.php' // Adds footer.php to page, prints footer ?>