<?php
    
    if (isset($_POST['upload']))
    {
        $target = "banner/".basename($_FILES['image']['name']);
        
        include 'config.php';
        $image = $_FILES['image']['name'];
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $sql = "INSERT INTO banner (image,description) VALUES ('$image','$description')";
        mysqli_query($conn , $sql); //insert images into image table.
        
        //now lets move data to folder images.
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
?>
