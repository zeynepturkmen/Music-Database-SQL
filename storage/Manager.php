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
include "Manager_table.php";
?>

</body>

</form>
</html>
<form action="insertManager.php" method="POST">
Manager Name: <input type="text" id="Man_name" name="Man_name">
Manager Age: <input type="text" id="Man_age" name="Man_age">
<div style="width: 100%; display: table;">
        <div style="display: table-row; height: 100px;">
        
<input type="submit" value="Submit">

</form>

<form action="manager_delete.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT Man_id, Man_name FROM Manager";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $Man_id = $id_rows['Man_id'];
        $Man_name = $id_rows['Man_name'];
        echo "<option value=$Man_id>". $Man_name . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>


<form action="managerfilter.php" method="POST">
<select name="Man_age">

<?php
$sql_command = "SELECT DISTINCT Man_age FROM Manager";

$myresult = mysqli_query($db, $sql_command);

    while($rows = mysqli_fetch_assoc($myresult))
    {
        $Man_age = $rows['Man_age'];
        echo "<option value=$Man_age>". $Man_age . "</option>";
    }
?>

</select>
<button>FILTER</button>
</form>
