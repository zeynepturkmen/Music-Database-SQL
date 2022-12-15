<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] { /* submit buttons color */
  width: 100%;
  background-color: #849BF4;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover { /* color the button gets when clicked.*/
  background-color: #627EED;
}
.button2 {
  background-color: #45a049;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  }
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<div align="center">
<h1 style="color: #627EED; font-size:150%;"></h1>

<?php
include "write_table.php";
?>

</body>

</form>
</html>
<form action="insertwrite.php" method="POST">
Writing Year: <input type="text" id="write_year" name="write_year">
<div style="width: 100%; display: table;">
<div style="display: table-row; height: 100px;">
    <div style="width: 50%; display: table-cell; background: #D9F2F4;">

Song_writer:
<select name="sngw_id">
<?php
$sql_command = "SELECT sngw_name,sngw_id FROM Song_writer";

$myresult = mysqli_query($db, $sql_command);

    while($rows = mysqli_fetch_assoc($myresult))
    {
	  $sngw_name = $rows['sngw_name'];
        $sngw_id = $rows['sngw_id'];
        echo "<option value=$sngw_id>". $sngw_name . "</option>";
    }
?>

</div>

<div style="display: table-cell; background: #D9F2F4;">

</select>

Song:
<select name="song_id">
<?php

$sql_command = "SELECT song_name, song_id FROM Songs";

$myresult = mysqli_query($db, $sql_command);

    while($rows = mysqli_fetch_assoc($myresult))
    {
        $song_name = $rows['song_name'];
        $song_id= $rows['song_id'];
        echo "<option value=$song_id>". $song_name . "</option>";
    }
?>
</select>
</div>
</div>
</div>
<input type="submit" value="SUBMIT">
</form>




<form action="writefilter.php" method="POST" id="form2">
Filter the performances after the year: <input type="text" id="year" name="year">
<input type="submit" value="FILTER" id="form2">
</form>




<form action="write_delete.php" method="POST" id="form3">
<select name="ids">
<?php

$sql_command = "SELECT * FROM Writes";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $sngw_id = $id_rows['sngw_id'];
        $song_id = $id_rows['song_id'];
        $write_year = $id_rows['write_year'];
        
        $sql_statement2 = "SELECT song_name FROM Songs WHERE song_id = $song_id";
        $result2 = mysqli_query($db, $sql_statement2); // Executing query
        $row2 = mysqli_fetch_assoc($result2);
        $song_name = $row2['song_name'];
	  $sql_statement3 = "SELECT sngw_name FROM Song_writer WHERE sngw_id = $sngw_id";
	  $result3 = mysqli_query($db, $sql_statement3); // Executing query
        $row3 = mysqli_fetch_assoc($result3);
	  $sngw_name = $row3['sngw_name'];
        
        echo "<option value=$song_id,$sngw_id>" . $song_name . "-" .  $sngw_name . "-" .   $write_year . "</option>";
    }
?>

<input type="submit" value="DELETE" id="form3">
</form>
