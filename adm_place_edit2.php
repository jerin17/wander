<?php
    
if (isset($_POST['edit']))
{

include 'config.php';
$p_id=$_GET['p_id'];

$p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
$p_description = mysqli_real_escape_string($conn, $_POST['p_description']);
$p_address = mysqli_real_escape_string($conn, $_POST['p_address']);
$p_height = mysqli_real_escape_string($conn, $_POST['p_height']);
$p_fact = mysqli_real_escape_string($conn, $_POST['p_fact']);

$target = "place/".basename($_FILES['image']['name']);
$image = $_FILES['image']['name'];
        

    if($image==="")
    {
		$sql = "UPDATE place SET p_name='$p_name', p_description='$p_description', p_address='$p_address', p_height= '$p_height', p_fact='$p_fact' WHERE p_id='$p_id'";
        mysqli_query($conn , $sql);
        header('Location:adm_place2.php');
   
    }

    else
    {    


        $sql2="SELECT * FROM banner WHERE id='$id'";
        $result2=mysqli_query($conn,$sql2);
        $row2=mysqli_fetch_assoc($result2);

        $filename="/var/www/html/project/travel/banner/".$row2['image'];
        unlink($filename);

		$sql = "UPDATE place SET p_name='$p_name', p_description='$p_description', p_address='$p_address', p_height= '$p_height', p_fact='$p_fact',p_image='$image' WHERE p_id='$p_id'";
        mysqli_query($conn , $sql);
        
        if (@move_uploaded_file($_FILES['image']['tmp_name'] , $target))
        {
            echo "uploaded";
            header('Location:adm_place2.php');
        }
        else
        {
            echo "error ".$conn->error;   
        }
    }    


}

?>