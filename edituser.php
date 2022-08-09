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
    <title>Home Page_MovieStation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery/jquery-1.12.1.min.js"></script>
    <link href="assignment2.css" rel="stylesheet" type="text/css">
    <script src="search.js" defer></script>
</head>

<body>
<?php include 'header.php' // Adds header.php to page, prints header and nav bar ?>

<!-- forms a table to display user information to allow edit and delete -->
<table id="usertable">
        <tr>
            <th class="table_e">ID</th>
            <th class="table_e">Username</th>
            <th class="table_e">Password</th>
            <th class="table_e">Email</th>
            <th class="table_e"></th>
        </tr>
        <tr>
            <td class="table_e"><?php echo $_SESSION['userId'] ?></td>
            <td class="table_e"><?php echo $_SESSION['login'] ?></td>
            <td class="table_e"><?php echo $_SESSION['password'] ?></td>
            <td class="table_e"><?php echo $_SESSION['email'] ?></td>
            <td class="table_e"><a href="editinfo.php">Edit</a>
                <a href="confirmdeleteuser.php">Delete Account</a>
            </td>
        </tr>
    </table>

    

    <?php include 'footer.php' // Adds footer.php to page, prints footer ?>