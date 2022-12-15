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
include "song_table.php";
?>


</body>

</form>
</html>
<form action="insertsongs.php" method="POST">
Song Name: <input type="text" id="song_name" name="song_name">
<div style="width: 100%; display: table;">
        <div style="display: table-row; height: 100px;">
            <div style="width: 50%; display: table-cell; background: #D9F2F4;">
                Release Year: <input type="text" id="year" name="year">
                Genre: <input type="text" id="genre" name="genre">
            </div>
            <div style="display: table-cell; background: #D9F2F4;">
                Language: <input type="text" id="language" name="language">
                Duration: <input type="text" id="duration" name="duration">
            </div>
        </div>
    </div>
<input type="submit" value="Submit">

</form>
<form action="songsfilter.php" method="POST" id="form2">
<select name="genres">

<?php
$sql_command = "SELECT DISTINCT genre FROM Songs";

$myresult = mysqli_query($db, $sql_command);

    while($rows = mysqli_fetch_assoc($myresult))
    {
        $genre = $rows['genre'];
        echo "<option value=$genre>". $genre . "</option>";
    }
?>

</select>
<button>FILTER</button>
</form>



<form action="songs_delete.php" method="POST" id="form3">
<select name="ids">

<?php

$sql_command = "SELECT song_id, song_name FROM Songs";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $song_id = $id_rows['song_id'];
        $song_name = $id_rows['song_name'];
        echo "<option value=$song_id>". $song_name . "</option>";
    }

?>
</select>
<button>DELETE</button>
</form>


