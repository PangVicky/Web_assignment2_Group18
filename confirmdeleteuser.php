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

<main>
    <div>
        <h2>Are you sure you want to delete your account?</h2>
        <a href="deleteuser.php">Yes</a>
        <a href="edituser.php">No</a>
    </div>

</main>

<?php include 'footer.php' ?>