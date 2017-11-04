<?php  

include 'config.php';
$r_id=$_GET['r_id'];

$sql2="DELETE FROM review WHERE r_id='$r_id'";

if ($conn->query($sql2) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

 	header('Location: adm_review.php');


?>