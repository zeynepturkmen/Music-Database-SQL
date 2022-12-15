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
<h1 style="color: #627EED; font-size:150%;"> Songs Filtered by Genre </h1>
<div align="center">

    <table>
<tr> <th> Song Name </th> <th> Release Year </th> <th> Language </th> <th> Duration </th>

<?php

echo "<br>";

include "config.php";

if(!empty($_POST['genres']))
{
    $g = $_POST['genres'];
    echo "<b>" . "IN THE GENRE = " . $g . "<b>";
    $sql_statement = "SELECT song_name, year, language, duration FROM Songs WHERE genre = '$g' ";
    $result = mysqli_query($db, $sql_statement);
    echo "<br>";
    
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $year = $row['year'];
        $song_name = $row['song_name'];
        $duration = $row['duration'];
        $language = $row['language'];
        echo "<tr>" . "<th>" . $song_name . "</th>" . "<th>" . $year . "</th>" . "<th>" . $language . "</th>" . "<th>" . $duration . "</th>";
    }
}

?>

</table>
</div>

</body>
</html>
