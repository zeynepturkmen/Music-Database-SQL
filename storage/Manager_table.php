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
<tr> <th> Manager Name </th> <th> Manager Age </th>
 
<?php


include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM Manager";

$result = mysqli_query($db, $sql_statement); // Executing query

echo "<br>";

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $Man_id = $row['Man_id'];
    $Man_name = $row['Man_name'];
    $Man_age = $row['Man_age'];
    echo "<tr>" . "<th>" . $Man_name ."</th>". "<th>" . $Man_age ."</th>";
}
?>

</table>
</div>

</body>
</html>
