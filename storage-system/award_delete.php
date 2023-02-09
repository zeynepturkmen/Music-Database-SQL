<?php
include "config.php";

if(!empty($_POST['ids']))
{
    $aw_id = $_POST['ids'];
    $sql_statement = "DELETE FROM Award WHERE aw_id = $aw_id";
    $result = mysqli_query($db, $sql_statement);
    if ($result = 1)
    {
        echo "Successfully deleted !";
    }
}
?>
