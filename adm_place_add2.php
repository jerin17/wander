<?php
    
    if (isset($_POST['upload']))
    {
        $target = "place/".basename($_FILES['image']['name']);
        
        include 'config.php';

        $image = $_FILES['image']['name'];
		@$c_id=$_GET['c_id'];
		$p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
		$p_description = mysqli_real_escape_string($conn, $_POST['p_description']);
		$p_address = mysqli_real_escape_string($conn, $_POST['p_address']);
		$p_height = mysqli_real_escape_string($conn, $_POST['p_height']);
		$p_fact = mysqli_real_escape_string($conn, $_POST['p_fact']);

        if($p_fact=="")
        {
            $p_fact="N/A";
        }

        if($p_height=="")
        {
            $p_height="N/A";
        }
    


        $sql = "INSERT INTO place (c_id,p_name,p_description,p_address,p_height,p_fact,p_image) 
        		VALUES ('$c_id','$p_name','$p_description','$p_address','$p_height','$p_fact','$image')";
        // mysqli_query($conn , $sql); //insert images into image table.

        if ($conn->query($sql) === TRUE) {
			    echo "successfully added";
			} else {
			    echo "Error updating record: " . $conn->error;
			}


        //now lets move data to folder images.
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
?>
