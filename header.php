<?php
/* 
    Team Lead: Yujin Xiong
    Back End Developer: Michael Riesberry
    Front End Designer: Jingfei Wang
    Front End Developer(JS): Chunxia Pang
    Front End Developer(s)(HTML): Jingfei Wang, Yujin Xiong
*/

// Header template, echos header and nav bar onto pages where header.php is included

  echo '<!-- header section starts  -->
        <header class="header">
        <h1 id="title"><a href="mainpage.php" id="titlelink">MovieStation</a></h1>

           <nav id="navigation" class="navbar">
            <ul>
                <li><a class="active" href="mainpage.php" id="mainpage">Home</a></li>
                <li><a href="mainpage.php#intro" id="aboutus">About Us</a></li>
                <li><a href="login.php" id="login">Subscribe/Login</a></li>';
                // Displays edit user page button if user logged in to website
                if (isset ($_SESSION['login'])) {
                    echo '<li><a href="edituser.php" id="edit">Edit Users</a></li>';
                }
        echo    '<li>
                <form action="browse.php" name="searchform" onsubmit="return to()">
                    <input type="text" placeholder="Search.." name="search" id="searchKey">
                    <button type="submit" id="searchfor"><i class="fa fa-search"></i></button>
                </form>
            </li>
            </ul>
            
        </nav>

        </header> ';
?>

