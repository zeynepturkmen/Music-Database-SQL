<?php 

include "config.php"; 

if (!empty($_POST['alb_name'])){
    $alb_name = $_POST['alb_name'];
    $alb_year = $_POST['alb_year'];
    $Number_of_songs = $_POST['Number_of_songs'];
    $sql_statement = "INSERT INTO album(alb_name, alb_year, Number_of_songs) VALUES ('$alb_name', $alb_year,$Number_of_songs)";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the album name!";
}
?>
