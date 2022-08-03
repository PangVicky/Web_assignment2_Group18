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

<div id="error"></div>
    <div class="formcontainer">
        <h1 id="loginheader">User Login</h1>
        <hr>
        <form action="signup.php" method="post" id="form" onsubmit="return validate();">

            <div class="textfield">
                <label for="email">Email Address</label><br>
                <input type="text" name="email" id="email" placeholder="Email">

            </div>

            <div class="textfield">
                <label for="login">User Name</label><br>
                <input type="text" name="login" id="login" placeholder="User name">
                
            </div>

            <div class="textfield">
                <label for="pass">Password</label><br>
                <input type="password" name="pass" id="pass" placeholder="Password">
                
            </div>

            <div class="textfield">
                <label for="pass2">Re-type Password</label><br>
                <input type="password" id="pass2" placeholder="Password">
                
            </div>

            <button type="submit" id="submit">Sign-Up</button>
            <button type="reset" id="reset">Reset</button>
        </form>

    </div>

    <?php include 'footer.php' ?>