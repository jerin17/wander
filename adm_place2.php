<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>WANDERLUST</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php 
include 'session.php';
include 'config.php';
  session_start();
  if(!isset($_SESSION['c_id']))
  {
   header('location: adm_place.php');
  die();
  } 
  
  else 
    {$c_id = $_SESSION['c_id'];}      
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
    <link href="multi_up.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <script src="jquery-3.1.1.js"></script>
    <script src="multi_up.js"></script>

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
<hr>

<div class="container">
  <div class="row text-center" >
      <div class="col-md-offset-2 col-sm-offset-4" style="background: #2c3e50 ; color: white; border-radius: 10px" >
        
        <?php  
        include 'config.php';
        $sql="SELECT * from city WHERE c_id='$c_id'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        $c_name=$row['c_name'];
        ?>

        <h1 style="color:#2ecc71;"><?php echo $c_name; ?></h1><br>
        <!-- <h1 style="color:#2ecc71;">LOCATION</h1><br> -->

<a href="adm_place_add.php?c_id=<?php echo $c_id;?>"><button style="background:#2ecc71;color: white; border-radius: 5px;float: right;margin: 10px;">ADD A NEW PLACE</button></a>

<?php 
 include("pagination/function.php");
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
      $limit = 3; //if you want to dispaly 10 records per page then you have to change here
      $startpoint = ($page * $limit) - $limit;
        $statement = "place INNER JOIN city ON city.c_id=place.c_id WHERE city.c_id=".$c_id; //you have to pass your query over here

    $res=mysqli_query($conn, "SELECT * FROM place INNER JOIN city ON city.c_id=place.c_id WHERE city.c_id=$c_id LIMIT {$startpoint} , {$limit}");



    while($row111=mysqli_fetch_array($res))
    {?>
          <div class="container">
        <div class="col-md-10" style="background: #34495e ; color: white; border-radius: 10px; margin-bottom: 10px; text-align: left; padding-top: 10px; padding-bottom: 5px;">

                <h5 style="float: left;"><?php echo "#".$row111['p_id']; ?></h5>
                <div class="row text-center">
                 <h3 style="text-transform: uppercase;"><?php echo $row111['p_name']; ?></h3>
                </div>

                <img style="float: right; margin-right: 20px;position: relative;top: 70px; left: 20px;margin-bottom: 40px;" src="place/<?php echo $row111['p_image'];?>" width='100' height='100'><br>
             
               <table style="border-collapse: collapse; color: white;">
                    <tr>
                      <th style="width: 120px;">Description   </th>
                      <td style=" padding-bottom: 10px;"><?php echo $row111['p_description']; ?></td>
                    </tr>

                    <tr>
                      <th>Address   </th>
                      <td style=" padding-bottom: 10px;"><?php echo $row111['p_address']; ?></td>
                    </tr>

                    <tr>
                      <th>Height (m)   </th>
                      <td style=" padding-bottom: 10px;"><?php echo $row111['p_height']; ?></td>
                    </tr>

                    <tr>
                      <th>Fact   </th>
                      <td><?php echo $row111['p_fact']; ?></td>
                    </tr>

                </table>           

                <br><a href="adm_place_del.php?p_id=<?php echo $row2['p_id'];?>" onclick="return confirm('Do you want to delete this record ?')"><button style="float: right; margin-top: 5px;" class="col-md-1 alert-warning">delete</button></a>
                <a href="adm_place_edit.php?p_id=<?php echo $row2['p_id'];?>"><button style="float: right;margin-top: 5px; margin-right: 4px;" class="col-md-1 alert-warning">edit</button></a><br><br>

  <hr>

  <?php 
  $p_id=$row111['p_id'];
  $sqlimg="SELECT * FROM multi_images WHERE p_id='$p_id'";
  $resultimg = $conn->query($sqlimg);
  if ($resultimg->num_rows > 0) {
      while($rowimg = $resultimg->fetch_assoc()) {
  ?>

  <img  width="100px" height="100px" src="multi_images/<?php echo $rowimg['image']; ?>">
  <a href="multi_del.php?i_id=<?php echo $rowimg['i_id'];?>" onclick="return confirm('Do you want to delete this record ?')" style="position: relative;left:-15px; top: -45px;"><img src="x.png" width="20px" height="20px"></a>
  <?php

  }}   
  else
  {
    echo "No images available";
  }

  ?>

  <hr>

  <form enctype="multipart/form-data" action="multi_up.php?p_id=<?php echo $p_id;?>" method="post">
      <input name="file[]" type="file" id="file" required /><br><br>

      <input type="button" id="add_more" class="upload add_more" value="+" /> 
      
      <input type="submit" value="Upload Files" name="submit" class="upload"/>

  </form>
              </div>




             </div> <br>

                  <?php 
                  }
          


?>

<?php
echo "<div id='pagingg' style='float:right'>";
echo pagination($statement,$limit,$page);
echo "</div>";
?>
</body>
</html>
