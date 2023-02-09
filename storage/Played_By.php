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
include "Played_by_table.php";
?>

</body>

</form>
</html>
<form action="insertplayed_by.php" method="POST">
<div style="width: 100%; display: table;">
<div style="display: table-row; height: 100px;">
    <div style="width: 50%; display: table-cell; background: #D9F2F4;">

Instrument:
<select name="i_id">
<?php
$sql_command = "SELECT i_name, i_id FROM Instruments";

$myresult = mysqli_query($db, $sql_command);

    while($rows = mysqli_fetch_assoc($myresult))
    {
        $i_name = $rows['i_name'];
        $i_id = $rows['i_id'];
        echo "<option value=$i_id>". $i_name . "</option>";
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


Filter the songs by the instrument:
<form action="played_by_filter.php" method="POST" id="form2">
<select name="i_id">


<?php
$sql_command = "SELECT i_id FROM Instruments";

$myresult = mysqli_query($db, $sql_command);

    while($rows = mysqli_fetch_assoc($myresult))
    {
        $i_id = $rows['i_id'];
        
        $sql_statement2 = "SELECT i_name FROM Instruments WHERE i_id = $i_id";
        $result2 = mysqli_query($db, $sql_statement2); // Executing query
        $row2 = mysqli_fetch_assoc($result2);
        $i_name = $row2['i_name'];
        echo "<option value=$i_id>". $i_name . "</option>";
    }
?>

</select>
<button>FILTER</button>
</form>




<form action="played_by_delete.php" method="POST" id="form3">
<select name="ids">
<?php

$sql_command = "SELECT * FROM Played_by";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $i_id= $id_rows['i_id'];
        $song_id = $id_rows['song_id'];
        
        $sql_statement2 = "SELECT i_name FROM Instruments WHERE i_id = $i_id";
        $result2 = mysqli_query($db, $sql_statement2); // Executing query
        $row2 = mysqli_fetch_assoc($result2);
        $i_name = $row2['i_name'];
        
        $sql_statement3 = "SELECT song_name FROM Songs WHERE song_id = $song_id";
        $result3 = mysqli_query($db, $sql_statement3); // Executing query
        $row3 = mysqli_fetch_assoc($result3);
        $song_name = $row3['song_name'];
        echo "<option value=$i_id,$song_id>". $song_name . "-" . $i_name . "</option>";
    }
?>

<input type="submit" value="DELETE" id="form3">
</form>
