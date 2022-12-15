<!DOCTYPE html>
<html>
<head>
    <title>Filter By Manager Age</title>

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
<h1 style="color: #627EED; font-size:150%;"> Managers Filtered by Age </h1>
<div align="center">

    <table>
<tr> <th> Manager Name </th>

<?php

echo "<br>";

include "config.php";

if(!empty($_POST['Man_age']))
{
    $g = $_POST['Man_age'];
    echo "<b>" . "IN THE MANAGER AGE = " . $g . "<b>";
    $sql_statement = "SELECT Man_name FROM Manager WHERE Man_age = $g ";
    $result = mysqli_query($db, $sql_statement);
    echo "<br>";
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Man_name = $row['Man_name'];
        echo "<tr>" . "<th>" . $Man_name . "</th>";
    }
}

?>

</table>
</div>

</body>
</html>
