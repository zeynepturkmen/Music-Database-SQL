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
<h1 style="color: #627EED; font-size:150%;"> Performance Filtered by Year </h1>
<div align="center">

    <table>
<tr> <th> Artist </th> <th> Song </th> <th> Year </th>

<?php

echo "<br>";

include "config.php";

if(!empty($_POST['year']))
{
    $g = $_POST['year'];
    echo "<b>" . "AFTER THE YEAR = " . $g . "<b>";
    
    $sql_statement = "SELECT * FROM Performs WHERE year_performed > $g";
    $result = mysqli_query($db, $sql_statement);
    echo "<br>";
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $year_performed = $row['year_performed'];
        $song_id = $row['song_id'];
        $ar_id = $row['ar_id'];
        
        $sql_statement2 = "SELECT song_name FROM Songs WHERE song_id = $song_id";
        $result2 = mysqli_query($db, $sql_statement2); // Executing query
        $row2 = mysqli_fetch_assoc($result2);
        $song_name = $row2['song_name'];
        
        $sql_statement3 = "SELECT ar_stagename FROM Artist WHERE ar_id = $ar_id";
        $result3 = mysqli_query($db, $sql_statement3); // Executing query
        $row3 = mysqli_fetch_assoc($result3);
        $ar_stagename = $row3['ar_stagename'];
        
        echo "<tr>" . "<th>" . $ar_stagename . "</th>" . "<th>" . $song_name . "</th>" . "<th>" . $year_performed . "</th>" ;
    }
}

?>

</table>
</div>

</body>
</html>
