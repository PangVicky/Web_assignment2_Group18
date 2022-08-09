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
    <div id="error"></div>
    <!-- creates a sign-up form to allow users input information to sign-up -->
    <div class="formcontainer">
        <h1 id="loginheader">User Sign-Up</h1>
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
                </tr>
                <tr>
                    <td>
                        <div class="textfield">
                            <label for="login">User Name</label><br>
                            <input type="text" name="login" id="login" placeholder="User name">
                            <span class="warning" id="loginError"></span>
                        </div>
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
        <!-- creates a login form to allow users to log in -->
        <h1 id="loginheader">User Login</h1>
        <hr>
        <form action="verifylogin.php" method="post" id="loginform">
        <table>
            <tr>
                <td>
                    <div class="textfield">
                        <label for="username">User Name</label><br>
                        <input type="text" name="username" id="username" placeholder="User name">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="textfield">
                        <label for="password2">Password</label><br>
                        <input type="password" name="password2" id="password2" placeholder="Password">
                    </div>
                </td>
            </tr>
        </table>
        <button type="submit" id="loginbutton">Log In</button>
        <button type="reset" id="loginreset">Reset</button>
        </form>
    </div>

    <?php include 'footer.php' // Adds footer.php to page, prints footer ?>