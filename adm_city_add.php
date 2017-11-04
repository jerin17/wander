<?php
    
        include 'config.php';

        $target = "city/".basename($_FILES['image']['name']);
        $conn = mysqli_connect("localhost" , "root" , "seoul" , "travel");
        $image = $_FILES['image']['name'];
        $c_name=$_POST['c_name'];
        $c_description = mysqli_real_escape_string($conn, $_POST['c_description']);

        $sql = "INSERT INTO city (c_name,c_description,c_image) VALUES ('$c_name','$c_description','$image')";
        mysqli_query($conn , $sql); //insert images into image table.
        
        //now lets move data to folder images.
        if (move_uploaded_file($_FILES['image']['tmp_name'] , $target))
        {
            echo "uploaded";
            header('Location:adm_city.php');
        }
        else
        {
            echo "error ".$conn->error;   
        }
?>
