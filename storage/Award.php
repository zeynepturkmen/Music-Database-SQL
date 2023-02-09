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
include "award_table.php";
?>

</body>

</form>
</html>
<form action="insertaward.php" method="POST">
Award Title: <input type="text" id="aw_title" name="aw_title">
<div style="width: 100%; display: table;">
        <div style="display: table-row; height: 100px;">
            <div style="width: 50%; display: table-cell; background: #D9F2F4;">
                Constitution: <input type="text" id="aw_constitution" name="aw_constitution">
            </div>
        </div>
    </div>
<input type="submit" value="Submit">



</form>
<form action="award_filter.php" method="POST">
<select name="aw_constitution">

<?php
$sql_command = "SELECT DISTINCT aw_constitution FROM Award";

$myresult = mysqli_query($db, $sql_command);

    while($rows = mysqli_fetch_assoc($myresult))
    {
        $aw_constitution = $rows['aw_constitution'];
        echo "<option value=$aw_constitution>". $aw_constitution . "</option>";
    }
?>

</select>
<button>FILTER</button>
</form>


<form action="award_delete.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT aw_id, aw_title FROM Award";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $aw_id = $id_rows['aw_id'];
        $aw_title = $id_rows['aw_title'];
        echo "<option value=$aw_id>". $aw_title . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>
