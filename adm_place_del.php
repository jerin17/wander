<?php  

include 'config.php';
$p_id=$_GET['p_id'];

$sql2="SELECT * FROM place WHERE p_id='$p_id'";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);

$filename="/var/www/html/project/travel/place/".$row2['p_image'];
unlink($filename);


$sql="DELETE FROM place WHERE p_id='$p_id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
}

else {
    echo "Error updating record: " . $conn->error;
}

 	header('Location: adm_place2.php');
 	
?>
