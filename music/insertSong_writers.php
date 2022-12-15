<?php 

include "config.php"; 

if (!empty($_POST['Sngw_name'])){
    $Sngw_name = $_POST['Sngw_name'];
    $Sngw_age = $_POST['Sngw_age'];
    $sql_statement = "INSERT INTO Song_writer(Sngw_name, Sngw_age) VALUES ('$Sngw_name', $Sngw_age)";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the song writer name!";
}
?>
