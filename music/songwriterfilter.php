<!DOCTYPE html>
<html>
<head>
    <title>Filter By Song Writer Age</title>

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
<h1 style="color: #627EED; font-size:150%;"> Song Writers Filtered by Song Writer Age </h1>
<div align="center">

    <table>
<tr> <th> Song Writer Name </th> 

<?php

echo "<br>";

include "config.php";

if(!empty($_POST['Sngw_age']))
{
    $g = $_POST['Sngw_age'];
    echo "<b>" . "IN THE Song Writer Age = " . $g . "<b>";
    $sql_statement = "SELECT Sngw_name  FROM Song_writer WHERE Sngw_age = $g ";
    $result = mysqli_query($db, $sql_statement);
    echo "<br>";
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Sngw_name = $row['Sngw_name'];
        echo "<tr>" . "<th>" . $Sngw_name . "</th>";
    }
}

?>

</table>
</div>

</body>
</html>
