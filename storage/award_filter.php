<!DOCTYPE html>
<html>
<head>
    <title>Filter By Constitution</title>

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
<h1 style="color: #627EED; font-size:150%;"> Awards Filtered by Constitution </h1>
<div align="center">

    <table>
<tr> <th> Award Title </th>

<?php

echo "<br>";

include "config.php";

if(!empty($_POST['aw_constitution']))
{
    $g = $_POST['aw_constitution'];
    echo "<b>" . "IN THE AW_CONSTITUTION = " . $g . "<b>";
    $sql_statement = "SELECT aw_title FROM Award WHERE aw_constitution = '$g' ";
    $result = mysqli_query($db, $sql_statement);
    echo "<br>";
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $aw_title = $row['aw_title'];
        echo "<tr>" . "<th>" . $aw_title . "</th>";
    }
}

?>

</table>
</div>

</body>
</html>
