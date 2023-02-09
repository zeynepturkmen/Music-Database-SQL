<?php
include "config.php";

if(!empty($_POST['ids']))
{
    $ar_id = $_POST['ids'];
    $sql_statement = "DELETE FROM ARTIST WHERE ar_id = $ar_id";
    $result = mysqli_query($db, $sql_statement);
    if ($result = 1)
    {
        echo "Successfully deleted !";
    }
}
?>
