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
        
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
      <link href="adm_control.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="adm_banner.css">
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
        <h1 style="color:#2ecc71;"><?php echo "ADD PLACE"; ?></h1>
<a href="adm_place2.php"><img src="x.png" width="40px" height="40px" style="border-radius: 5px;float: right;position: relative;top: -40px; left: -5px;"></a>

          <span style="color: red;float: left; margin-left: 20px;">* required to fill the fields</span><br>
          <div class="container">
            <div class="col-md-10 col-sm-4" style="background: #34495e ; color: white; border-radius: 10px; margin-bottom: 10px; text-align: left; padding-top: 10px; padding-bottom: 10px;">
              <div style=" margin-bottom: 20px; padding:5px;" class="col-md-12">
                
                <fieldset>
                <legend style="color: white;">Add Place</legend>

                <?php
                include 'config.php';
                @$c_id=$_GET['c_id'];
                $sql="SELECT * FROM city WHERE c_id='$c_id'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);
                ?>


              <form action="adm_place_add2.php?c_id=<?php echo $c_id?>" method="post" enctype="multipart/form-data">
                  City : <br>
                  <input type="text" name="c_name" class="col-md-12" style="color: black;padding: 7px;padding-left: 13px;border-radius: 5px;margin-bottom: 7px; text-align: center; font-size: 18px;" value="<?php echo $row['c_name']; ?>" disabled><br>

                  <hr><span style="color: red;">*</span>Add a new Place : <br>
                  <input type="text" name="p_name" class="col-md-12" style="color: black;padding: 7px;padding-left: 13px;border-radius: 5px;margin-bottom: 7px;text-transform:uppercase" placeholder="Enter place's name" required><br>

                  <hr><span style="color: red;">*</span>Specify a small description :<br>
                  <textarea class="col-md-12" rows="3" name="p_description" placeholder="Enter description" style="color: black;margin-bottom: 7px;border-radius: 5px;" required></textarea><br>

                  <hr><span style="color: red;">*</span>Add an address: <br>
                  <input type="text" name="p_address" class="col-md-12 col-sm-6" style="color: black;padding: 7px;padding-left: 13px;border-radius: 5px;margin-bottom: 7px;" placeholder="Enter address"><br>

                  <hr>Height (optional) :<br>
                  <input type="number" min="0" name="p_height" class="col-md-12" style="color: black;padding: 7px;padding-left: 13px;border-radius: 5px;margin-bottom: 7px;" placeholder="Enter height (in meters) "><br>

                  <hr>FACT (optional) :<br>
                  <input type="text" name="p_fact" class="col-md-12" style="color: black;padding: 7px;padding-left: 13px;border-radius: 5px;margin-bottom: 7px;" placeholder="Enter fact"><br>


                  <hr><span style="color: red;">*</span>Upload a thumbnail picture :
                  <input type="hidden" name="MAX_FILE_SIZE" value="4100000">                  
                  <input type="file" name="image" required/><br>
                  <input style="background:#2ecc71;color: white;border-radius: 5px; width: 100px" type="submit" value="Add Place" name="upload"><br>

              </form>
                </fieldset>
              </div>  
 
<span class="line-sep row text-center">
   -------------X-------------X-------------X-------------X-------------X-------------X-------------X-------------X-------------X-------------X-------------X-------------X-------------X-------------     
</span>
            </div>
           </div> 

      </div>
  </div>
</div>


  
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap.min.js"></script>  
    <script src="assets/js/custom.js"></script>
    </body>
</html>

    