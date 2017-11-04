<?php  

include 'config.php';
$id=$_GET['id'];

$sql2="DELETE FROM contact WHERE id='$id'";

if ($conn->query($sql2) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
// sleep(2);

header('Location: adm_msg.php');


?>