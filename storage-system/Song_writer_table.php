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
<tr> <th> Song Writer Name </th> <th> Song Writer Age </th> 

<?php


include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM Song_writer";

$result = mysqli_query($db, $sql_statement); // Executing query

echo "<br>";

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $Sngw_id = $row['Sngw_id'];
    $Sngw_age = $row['Sngw_age'];
    $Sngw_name = $row['Sngw_name'];
    echo "<tr>" . "<th>" . $Sngw_name ."</th>" . "<th>" . $Sngw_age ."</th>" ;
}
?>

</table>
</div>

</body>
</html>
