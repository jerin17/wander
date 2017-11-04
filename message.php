<?php
include 'config.php';

$name=$_POST['name'];
$email=$_POST['email'];
$msg = mysqli_real_escape_string($conn, $_POST['msg']);


$sql = "INSERT INTO contact (name,email,msg)
VALUES ('$name','$email','$msg')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 header('Location: index.php');
?>