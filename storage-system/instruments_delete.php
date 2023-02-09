<?php
include "config.php";

if(!empty($_POST['ids']))
{
    $i_id = $_POST['ids'];
    $sql_statement = "DELETE FROM Instruments WHERE i_id = $i_id";
    $result = mysqli_query($db, $sql_statement);
    if ($result = 1)
    {
        echo "Successfully deleted !";
    }
}
?>
