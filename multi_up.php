<?php
if (isset($_POST['submit'])) {
    $j = 0; 
    include 'config.php';
    $p_id=$_GET['p_id'];
    
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {

            $target = "multi_images/".basename($_FILES['file']['name'][$i]);
        
        include 'config.php';
        $image = $_FILES['file']['name'][$i];

        $sql = "INSERT INTO multi_images (p_id,image) VALUES ('$p_id','$image')";
        mysqli_query($conn , $sql); 
    
    

        //now lets move data to folder images.
        if (@move_uploaded_file($_FILES['file']['tmp_name'][$i] , $target))
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