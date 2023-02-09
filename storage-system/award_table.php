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
<tr> <th> Award Title </th> <th> Constitution </th> 

<?php


include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM Award";

$result = mysqli_query($db, $sql_statement); // Executing query

echo "<br>";

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $aw_id = $row['aw_id'];
    $aw_title = $row['aw_title'];
    $aw_constitution = $row['aw_constitution'];
    echo "<tr>" . "<th>" . $aw_title ."</th>" . "<th>" . $aw_constitution ."</th>";
}
?>

</table>
</div>

</body>
</html>
