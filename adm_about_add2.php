<?php

include 'config.php';
$para = mysqli_real_escape_string($conn, $_POST['para']);


$sql = "INSERT INTO about_us (para) VALUES ('$para')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
header('Location:adm_about.php');

?>