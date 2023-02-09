<?php 

include "config.php"; 

if (!empty($_POST['Man_name'])){
    $Man_name = $_POST['Man_name'];
    $Man_age = $_POST['Man_age'];
    $sql_statement = "INSERT INTO Manager(Man_name, Man_age) VALUES ('$Man_name', $Man_age)";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the manager name!";
}
?>
