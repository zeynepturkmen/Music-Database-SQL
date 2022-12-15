<?php
include "config.php";

if(!empty($_POST['ids']))
{
    $result = $_POST['ids'];
    $result = explode(',', $result);
    $id = (int) $result[0];
    $sql_statement = "DELETE FROM Writes WHERE song_id = $id AND sngw_id = '$result[1]'";
    $result = mysqli_query($db, $sql_statement);
    if ($result = 1)
    {
        echo "Successfully deleted !";
    }
}
?>
