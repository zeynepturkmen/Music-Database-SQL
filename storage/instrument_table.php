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
<tr> <th> Instrument Name </th> <th> Instrument Type </th>

<?php


include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM Instruments";

$result = mysqli_query($db, $sql_statement); // Executing query

echo "<br>";

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $i_id = $row['i_id'];
    $i_name = $row['i_name'];
    $i_type = $row['i_type'];
    echo "<tr>" . "<th>" . $i_name ."</th>" . "<th>" . $i_type ."</th>";
}
?>

</table>
</div>

</body>
</html>
