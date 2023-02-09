<?php
include "config.php";

if(!empty($_POST['ids']))
{
    $alb_id = $_POST['ids'];
    $sql_statement = "DELETE FROM album WHERE alb_id = $alb_id";
    $result = mysqli_query($db, $sql_statement);
    if ($result = 1)
    {
        echo "Successfully deleted !";
    }
}
?>
