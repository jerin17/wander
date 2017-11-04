<?php  

include 'config.php';
$i_id=$_GET['i_id'];

$sql2="DELETE FROM multi_images WHERE i_id='$i_id'";

if ($conn->query($sql2) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
// sleep(2);

            header('Location:adm_place2.php');


?>