<?php 

include "config.php"; 

if (!empty($_POST['song_name'])){
    $song_name = $_POST['song_name'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $language = $_POST['language'];
    $duration = $_POST['duration'];
    $sql_statement = "INSERT INTO Songs(song_name, year, genre, language, duration) VALUES ('$song_name', $year, '$genre', '$language', $duration)";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the song name!";
}
?>
