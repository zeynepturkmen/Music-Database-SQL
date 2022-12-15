<?php
include "config.php";

if(!empty($_POST['ids']))
{
    $Man_id = $_POST['ids'];
    $sql_statement = "DELETE FROM Manager WHERE Man_id = $Man_id";
    $result = mysqli_query($db, $sql_statement);
    if ($result = 1)
    {
        echo "Successfully deleted !";
    }
}
?>
