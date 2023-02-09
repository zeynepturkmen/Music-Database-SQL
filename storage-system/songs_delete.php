<?php
include "config.php";

if(!empty($_POST['ids']))
{
    $song_id = $_POST['ids'];
    $sql_statement = "DELETE FROM Songs WHERE song_id = $song_id";
    $result = mysqli_query($db, $sql_statement);
    if ($result = 1)
    {
        echo "Successfully deleted !";
    }
}
?>
