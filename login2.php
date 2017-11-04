<?php
session_start();
require_once('config.php');
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM `login` WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
	
	if($count == 1){

		$_SESSION['username'] = $username;
		header('location: adm_control.php');
        
    }
    
    else{
        include 'login.php';
        $msg = "Invalid Username/Password";

?>
<div class="col-md-12 col-sm-6 alert-danger alert-dismissable" style="height:30px; text-align:center;padding-top:5px;"> <?php echo $msg; ?> </div>
<?php		

}
if(isset($_SESSION['username'])){
	$smsg = "User already logged in";
}

?>