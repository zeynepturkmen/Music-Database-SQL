<!DOCTYPE html>
<html>
<head>
    <title>Filter By Genre</title>

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
<h1 style="color: #627EED; font-size:150%;"> Artists Filtered by Type </h1>
<div align="center">

    <table>
<tr> <th> Stage Name </th> <th> Date Created </th>

<?php

echo "<br>";

include "config.php";

if(!empty($_POST['ar_type']))
{
    $g = $_POST['ar_type'];
    echo "<b>" . "IN THE TYPE = " . $g . "<b>";
    $sql_statement = "SELECT ar_stagename, ar_date_created FROM Artist WHERE ar_type = '$g' ";
    $result = mysqli_query($db, $sql_statement);
    echo "<br>";
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $ar_stagename = $row['ar_stagename'];
        $ar_date_created = $row['ar_date_created'];
        echo "<tr>" . "<th>" . $ar_stagename . "</th>" . "<th>" . $ar_date_created . "</th>";
    }
}

?>

</table>
</div>

</body>
</html>
