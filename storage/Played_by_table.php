<!DOCTYPE html>
<html>
<head>
    <title>Music</title>

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
    <table>
<tr> <th> Instrument Name </th> <th> Song Name </th>

<?php


include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM Played_by";

$result = mysqli_query($db, $sql_statement); // Executing query

echo "<br>";

while($row = mysqli_fetch_assoc($result))
{ // Iterating the result
    $i_id = $row['i_id'];
    $song_id = $row['song_id'];
    
    $sql_statement2 = "SELECT i_name FROM Instruments WHERE i_id = $i_id";
    $result2 = mysqli_query($db, $sql_statement2); // Executing query
    $row2 = mysqli_fetch_assoc($result2);
    $i_name = $row2['i_name'];
    
    $sql_statement3 = "SELECT song_name FROM Songs WHERE song_id = $song_id";
    $result3 = mysqli_query($db, $sql_statement3); // Executing query
    $row3 = mysqli_fetch_assoc($result3);
    $song_name = $row3['song_name'];
    
    echo "<tr>" . "<th>" . $i_name ."</th>" . "<th>" . $song_name ."</th>";
}

?>

</table>
</div>

</body>
</html>
