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
      
    <form class="form-signin" method="POST" action="login2.php">
        <h2 class="form-signin-heading">LOGIN</h2><br><br>
          
        <input type="text" name="username" size="30" class="form-control" placeholder="Username" required><br>
        
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required><br><br>
        
        <input class="btn btn-lg btn-primary btn-block" class="col-md-6 col-sm-6 alert-success" value="Login" type="submit"><br>
    
    </form>
</div>

</body>
</html>