<!DOCTYPE html>
<html>
<head>
    <title>Filter By Instrument Type</title>

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
<h1 style="color: #627EED; font-size:150%;"> Instruments Filtered by Instrument Type </h1>
<div align="center">

    <table>
<tr> <th> Instrument Name </th>
<?php

echo "<br>";

include "config.php";

if(!empty($_POST['i_type']))
{
    $g = $_POST['i_type'];
    echo "<b>" . "IN THE TYPE = " . $g . "<b>";
    $sql_statement = "SELECT i_name FROM Instruments WHERE i_type = '$g' ";
    $result = mysqli_query($db, $sql_statement);
    echo "<br>";
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $i_name = $row['i_name'];
        echo "<tr>" . "<th>" . $i_name . "</th>";
    }
}

?>

</table>
</div>

</body>
</html>
