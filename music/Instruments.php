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
include "instrument_table.php";
?>

</body>

</form>
</html>
<form action="insertinstruments.php" method="POST">
Instrument Name: <input type="text" id="i_name" name="i_name">
<div style="width: 100%; display: table;">
        <div style="display: table-row; height: 100px;">
            <div style="width: 50%; display: table-cell; background: #D9F2F4;">
                Instrument Type: <input type="text" id="i_type" name="i_type">
            </div>
        </div>
    </div>
<input type="submit" value="Submit">



</form>

<form action="instruments_filter.php" method="POST">
<select name="i_type">

<?php
$sql_command = "SELECT DISTINCT i_type FROM Instruments";

$myresult = mysqli_query($db, $sql_command);

    while($rows = mysqli_fetch_assoc($myresult))
    {
        $i_type = $rows['i_type'];
        echo "<option value=$i_type>". $i_type . "</option>";
    }
?>

</select>
<button>FILTER</button>



</form>
<form action="instruments_delete.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT i_id, i_name FROM Instruments";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $i_id = $id_rows['i_id'];
        $i_name = $id_rows['i_name'];
        echo "<option value=$i_id>". $i_name . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>
