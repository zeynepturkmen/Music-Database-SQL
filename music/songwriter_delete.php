<?php
include "config.php";

if(!empty($_POST['ids']))
{
    $Sngw_id = $_POST['ids'];
    $sql_statement = "DELETE FROM Song_writer WHERE Sngw_id = $Sngw_id";
    $result = mysqli_query($db, $sql_statement);
    if ($result = 1)
    {
        echo "Successfully deleted !";
    }
}
?>
