<?php  

include 'config.php';
$id=$_GET['id'];


$sql2="SELECT * FROM banner WHERE id='$id'";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);

$filename="/var/www/html/project/travel/banner/".$row2['image'];
unlink($filename);


$sql="DELETE FROM banner WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
}

else {
    echo "Error updating record: " . $conn->error;
}

header('Location: adm_banner.php');


?>
