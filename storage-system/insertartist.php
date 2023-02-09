<?php 

include "config.php"; 

if (!empty($_POST['ar_stagename'])){
    $ar_stagename = $_POST['ar_stagename'];
    $ar_date_created = $_POST['ar_date_created'];
    $ar_type = $_POST['ar_type'];
    $sql_statement = "INSERT INTO ARTIST(ar_stagename, ar_date_created, ar_type) VALUES ('$ar_stagename', '$ar_date_created', '$ar_type')";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the artist stagename!";
}
?>
