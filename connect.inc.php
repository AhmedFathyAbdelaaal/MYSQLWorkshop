<?php 
    $servername = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "demo";

    $conn =  mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

    if (!$conn){
        die("Could not connect to demo server");
    }