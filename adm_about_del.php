<?php  

include 'config.php';
$id=$_GET['id'];

$sql="DELETE FROM about_us WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
// sleep(2);

header('Location: adm_about.php');


?>