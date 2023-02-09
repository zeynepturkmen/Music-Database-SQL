<!DOCTYPE html>
<html>
<head>
    <title>Filter By Year</title>

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
<h1 style="color: #627EED; font-size:150%;"> Songs Filtered by Year </h1>
<div align="center">

    <table>
<tr> <th> Song Writer </th> <th> Song </th> <th> Year </th>

<?php

echo "<br>";

include "config.php";

if(!empty($_POST['year']))
{
    $g = $_POST['year'];
    echo "<b>" . "AFTER THE YEAR = " . $g . "<b>";
    
    $sql_statement = "SELECT * FROM Writes WHERE write_year > $g";
    $result = mysqli_query($db, $sql_statement);
    echo "<br>";
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $write_year = $row['write_year'];
        $song_id = $row['song_id'];
        $sngw_id = $row['sngw_id'];
        $sql_statement2 = "SELECT song_name FROM Songs WHERE song_id = $song_id";
        $result2 = mysqli_query($db, $sql_statement2); // Executing query
        $row2 = mysqli_fetch_assoc($result2);
        $song_name = $row2['song_name'];
	  $sql_statement3 = "SELECT sngw_name FROM Song_writer WHERE sngw_id = $sngw_id";
        $result3 = mysqli_query($db, $sql_statement3); // Executing query
        $row3 = mysqli_fetch_assoc($result3);
        $sngw_name = $row3['sngw_name'];
        
        echo "<tr>" . "<th>" . $sngw_name ."</th>"  . "<th>" . $song_name ."</th>". "<th>" . $write_year ."</th>";
    }
}

?>

</table>
</div>

</body>
</html>
