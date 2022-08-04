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
<body id="loginbody">
    <div id="error"></div>
    <div class="formcontainer">
        <hr>
        <form action="signup.php" method="post" id="form" onsubmit="return validate();">
            <table>
                <tr>
                    <td>
                        <div class="textfield">
                            <label for="email">Email Address</label><br>
                            <input type="text" name="email" id="email" placeholder="Email">
                            <span class="warning" id="emailError"></span>
                        </div>
                    </td>
                    <td><label for="username">User Name</label><br>
                        <input type="text" name="username" id="username" placeholder="User name">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="textfield">
                            <label for="login">User Name</label><br>
                            <input type="text" name="login" id="login" placeholder="User name">
                            <span class="warning" id="loginError"></span>
                        </div>
                    </td>
                    <td><label for="password2">Password</label><br>
                        <input type="text" name="password2" id="password2" placeholder="Password">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="textfield">
                            <label for="pass">Password</label><br>
                            <input type="password" name="pass" id="pass" placeholder="Password">
                            <span class="warning" id="passError"></span>
                        </div>
                    </td>
                    <td><button id="loginbutton">Log In</button></td>
                </tr>

                <tr>
                    <td>
                        <div class="textfield">
                            <label for="pass2">Re-type Password</label><br>
                            <input type="password" id="pass2" placeholder="Password">
                            <span class="warning" id="pass2Error"></span>
                        </div>
                    </td>
                </tr>
            </table>
            <button type="submit" id="submit">Sign-Up</button>
            <button type="reset" id="reset">Reset</button>
        </form>
    </div>

    <?php include 'footer.php' ?>