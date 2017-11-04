<?php 
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <LINK rel="SHORTCUT ICON"
       href="assets/img/logo.jpg"> 
    <title>WANDERLUST</title>
        
    <link href="adm_control.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

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
                    <li><a>Welcome, <?php echo $username ?></a></li>
                     <li><a href="logout.php" class="alert-danger" style="background:#E74C3C;border-radius:5px; color:white">LOGOUT</a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
    
    

<div id="mySidenav">
  <a href="adm_msg.php">Messages</a>
  <a href="adm_banner.php">Banner</a>
  <a href="adm_about.php">About Us</a>  
  <a href="adm_city.php">Cities</a>  
  <a href="adm_place.php">Places</a>  
  <a href="adm_review.php">Reviews</a>  
</div>
<hr><br><br>


<div class="container">
  <div class="row text-center">
      <div class="col-md-offset-2" style="background: #2c3e50 ; color: white; border-radius: 10px" >
          <h1 style="color:#2ecc71;">ADD PARAGRAPH</h1><br>
          <div class="row text-center">
        <form action="adm_about_add2.php" method="POST">  
               <textarea rows="3" cols="80" name="para" style="color: black;margin-bottom: 7px;" required></textarea>
          </div>
          <br><input style="background:#2ecc71;color: white;border-radius: 5px;" type="submit" value="Add this paragraph" name="edit"><hr>
        </form>        
      </div>
  </div>
</div>


  
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap.min.js"></script>  
    <script src="assets/js/custom.js"></script>
    </body>
</html>