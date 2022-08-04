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

    $movie = $_REQUEST['movie'];
    $chkUserId = "SELECT ID FROM USERS WHERE LOGIN = $_SESSION['login']";
    $chkMovieId = "SELECT ID FROM MOVIES WHERE MOVIES = '$movie'";
    $queryResultUserId = mysqli_query($conn, $chkUserId);
    $queryResultMovieId = mysqli_query($conn, $chkMovieId);
    $resultUserId = mysqli_fetch_assoc($queryResultUserId);
    $resultMovieId = mysqli_fetch_assoc($queryResultMovieId);


    $sql = "INSERT INTO FAVOURITES VALUES ('$resultUserId', '$resultMovieId')";
    if (mysqli_query($conn, $sql)) {
        echo "<p id=addfav>Movie added to favourites.</p>";
    }
    else {
        echo "error" . mysqli_error($conn);
    }



?>
