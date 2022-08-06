<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Group18_Section303_Assignment2">
    <title>Home Page_WEBSITE NAME REQUIRED(NOT NETFLIX)</title>
    <link href="assignment2.css" rel="stylesheet" type="text/css">
    <script src="script.js" defer></script>

</head>

<body id="mainbody">

<?php include 'header.php' ?>

<div id="main">
        <div id="content">
            <div class="box">
                <div class="head">
                    <h2 id="heading2">Popular TV Shows</h2>
                </div>
                <div class="movie">
                    <div class="movie-image"> <span class="play"><span class="name">Desperate Housewives</span></span> <a href="#"><img
                                src="images/DesperateHousewives.jpg" alt="" /></a></div>
                </div>
                <div class="movie">
                    <div class="movie-image"> <span class="play"><span class="name">Friends</span></span> <a
                            href="#"><img src="images/Friends.jpg" alt="" /></a> </div>
                </div>
                <div class="movie">
                    <div class="movie-image"> <span class="play"><span class="name">Grey's Anatomy</span></span> <a
                            href="#"><img src="images/Grey's_Anatomy.jpg" alt="" /></a> </div>
                </div>
                <div class="movie">
                    <div class="movie-image"> <span class="play"><span class="name">HouseCards</span></span> <a
                            href="#"><img src="images/HouseCards.jpg" alt="" /></a> </div>
                </div>
                <div class="movie">
                    <div class="movie-image"> <span class="play"><span class="name">Virgin River</span></span> <a
                            href="#"><img src="images/virgin_river.jpg" alt="" /></a> </div>
                </div>
                <div class="movie last">
                    <div class="movie-image"> <span class="play"><span class="name">Young Sheldon</span></span> <a
                            href="#"><img src="images/young_sheldon.jpg" alt="" /></a> </div>
                </div>
                <div class="cl">&nbsp;</div>
            </div>   
        </div>
    </div>
    <div class="aboutsection">
        <h3 id="heading3">About Us</h3>
        <p id="intro">ALgonquin College: CST8285 group 18<br>
            Group member: Jingfei Wang; Chunxia Pang; Yujin Xiong; Michael Riesberry.
        </p>
    </div>


    <?php include 'footer.php' ?>