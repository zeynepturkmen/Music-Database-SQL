<?php 

include "config.php"; 

if (!empty($_POST['i_name'])){
    $i_name = $_POST['i_name'];
    $i_type = $_POST['i_type'];
    $sql_statement = "INSERT INTO Instruments(i_name, i_type) VALUES ('$i_name', '$i_type')";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the instrument name!";
}
?>
