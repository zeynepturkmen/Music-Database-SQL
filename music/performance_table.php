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
<tr> <th> Artist </th> <th> Song </th> <th> Year </th>

<?php


include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM Performs";

$result = mysqli_query($db, $sql_statement); // Executing query

echo "<br>";

while($row = mysqli_fetch_assoc($result))
{ // Iterating the result
    $ar_id = $row['ar_id'];
    $song_id = $row['song_id'];
    $year = $row['year_performed'];
    
    $sql_statement2 = "SELECT song_name FROM Songs WHERE song_id = $song_id";
    $result2 = mysqli_query($db, $sql_statement2); // Executing query
    $row2 = mysqli_fetch_assoc($result2);
    $song_name = $row2['song_name'];
    
    $sql_statement3 = "SELECT ar_stagename FROM Artist WHERE ar_id = $ar_id";
    $result3 = mysqli_query($db, $sql_statement3); // Executing query
    $row3 = mysqli_fetch_assoc($result3);
    $ar_stagename = $row3['ar_stagename'];
    
    echo "<tr>" . "<th>" . $ar_stagename ."</th>" . "<th>" . $song_name ."</th>" . "<th>" . $year ."</th>";
}

?>

</table>
</div>

</body>
</html>
