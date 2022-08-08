<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Group18_Section303_Assignment2">
    <title>Home Page_MovieStation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="js/jquery/jquery-1.12.1.min.js"></script> -->
    <link href="assignment2.css" rel="stylesheet" type="text/css">
    <script src="search.js" defer></script>
    <script src="script.js" defer></script>
</head>

<body>
<?php include 'header.php' ?>

<main>
    <div class="formcontainer">    
        <form action="editresult.php" method="post" id="form" onsubmit="return validate()">
            <table>
                    <tr>
                        <td>
                            <div class="textfield">
                                <label for="email">Edit Email Address</label><br>
                                <input type="text" name="email" id="email" placeholder="Email Address">
                                <span class="warning" id="emailError"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="textfield">
                                <label for="pass">Edit Password</label><br>
                                <input type="password" name="pass" id="pass" placeholder="Password">
                                <span class="warning" id="passError"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="textfield">
                                <label for="pass2">Confirm Password</label><br>
                                <input type="password" name="pass2" id="pass2" placeholder="Confirm Password">
                                <span class="warning" id="pass2Error"></span>
                            </div>
                        </td>
                    </tr>
            </table>
            <button type="submit" id="submit">Submit</button>
            <button type="reset" id="reset">Reset</button>
        </form>
    </div>
</main>

<?php include 'footer.php' ?>