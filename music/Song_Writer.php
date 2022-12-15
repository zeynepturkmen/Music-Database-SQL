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
include "Song_writer_table.php";
?>

</body>

</form>
</html>
<form action="insertSong_writers.php" method="POST">
Song Writer Name: <input type="text" id="Sngw_name" name="Sngw_name">
<div style="width: 100%; display: table;">
        <div style="display: table-row; height: 100px;">
            <div style="width: 50%; display: table-cell; background: #D9F2F4;">
                Song Writer Age: <input type="text" id="Sngw_age" name="Sngw_age">
            </div>
        </div>
    </div>
<input type="submit" value="Submit">

</form>

<form action="songwriterfilter.php" method="POST">
<select name="Sngw_age">

<?php
$sql_command = "SELECT DISTINCT Sngw_age FROM Song_writer";

$myresult = mysqli_query($db, $sql_command);

    while($rows = mysqli_fetch_assoc($myresult))
    {
        $Sngw_age = $rows['Sngw_age'];
        echo "<option value=$Sngw_age>". $Sngw_age . "</option>";
    }
?>

</select>
<button>FILTER</button>
</form>


<form action="songwriter_delete.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT Sngw_id, Sngw_name FROM Song_writer";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $Sngw_id = $id_rows['Sngw_id'];
        $Sngw_name = $id_rows['Sngw_name'];
        echo "<option value=$Sngw_id>". $Sngw_name . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>



