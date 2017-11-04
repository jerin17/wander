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
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#places">DELHI</a></li>
                    <li><a href="#places">RAJASTHAN</a></li>
                    <li><a href="#places">KERALA</a></li>
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
  <li><a class="link" href="adm_control.php">SETTING</a></li>
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
             <div class="col-md-4 col-sm-4  icon-big" >
                 <a href="delhi.php"><img src="assets/img/del.jpg" height="250px" width="320px"></a>
                 <a href="delhi.php"><h1>DELHI </h1></a>
                    <p>New Delhi is the capital of India and one of Delhi city's 11 districts. Although colloquially Delhi and New Delhi are used interchangeably to refer to the National Capital Territory of Delhi, these are two distinct entities, with New Delhi forming a small part of Delhi.The National Capital Region is a much larger entity comprising the entire Natio....<a href="delhi.php">read more</a></p>
             </div>
             
             
             <div class="col-md-4 col-sm-4  icon-big" >
                <a href="rajasthan.php"><img src="assets/img/raj.jpg" height="250px" width="320px"></a>
                <a href="rajasthan.php"><h1>RAJASTHAN </h1></a>
                <p>Rajasthan is one of the most popular tourist destinations in India, for both domestic and international tourists. Rajasthan attracts tourists for its historical forts, palaces, art and culture. Every third foreign tourist visiting India also travels to Rajasthan as it is part of the Golden Triangle for tourists visiting India.Endowed with natural beauty a....<a href="rajasthan.php">read more</a></p>
             </div>
            
             
             <div class="col-md-4 col-sm-4  icon-big" >
                <a href="kerala.php"><img src="assets/img/ker.jpg" height="250px" width="320px"></a>
                <a href="kerala.php"><h1>KERALA </h1></a>
                <p>Kerala, a state situated on the tropical Malabar Coast of southwestern India, is one of the most popular tourist destinations in the country. Named as one of the ten paradises of the world by National Geographic Traveler,Kerala is famous especially for its ecotourism initiatives and beautiful backwaters.Its unique culture and traditions, coupled with its vari....<a href="kerala.php">read more</a>    
             </div>
         
        </div>
          

        
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
                       
    <p>Our travel guides, which are curated by Travel + Leisure editors and a network of local correspondents, highlight the best hotels, restaurants, shops, bars, and things to do in the world's most exciting destinations. Browse our in-depth travel information for great ideas and insider finds, plus smart travel tips that will have you feeling like a local in no time.    </p>  
    <p>These travel guides aim to give you the best and most up to date information on the major travel destinations around the world. Here you will find budget tips, money saving advice, tips on places to stay, things to see and do, and where to eat. It doesn’t matter what type of vacation you are going on – cruise, backpacking trip, island getaway, 2 week holiday, round the world trip, or a family vacation. These destination guides will give you all the information you need for your trip so you can travel better, longer, cheaper.We update this section twice a year to keep the content fresh!</p>
    </div>
    
           <div class="container">
<div class="row text-center">
    
                <div class="text-center">
                   
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