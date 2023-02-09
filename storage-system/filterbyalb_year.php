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
<h1 style="color: #627EED; font-size:150%;"> Songs Filtered by Album Year </h1>
<div align="center">

    <table>
<tr> <th> Album Name </th> <th> Number of Songs </th>

<?php

echo "<br>";

include "config.php";

if(!empty($_POST['alb_year']))
{
    $g = $_POST['alb_year'];
    echo "<b>" . "IN THE ALB_YEAR = " . $g . "<b>";
    $sql_statement = "SELECT alb_name, Number_of_songs FROM album WHERE alb_year = $g ";
    $result = mysqli_query($db, $sql_statement);
    echo "<br>";
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $alb_name = $row['alb_name'];
        $Number_of_songs = $row['Number_of_songs'];
        echo "<tr>" . "<th>" . $alb_name . "</th>" . "<th>" . $Number_of_songs . "</th>";
    }
}

?>

</table>
</div>

</body>
</html>
