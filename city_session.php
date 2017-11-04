<?php
	
	session_start();
	$c_name = $_POST['c_name'];

	include 'config.php';
	$sql="SELECT * FROM city WHERE c_name='$c_name'";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	$c_id=$row['c_id'];
	$_SESSION['c_id'] = $c_id;


	header('Location:adm_place2.php')
?>