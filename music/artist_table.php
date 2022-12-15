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
<tr> <th> Stage Name </th> <th> Type </th> <th> Date Created </th>

<?php


include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM Artist";

$result = mysqli_query($db, $sql_statement); // Executing query

echo "<br>";

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $ar_id = $row['ar_id'];
    $ar_type = $row['ar_type'];
    $ar_stagename = $row['ar_stagename'];
    $ar_date_created = $row['ar_date_created'];
    echo "<tr>" . "<th>" . $ar_stagename ."</th>" . "<th>" . $ar_type ."</th>" . "<th>" . $ar_date_created ."</th>";
}
?>

</table>
</div>

</body>
</html>
