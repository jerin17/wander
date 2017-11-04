<?php

include 'config.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />
</head>

<body>
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
        <h1 style="color:#2ecc71;">CITY</h1>

          <span style="color: red;float: left; margin-left: 20px;">* required to fill the fields</span><br>
          <div class="container">
            <div class="col-md-10 col-sm-4" style="background: #34495e ; color: white; border-radius: 10px; margin-bottom: 10px; text-align: left; padding-top: 10px; padding-bottom: 10px;">
              <div style=" margin-bottom: 20px; padding:5px;" class="col-md-12">
                
                <fieldset>
                <legend style="color: white;">Add City</legend>

              <form action="adm_city_add.php" method="post" enctype="multipart/form-data">
                  <span style="color: red;">*</span>Add a new City : <br>
                  <input type="text" name="c_name" class="col-md-12" style="color: black;padding: 7px;padding-left: 13px;border-radius: 5px;margin-bottom: 7px;text-transform:uppercase" placeholder="Enter city's name">
                  <span style="color: red;">*</span>Specify a small description :
                  <textarea class="col-md-12" rows="3" name="c_description" placeholder="Enter description" style="color: black;margin-bottom: 7px;border-radius: 5px;" required></textarea><br>
                  <span style="color: red;">*</span>Upload a thumbnail picture :
                  <input type="hidden" name="MAX_FILE_SIZE" value="4100000">
                  <input type="file" name="image" required/><br>
                  <input style="background:#2ecc71;color: white;border-radius: 5px; width: 100px" type="submit" value="Add City" name="upload">
              </form>
                </fieldset>
              </div>  
 
<span class="line-sep text-center">
   -------------X-------------X-------------X-------------X-------------X-------------X-------------X-------------X-------------X-------------X-------------X-------------X-------------
</span>



<?php 
 include("pagination/function.php");
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
      $limit = 3; //if you want to dispaly 10 records per page then you have to change here
      $startpoint = ($page * $limit) - $limit;
        $statement = "city order by c_id  asc"; //you have to pass your query over here
?>
                <legend style="color: white;">View Uploads</legend>
        
                  <table class="col-md-12">
                    <tr>
                      <th style="width: 50px">#</th>
                      <th style="width: 100px">CITY</th>
                      <th style="width: 120px">DESCRIPTION</th>
                      <th style="width: 100px">IMAGE</th>
                      <th style="width: 100px">Action</th>
                    </tr>
                    <tr>
<?php
    $res=mysqli_query($conn, "select * from {$statement} LIMIT {$startpoint} , {$limit}");
    while($row=mysqli_fetch_array($res))
    {


               ?>   
                  <td><?php echo $row['c_id']; ?></td>     
                  <td><?php echo $row['c_name']; ?></td>     
                  <td><?php echo $row['c_description']; ?></td>     
                  <td><img src="city/<?php echo $row['c_image'];?>" width='100' height='100'></td>     
                  <td><a href="adm_city_edit.php?c_id=<?php echo $row['c_id'];?>">edit</a> 
                      <a href="adm_city_del.php?c_id=<?php echo $row['c_id'];?>" onclick="return confirm('Do you want to delete this record ?')">delete</a></td>     
        </tr>

<?php
    }

?>
</table>
</div></div></div>
<?php
echo "<br><div id='pagingg' style='float:right;'>";
echo pagination($statement,$limit,$page);
echo "</div>";
?><br><br>
</body>
</html>
