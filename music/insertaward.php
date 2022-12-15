<?php 

include "config.php"; 

if (!empty($_POST['aw_title'])){
    $aw_title = $_POST['aw_title'];
    $aw_constitution = $_POST['aw_constitution'];
    $sql_statement = "INSERT INTO Award(aw_title, aw_constitution) VALUES ('$aw_title', '$aw_constitution')";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the award name!";
}
?>
