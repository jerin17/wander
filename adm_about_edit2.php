<?php

include 'config.php';
$id=$_GET['id'];
$para = mysqli_real_escape_string($conn, $_POST['para']);

$sql = "UPDATE about_us SET para='$para' WHERE about_us.id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
header('Location:adm_about.php');
?>w