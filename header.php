<?php
  echo '<!-- header section starts  -->

        <header class="header">
        <h1 id="title"><a href="mainpage.php" id="titlelink">MovieStation</a></h1>

           <nav id="navigation" class="navbar">
            <ul>
                <li><a class="active" href="mainpage.php" id="mainpage">Home</a></li>
                <li><a href="mainpage.php#intro" id="aboutus">About Us</a></li>
                <li><a href="login.php" id="login">Subscribe/Login</a></li>
                <li><a href="edituser.php" id="edit">Edit Users</a></li>
                <li>
                <form action="search.html" name="searchform" onsubmit="return to()">
                    <input type="text" placeholder="Search.." name="search" id="searchKey">
                    <button type="submit" id="searchfor"><i class="fa fa-search"></i></button>
                </form>
            </li>
            </ul>
            
        </nav>

        </header> ';
?>