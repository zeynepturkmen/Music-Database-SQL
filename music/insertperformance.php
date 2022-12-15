<?php 

include "config.php"; 

if (!empty($_POST['year_performed'])){
    $year_performed = $_POST['year_performed'];
    $ar_id = $_POST['ar_id'];
    $song_id = $_POST['song_id'];
    $sql_statement = "INSERT INTO Performs(song_id, ar_id, year_performed) VALUES ($song_id, $ar_id, $year_performed)";
    $result = mysqli_query($db, $sql_statement);
    if($result == 1)
        echo "Item added.";
    else
        echo "You are trying to add a duplicate !";
} 
else 
{
    echo "You did not enter the year!";
}
?>
