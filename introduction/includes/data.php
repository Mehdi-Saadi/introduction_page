<?php
require 'c_database.php';
?>

<?php

//my_name
$sql_m = "SELECT content FROM myname";
$result_m = mysqli_query($conn, $sql_m);
$rowCount_m = mysqli_num_rows($result_m);

//selecting last row of the table myname
$sql_m = "SELECT content FROM myname WHERE id = $rowCount_m";
$result_m = mysqli_query($conn, $sql_m);
$rowCount_m = mysqli_num_rows($result_m);


//my_skills
$sql_s = "SELECT php, laravel, html, css, bs, js, jquery, mysql FROM myskills";
$result_s = mysqli_query($conn, $sql_s);
$rowCount_s = mysqli_num_rows($result_s);


//pandc
$sql_p = "SELECT projects, clients FROM pandc";
$result_p = mysqli_query($conn, $sql_p);
$rowCount_p = mysqli_num_rows($result_p);

//selceting last row of the table pandc
$sql_p = "SELECT projects, clients FROM pandc WHERE id = $rowCount_p";
$result_p = mysqli_query($conn, $sql_p);
$rowCount_p = mysqli_num_rows($result_p);


//contact
$sql_c = "SELECT location, phone, email, instagram, linkedin FROM contact";
$result_c = mysqli_query($conn, $sql_c);
$rowCount_c = mysqli_num_rows($result_c);
