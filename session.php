<?php 
	session_start();
	if(!isset($_SESSION['username']))
	{
	 header('location: login.php');
	?>
		<div class="col-md-12 col-sm-6 alert-danger alert-dismissable" style="height:30px; text-align:center;padding-top:5px;"> <?php echo $msg; ?> </div>

		<?php
	die();
	} 
 	
 	else 
 		{$username = $_SESSION['username'];}      
?>

