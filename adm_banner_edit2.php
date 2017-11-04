<?php
    
if (isset($_POST['upload']))
{
        
        $id=$_GET['id'];
        $description=$_POST['description'];
        $target = "banner/".basename($_FILES['image']['name']);

        include 'config.php';
        $image = $_FILES['image']['name'];


    if($image==="")
    {
        $sql = "UPDATE banner SET description='$description' WHERE id='$id'";
        mysqli_query($conn , $sql);
        header('Location:adm_banner.php');
   
    }

    else
    {    


        $sql2="SELECT * FROM banner WHERE id='$id'";
        $result2=mysqli_query($conn,$sql2);
        $row2=mysqli_fetch_assoc($result2);

        $filename="/var/www/html/project/traveltill30/banner/".$row2['image'];
        unlink($filename);

        $sql = "UPDATE banner SET image='$image',description='$description' WHERE id='$id'";
        mysqli_query($conn , $sql);
        
        if (@move_uploaded_file($_FILES['image']['tmp_name'] , $target))
        {
            echo "uploaded";
            header('Location:adm_banner.php');
        }
        else
        {
            echo "error ".$conn->error;   
        }
    }    


}

?>
