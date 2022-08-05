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

<section class="movies">

        <h2 class="popularmovies">Popular movies </h2>

        <div class="box-container">

            <div class="box">
                <img src="pic.jpg" alt="">
                <h3>Name required</h3>
            </div>

            <div class="box">
                <img src="pic.jpg" alt="">
                <h3>Name required</h3>
            </div>

            <div class="box">
                <img src="pic.jpg" alt="">
                <h3>Name required</h3>
            </div>

            <div class="box">
                <img src="pic.jpg" alt="">
                <h3>Name required</h3>
            </div>

            <div class="box">
                <img src="pic.jpg" alt="">
                <h3>Name required</h3>
            </div>

            <div class="box">
                <img src="pic.jpg" alt="">
                <h3>Name required</h3>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- about us section starts  -->

    <section class="about">

        <div class="aboutsection">
            <h3>about us</h3>
            <p id="intro">ALgonquin College: CST8285 group 18<br>
                Group member: Jingfei Wang; Chunxia Pang; Yujin Xiong; Michael Riesberry.
            </p>

        </div>

    </section>

    <!-- about us section ends -->

    <?php include 'footer.php' ?>