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
<tr> <th> Song Name </th> <th> Release Year </th> <th> Genre </th> <th> Language </th> <th> Duration </th>

<?php


include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM Songs";

$result = mysqli_query($db, $sql_statement); // Executing query

echo "<br>";

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $song_id = $row['song_id'];
    $year = $row['year'];
    $song_name = $row['song_name'];
    $duration = $row['duration'];
    $genre = $row['genre'];
    $language = $row['language'];
    echo "<tr>" . "<th>" . $song_name ."</th>" . "<th>" . $year ."</th>" . "<th>" . $genre ."</th>" . "<th>" . $language ."</th>" . "<th>" . $duration ."</th>";
}
?>

</table>
</div>

</body>
</html>
