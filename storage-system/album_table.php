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
<tr> <th> Album Name </th> <th> Year </th> <th> Number of Songs </th> 

<?php


include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM album";

$result = mysqli_query($db, $sql_statement); // Executing query

echo "<br>";

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $alb_id = $row['alb_id'];
    $alb_year = $row['alb_year'];
    $alb_name = $row['alb_name'];
    $Number_of_songs = $row['Number_of_songs'];
    echo "<tr>" . "<th>" . $alb_name ."</th>" . "<th>" . $alb_year ."</th>" . "<th>" . $Number_of_songs ."</th>";
}
?>

</table>
</div>

</body>
</html>
