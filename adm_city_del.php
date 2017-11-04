<?php  

include 'config.php';
$c_id=$_GET['c_id'];


$sql2="SELECT * FROM city WHERE c_id='$c_id'";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);

$filename="/var/www/html/project/travel/city/".$row2['c_image'];
unlink($filename);


$sql="DELETE FROM city WHERE c_id='$c_id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
}

else {
    echo "Error updating record: " . $conn->error;
}

header('Location: adm_city.php');


?>
