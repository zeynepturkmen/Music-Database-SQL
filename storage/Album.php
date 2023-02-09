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
include "album_table.php";
?>

</body>

</form>
</html>
<form action="insertalbums.php" method="POST">
Album Name: <input type="text" id="alb_name" name="alb_name">
<div style="width: 100%; display: table;">
        <div style="display: table-row; height: 100px;">
            <div style="width: 50%; display: table-cell; background: #D9F2F4;">
                Release Year: <input type="text" id="alb_year" name="alb_year">
                Number of songs: <input type="text" id="Number_of_songs" name="Number_of_songs">
            </div>
        </div>
    </div>
<input type="submit" value="Submit">


</form>
<form action="filterbyalb_year.php" method="POST">
<select name="alb_year">

<?php
$sql_command = "SELECT DISTINCT alb_year FROM album";

$myresult = mysqli_query($db, $sql_command);

    while($rows = mysqli_fetch_assoc($myresult))
    {
        $alb_year = $rows['alb_year'];
        echo "<option value=$alb_year>". $alb_year . "</option>";
    }
?>

</select>
<button>FILTER</button>
</form>

<form action="albumdelete.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT alb_id, alb_name FROM album";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $alb_id = $id_rows['alb_id'];
        $alb_name = $id_rows['alb_name'];
        echo "<option value=$alb_id>". $alb_name . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>
