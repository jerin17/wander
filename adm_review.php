<?php

@$conn = mysqli_connect('localhost','root','seoul','travel');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>

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

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
    <link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />

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
        <h1 style="color:#2ecc71;">REVIEWS</h1><br>


<?php 
 include("pagination/function.php");
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
      $limit = 4; //if you want to dispaly 10 records per page then you have to change here
      $startpoint = ($page * $limit) - $limit;
        $statement = "review order by r_id asc"; //you have to pass your query over here

    $res=mysqli_query($conn, "select * from {$statement} LIMIT {$startpoint} , {$limit}");
    while($row=mysqli_fetch_array($res))
    {

?>
          <div class="container">
            <div class="col-md-10" style="background: #34495e ; color: white; border-radius: 10px; margin-bottom: 10px; text-align: left; padding-top: 10px; padding-bottom: 10px;">
              <table style="border-collapse: collapse;">

              <img width="100px" height="100px" style="float: right;" src="rev/<?php echo $row['r_image']; ?>"><br>
                <tr>

                  <?php 
                      include 'config.php';
                      $id=$row['p_id'];
                      $sql3="SELECT * FROM place WHERE p_id='$id'";
                      $result3=mysqli_query($conn,$sql3);
                      $row3=mysqli_fetch_array($result3);
                  ?>
                  <th>Place </th>
                  <td><?php echo " : ".$row3['p_name']; ?></td>
                </tr>
                <tr>
                  <th>Name   </th>
                  <td><?php echo " : ".$row['r_name']; ?></td>
                </tr>
                <tr>
                  <th>E-mail   </th>
                  <td><?php echo " : ".$row['r_email']; ?></td>
                </tr>
                <tr>
                  <th>Review   </th>
                  <td style=""><?php echo " : ".$row['r_review']; ?></td>
                </tr>
              </table>           
              <br><a href="del_review.php?r_id=<?php echo $row['r_id'];?>"><button style="float: right;margin-top: 20px;" class="col-md-2 alert-warning" onclick="return confirm('Do you want to delete this record ?')">delete review</button></a><br>

            </div>
           </div> <br>


<?php
    }

?>
</div>
<?php
echo "<div id='pagingg' style='float:right;'> ";
echo pagination($statement,$limit,$page);
echo "</div>";
?>
</body>
</html>
