<?php  

$r_name=$_POST['r_name'];
$r_email=$_POST['r_email'];
$r_review=$_POST['r_review'];
$p_id=$_GET['p_id'];

$target = "rev/".basename($_FILES['image']['name']);
$image = $_FILES['image']['name'];

if ($image==="") {
  $image="user.jpg";
}



include 'config.php';

   $sql = "INSERT INTO review (r_name,r_email,r_review,r_image,p_id) 
        		VALUES ('$r_name','$r_email','$r_review','$image',$p_id)";
   mysqli_query($conn , $sql);



        //now lets move data to folder images.
        if (@move_uploaded_file($_FILES['image']['tmp_name'] , $target))
        {
            echo "uploaded";
              header('Location:places2.php');
        }
        else
        {
            echo "error ".$conn->error;   
            header('Location:places2.php');

        }



?>