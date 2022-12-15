<!DOCTYPE html>
<html>
<head>
    <title>Filter By Genre</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #889FDF;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D2DEFE;
}
</style>

</head>
<body>

<div align="center">
<h1 style="color: #627EED; font-size:150%;"> Welcome to our Music Database! </h1>
<div align="center">



<?php

echo "<br>";

include "config.php";

if(!empty($_POST['types']))
{
    $g = $_POST['types'];
    echo "<b>" . "YOU ARE EDITING = " . $g . "<b>";
    if ($g == "Album")
        include "Album.php";
    else if ($g == "Artist")
        include "Artist.php";
    else if ($g == "Award")
        include "Award.php";
    else if ($g == "Consists_Of")
        include "Consists_Of.php";
    else if ($g == "Instruments")
        include "Instruments.php";
    else if ($g == "Manager")
        include "Manager.php";
    else if ($g == "Performs")
        include "Performs.php";
    else if ($g == "Play")
        include "Play.php";
    else if ($g == "Played_by")
        include "Played_by.php";
    else if ($g == "Songs")
        include "Songs.php";
    else if ($g == "Song_Writer")
        include "Song_Writer.php";
    else if ($g == "Writes")
        include "Writes.php";
}
?>
