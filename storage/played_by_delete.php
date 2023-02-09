<?php
include "config.php";

if(!empty($_POST['ids']))
{
    $result = $_POST['ids'];
    $result = explode(',', $result);
    $i_id = (int) $result[0];
    $sql_statement = "DELETE FROM Played_by WHERE i_id = $i_id AND song_id = '$result[1]'";
    $result = mysqli_query($db, $sql_statement);
    if ($result = 1)
    {
        echo "Successfully deleted !";
    }
}
?>
