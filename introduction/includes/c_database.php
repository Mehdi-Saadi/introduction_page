<?php

//params to connect to the database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "introduction";

//connection to the database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
  die("Database connection failed: " . mysqli_connect_error());
}
