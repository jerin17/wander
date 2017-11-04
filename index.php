<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <LINK rel="SHORTCUT ICON" href="assets/img/logo.jpg">
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
                    <li><a href="#places">PLACES</a></li>
                    <li><a href="places.php?c_id=<?php echo 1;?>">DELHI</a></li>
                    <li><a href="places.php?c_id=<?php echo 2;?>">RAJASTHAN</a></li>
                    <li><a href="places.php?c_id=<?php echo 3;?>">KERALA</a></li>
                     <li><a href="#about">ABOUT</a></li>
                    <li><a href="#contact">CONTACT</a></li>
               
<?php 
session_start();
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
    </div>
     <!--END NAV SECTION -->
    
    <!--HOME SECTION-->
     
 <div id="home-sec">   
    <div class="container"  >
        <div class="row text-center">
            <div class="col-md-12" >
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                                <?php
                                include 'config.php';
                                $count=0;
                                $sql="SELECT * FROM banner";

                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                ?>
                     
                        <div class="<?php if($count <= 0){ echo "item active";} else {echo "item";}?>">
            
                            <img src="banner/<?php echo $row['image'];?>" alt="india_gate" style="position:relative;width:100%;margin:auto;display:block;height:475px;" />
                            <div class="carousel-caption">
                                <h4 class="back-light">
                            <i><?php echo $row['description']; ?></i></h4>
                            </div>
                        </div>
                        <?php   $count++; }} ?>  
                    </div>

                    <ol class="carousel-indicators">
                         <?php
                                include 'config.php';
                                $count=0;
                                $sql="SELECT * FROM banner";

                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                ?>
                     
                        <li data-target="#carousel-example" data-slide-to="<?php echo $count; ?>" class= <?php if($count <= 0){ echo "active";}?>></li>
                        <?php   $count++; }} ?>  
                                            
                    </ol>

                    

        </div>
    </div>
</div>
    
    
    <section  >
        <div class="container">
            
           
    <section  id="places">

         <div class="row text-center">
        
<?php         
include 'config.php';
$sql="SELECT * FROM city";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

?>
                <?php $c_id=$row['c_id'] ?>             
             <div class="col-md-4 col-sm-4" style="margin-bottom: 30px;">
                <div style="max-height: 500px;overflow: hidden;" style="background: red;">
                <a href="places.php?c_id=<?php echo $c_id;?>"><img src="city/<?php echo $row['c_image'];?>" height="250px" width="320px"></a>
                <a href="places.php?c_id=<?php echo $c_id;?>"><h1><?php echo $row['c_name']; ?></h1></a>
                <p style="color: black;"><?php echo $row['c_description']; ?></p>
                </div>
                <a style="float: right; color: blue;" href="places.php?c_id=<?php echo $c_id;?>">...Read more</a>
             </div>
    <?php }} ?>     
        </div>
          <br>

        
     <!--END HOME SECTION-->


    
        <div class="row text-center">
             <span class="line-sep ">
        ----------X------------X----------X-------------
    </span>
        </div>
    
 <!--PROJECTS SECTION-->
<!-----------
      <section  id="projects">
           <div class="container">
<div class="row text-center">
                <div class="text-center">
                    <div class="col-md-4 col-sm-4 alert-info">
                            <h4>Our Projects</h4>
                       <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                             
                             Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            
                        
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                     <h4>The Grand Hotel</h4>
                       <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                            </p>  
                                &nbsp;&nbsp;  <img class="img-responsive" src="assets/img/4.jpg" alt="">
                           <div class="project-cls">
                            <a href="#"> See Project <i class="fa fa-arrow-right"></i>  </a>  
                           </div>
                    </div>
                   
                   <div class="col-md-4 col-sm-4 text-center">
                     <h4>The Royal Palace</h4>
                       <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                            </p>  
                                &nbsp;&nbsp;  <img class="img-responsive" src="assets/img/4.jpg" alt="">
                           <div class="project-cls">
                            <a href="#"> See Project <i class="fa fa-arrow-right"></i>  </a>  
                           </div>
                    </div>
                </div>
                  </div>
               </div>
      </section>

    <!--END PROJECTS SECTION-->
   <!----- <div class="container">
        <div class="row text-center">
             <span class="line-sep ">
        ----------X------------X----------X-------------
    </span>
        </div>
    </div>
    <!--ABOUT SECTION-->
    <section  id="about">
    
    <div class="col-md-4 col-sm-4 alert-success" style="position:relative; line-width:100px;text-align:centre;width:100%;">
                            <h4 style="text-align:center;">Who We Are ?</h4>
                       
<?php                         
include 'config.php';
$sql="SELECT * FROM about_us";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>

    <p><?php echo $row['para'];?></p>                        
<?php }} ?>
    </div>
    
           <div class="container">
<div class="row text-center">
    
                <div class="text-center"  style="color: black;">
                   
                    <div class="col-md-4 col-sm-4 ">
                        <br><img class="img-circle" src="assets/img/contact3.jpg" alt="josu jacob" style="position:relative; height:150px;">
                           <h3><strong>Josu Jacob</strong> </h3>
                       <p>
                               Jamia Hamdard University.
                               fourth Year (cse).
                            </p>
                            
                    </div>
                   
                    <div class="col-md-4 col-sm-4 ">
                        <br><img class="img-circle" src="assets/img/contact2.jpg" alt="jerin thomas"  style="position:relative; height:150px;">
                           <h3><strong>Jerin Thomas</strong> </h3>
                           <p>
                               Jamia Hamdard University.
                               fourth Year (cse).
                            </p>
                          
                    </div>
                    
                     <div class="col-md-4 col-sm-4 ">
                        <br><img class="img-circle" src="assets/img/contact1.jpg" alt="safin chowdhury"  style="position:relative; height:150px;">
                           <h3><strong>Safin Chowdhury</strong> </h3>
                           <p>
                                Jamia Hamdard University.
                                fourth Year (cse).
                            </p>
                          
                    </div>
                    
                    
                     
                </div>
                  </div>
               </div>
      </section>
    <!--END ABOUT SECTION-->
    <div class="container">
        <div class="row text-center">
             <span class="line-sep ">
        ----------X------------X----------X-------------
    </span>
        </div>
    </div>
    <!--CONTACT SECTION-->
    <section  id="contact">
           <div class="container">
               <div class="row text-center">
                <div class="text-center">
                 <div class="col-md-6 col-sm-6 alert-success" style="background:#232b38;border-right:6px solid #E8E8E8">
                
                     <h4 style="color:#2ecc71;">SPEAK TO US</h4>
           <form method="POST" action="message.php">
                                        <div class="row">

                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" required="required" placeholder="Name" style="color: white">
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" required="required" placeholder="Email address" style="color: white">
                                                </div>
                                            </div>
                                        </div>
                    <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <textarea name="msg" id="message" required="required" class="form-control" rows="7" placeholder="Message" style="color: white"></textarea>
                                </div>
                                <div class="form-group">
<!--                                    <button type="submit" class="btn btn-danger">Submit Request</button>-->
                                    <input type="submit" class="btn btn-success" value="Submit Request" >
                                </div>
                            </div>
                        
                     </div>

             </form>    
    
                    </div>
                     
                    <div>
                                     <div class="col-md-6 col-sm-6 alert-success" style="padding-bottom:7px;" >
                            <h4>Location</h4>
                        <div class="row">
                            <div class="col-md-6 ">
                                    <strong> Contact us:</strong>
                            </div>
                            
                            <div>
                                <br>
                                <address>
                                B-6/25,<br> 
                                sector-5 rohini,<br>
                                New Delhi<br>
                                ph: 9990480663    
                                </address>
                            </div>
                                         
                        </div>
                        <hr>                 
                        <div class="row">
                            <div class="col-md-6 ">
                                    <strong> or find us at:</strong>
                            </div>
                                <br>
                                <address>
                                <i>Jamia Hamdard University</i><br> 
                                <i>Jamia nagar,</i><br>
                                <i>New Delhi</i>
                                </address>
                                <br>
                                         
                        </div>
                        </div>
                            
                            
                    </div>

                    </div>
                </div>
                  </div>
                 <!--END CONTACT SECTION-->
  
    <!--FOOTER SECTION -->
    <div id="footer">
        2017 www.wanderlust.com | All Right Reserved  
    </div>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    </body>
</html>