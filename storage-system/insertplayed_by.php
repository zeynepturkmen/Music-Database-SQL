<?php 

include "config.php"; 

if (!empty($_POST['i_id'])){
    $i_id = $_POST['i_id'];
    $song_id = $_POST['song_id'];
    $sql_statement = "INSERT INTO Played_by(i_id, song_id) VALUES ($i_id, $song_id)";
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
