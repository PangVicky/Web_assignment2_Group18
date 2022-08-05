<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Group18_Section303_Assignment2">
  <title>Home Page_WEBSITE NAME REQUIRED(NOT NETFLIX)</title>
  <link href="assignment2.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="search.js" defer></script>
</head>

<?php include 'header.php' ?>



<body id="searchbody">


  <!-- create the elemment: search -->
  <form class="mysearch" style="margin:auto;max-width:300px">
    <input id="searchbar" type="text" placeholder="Please input.." name="search2" required>
    <button type="button" onclick="searchfunc()"><i class="fa fa-search"></i></button>
  </form>
  <!-- create the filter area -->
  <select name="options" id="filter" onchange="getOption(this)">
    <option>More filter</option>
    <option value="Comedy">Comedy</option>
    <option value="Family">Family</option>
    <option value="Show">Show</option>
  </select>

  <table>
    <thead>
      <tr>
        <th id="movieheadert">Movies...</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
  <hr>

