<?php 

include "config.php"; 

if (!empty($_POST['write_year'])){
    $write_year = $_POST['write_year'];
    $sngw_id = $_POST['sngw_id'];
    $song_id = $_POST['song_id'];
    $sql_statement = "INSERT INTO Writes(song_id, sngw_id, write_year) VALUES ($song_id, '$sngw_id', $write_year)";
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
