<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dchat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

    if(!$conn){
        echo "Database connected" .mysqli_connect_error();
    }
?>