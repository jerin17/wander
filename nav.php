<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <LINK rel="SHORTCUT ICON"
       href="assets/img/logo.jpg">
    <title>WANDERLUST</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
     <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-left" href="index.php"><img src="assets/img/logo3.png" height="50px;"></a> 
                <a class="navbar-brand" href="index.php">WANDERLUST</a>
               
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="places.php?c_id=<?php echo 1;?>">DELHI</a></li>
                    <li><a href="places.php?c_id=<?php echo 2;?>">RAJASTHAN</a></li>
                    <li><a href="places.php?c_id=<?php echo 3;?>">KERALA</a></li>
                     <li><a href="about.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
<?php 
@session_start();
if(!isset($_SESSION['username'])){
?>
  <li><a class="link" href="login.php" style="background:#2ecc71;border-radius:5px; color:white">LOGIN</a></li>
<?php
}  

else {
  $username = $_SESSION['username'];
?>
  <li><a class="link" href="adm_control.php">SETTINGS</a></li>
  <li><a class="link" href="logout.php" style="background:#E74C3C;border-radius:5px; color:white">LOGOUT</a></li>
<?php
 }      
?>
                </ul>
            </div>
           
        </div>
    </div><br><br><br><br>
     <!--END NAV SECTION -->
    
  
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap.min.js"></script>  
    <script src="assets/js/custom.js"></script>
    </body>
</html>