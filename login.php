<?php

if (isset($_POST['login']))
{
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

}
?>

<?php
include 'nav.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <br><br>
<div class="container" style="background:white; max-width: 400px;max-height: 600px;">
      
    <form class="form-signin" method="POST" action="login.php">
        <h2 class="form-signin-heading">LOGIN</h2><br><br>
          
        <input type="text" name="username" size="30" class="form-control" placeholder="Username" required><br>
        
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required><br><br>
        
        <input class="btn btn-lg btn-primary btn-block" class="col-md-6 col-sm-6 alert-success" value="Login" type="submit" name="login"><br>
    
    </form>
</div>

</body>
</html>