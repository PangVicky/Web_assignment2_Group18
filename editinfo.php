<?PHP session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Group18_Section303_Assignment2">
    <title>Home Page_MovieStation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery/jquery-1.12.1.min.js"></script>
    <link href="assignment2.css" rel="stylesheet" type="text/css">
    <script src="search.js" defer></script>
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
?>

<main>
    <div class="formcontainer">    
        <form action="editinfo.php" method="post" id="form">
            <table>
                    <tr>
                        <td>
                            <div class="textfield">
                                <label for="editemail">Edit Email Address</label><br>
                                <input type="text" name="editemail" id="editemail" placeholder="Email Address">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="textfield">
                                <label for="editpassword">Edit Password</label><br>
                                <input type="password" name="editpassword" id="editpassword" placeholder="Password">
                            </div>
                        </td>
                    </tr>
            </table>
            <button type="submit" id="submit">Sign-Up</button>
            <button type="reset" id="reset">Reset</button>
        </form>
    </div>
</main>

<?php include 'footer.php' ?>