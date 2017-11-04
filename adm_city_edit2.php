<?php
    
if (isset($_POST['edit']))
{
        
include 'config.php';
$c_id=$_GET['c_id'];
$c_name = $_POST['c_name'];
$c_description = mysqli_real_escape_string($conn, $_POST['c_description']);

        $target = "city/".basename($_FILES['image']['name']);
        $image = $_FILES['image']['name'];


    if($image==="")
    {
    	echo "if";
		$sql = "UPDATE city SET c_name='$c_name', c_description='$c_description' WHERE c_id='$c_id'";
        mysqli_query($conn , $sql);
        header('Location:adm_city.php');
   
    }

    else
    {    

    	echo "else";
        $sql2="SELECT * FROM city WHERE c_id='$c_id'";
        $result2=mysqli_query($conn,$sql2);
        $row2=mysqli_fetch_assoc($result2);

        $filename="/var/www/html/project/travel/city/".$row2['c_image'];
        unlink($filename);

		
		$sql = "UPDATE city SET c_name='$c_name', c_description='$c_description', c_image='$image' WHERE c_id='$c_id'";
        mysqli_query($conn , $sql);
        
        if (@move_uploaded_file($_FILES['image']['tmp_name'] , $target))
        {
            echo "uploaded";
            header('Location:adm_city.php');
        }
        else
        {
            echo "error ".$conn->error;   
        }
    }    


}
?>
