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
<h1 style="color: #627EED; font-size:150%;"> Songs Filtered by Instruments </h1>
<div align="center">

    <table>
<tr> <th> Song </th>

<?php

echo "<br>";

include "config.php";

if(!empty($_POST['i_id']))
{
    $g = $_POST['i_id'];
    $sql_statement2 = "SELECT i_name FROM Instruments WHERE i_id = $g";
    $result2 = mysqli_query($db, $sql_statement2); // Executing query
    $row2 = mysqli_fetch_assoc($result2);
    $i_name = $row2['i_name'];
    echo "<b>" . "BY THE INSTRUMENT NAME = " . $i_name. "<b>";
    
    $sql_statement = "SELECT * FROM Played_by WHERE i_id = $g";
    $result = mysqli_query($db, $sql_statement);
    echo "<br>";
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $song_id = $row['song_id'];
        $i_id = $row['i_id'];
        
        $sql_statement2 = "SELECT song_name FROM Songs WHERE song_id = $song_id";
        $result2 = mysqli_query($db, $sql_statement2); // Executing query
        $row2 = mysqli_fetch_assoc($result2);
        $song_name = $row2['song_name'];
        

        echo "<tr>" . "<th>" . $song_name . "</th>";
    }
}


?>

</table>
</div>

</body>
</html>
