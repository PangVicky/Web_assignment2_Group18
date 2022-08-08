<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Group18_Section303_Assignment2">
  <title>Home Page_WEBSITE NAME REQUIRED(NOT NETFLIX)</title>
  <link href="assignment2.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery/jquery-1.12.1.min.js"></script>
  <script src="search.js" defer></script>
</head>


<body id="searchbody">
  <header class="header">
    <h1 id="title"><a href="mainpage.php" id="titlelink">MovieStation</a></h1>
    <div id="navigation" class="navbar">
        <ul>
            <li><a class="active" href="mainpage.php" id="mainpage">Home</a></li>
            <li><a href="mainpage.php#intro" id="aboutus">About Us</a></li>
            <!-- <li><a href="search.html" id="searching">Search</a></li> -->
            <li><a href="login.php" id="login">Subscribe/Login</a></li>
            <li><a href="edituser.php" id="edit">Edit Users</a></li>
        </ul>
    </div>
</header>



<form class="mysearch" style="margin:auto;max-width:300px">
    <input id="searchbar" type="text" placeholder="Please input.." name="search2">
    <button type="button" onclick="searchfunc()"><i class="fa fa-search"></i></button>
  
  <!-- create the filter area -->
  <select name="options" id="filter" onchange="getOption(this)">
    <option>More Filter</option>
    <option value="Comedy">Comedy</option>
    <option value="Family">Family</option>
    <option value="Show">Show</option>
  </select>
  </form>
  <table>
    <thead>
      <tr>
        <th>Movies...</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
  <hr>

  <?php include 'footer.php' ?>

