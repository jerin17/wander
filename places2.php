<?php
include 'nav.php';
$c_id=$_GET['c_id'];
?>

<div class="container" style="background: #60a917; border-radius: 10px;border:5px solid #34495e;" >
                    
    <div class="col-md-12 col-sm-4">              
      <div class="row text-center">
      <?php 
      include 'config.php';
      $sql3="SELECT * FROM city WHERE c_id='$c_id'";
      $result3=mysqli_query($conn,$sql3);
      $row3=mysqli_fetch_array($result3);
      ?>
        <br><hr><h1><?php echo $row3['c_name']; ?></h1><br><br>
      </div>
    </div>
       

    <div class="container" style="margin-bottom: 30px;">           
                  <?php  
                  $sql1="SELECT * FROM city WHERE c_id='$c_id'";
                  $result1=mysqli_query($conn,$sql1);
                  $row1=mysqli_fetch_assoc($result1);
                  ?>  
                      
          <div style="padding: 10px;">              
            <img  class="img-circle"src="city/<?php echo $row1['c_image']; ?>" width="300" height="300" style="float: left; position: relative;top:-20px; margin-right: 20px;">
                
                  <div>
                  <p style="text-align:left;font-size: 17px; color: black;"><i><?php echo $row1['c_description']; ?></i></p>
                            </div>
                </div>

          
    </div>
<hr><br> 
</div> 

    <div class="text-center">
    <span class="line-sep ">
    ----------X------------X----------X-------------
    </span>
    </div>

<!-- ***************************************************************************************************************** -->

<div class="container">
            
<section>

        <div class="row text-center">
             <div class="col-md-8 col-sm-4" >



 <?php
              $count=1;
              $sql="SELECT * FROM place INNER JOIN city ON city.c_id=$c_id AND place.c_id=$c_id";
              $result = mysqli_query($conn , $sql);
              if ($result->num_rows > 0) {
              while($row2 = $result->fetch_assoc()) {
               ?> 

      <div class="container">
      <div class="col-md-12" style="background: #2c3e50 ; color: white; border-radius: 10px; margin-bottom: 10px; text-align: left; padding-top: 10px; padding-bottom: 5px;">

              <h3 style="float: left"><?php echo "#".$count++;; ?></h3>
              <div class="row text-center">
               <h1 style="text-transform: uppercase;color: #60a917"><?php echo $row2['p_name']; ?></h1>
              </div>

              <img class="img-rounded" style="float: right; margin-left: 20px;" src="place/<?php echo $row2['p_image'];?>" width='300' height='300'><br>
           
             <table style="border-collapse: collapse; color: white; margin-bottom: 60px; font-size: 17px;">
                  <tr>
                    <th style="width: 120px;">Description   </th>
                    <td style=" padding-bottom: 10px;"><?php echo $row2['p_description']; ?></td>
                  </tr>

                  <tr>
                    <th>Address   </th>
                    <td style=" padding-bottom: 10px;"><?php echo $row2['p_address']; ?></td>
                  </tr>

                  <tr>
                    <th>Height (m)   </th>
                    <td style=" padding-bottom: 10px;"><?php echo $row2['p_height']; ?></td>
                  </tr>

                  <tr>
                    <th>Fact   </th>
                    <td><?php echo $row2['p_fact']; ?></td>
                  </tr>

              </table>         
<div class="col-md-12" style="background: #34495e; color: white; border-radius: 10px; margin-bottom: 10px; text-align: left; padding-top: 10px; padding-bottom: 5px;">

<hr>
<h3>IMAGES</h3>

<?php 
$p_id=$row2['p_id'];
$sqlimg="SELECT * FROM multi_images WHERE p_id='$p_id'";
$resultimg = $conn->query($sqlimg);
if ($resultimg->num_rows > 0) {
    while($rowimg = $resultimg->fetch_assoc()) {
?>

<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" width="100px" height="100px" src="multi_images/<?php echo $rowimg['image']; ?>">
<script>
function bigImg(x) {
    x.style.height = "400px";
    x.style.width = "600px";
}

function normalImg(x) {
    x.style.height = "100px";
    x.style.width = "100px";
}
</script>


<?php

}}   
else
{
  echo "No images available";
}

?>


<hr>


<h3>REVIEWS</h3>

<?php
        $p_id=$row2['p_id'];
        $sql123="SELECT * FROM review INNER JOIN place ON review.p_id=$p_id AND place.p_id=$p_id";
        $result123 = mysqli_query($conn , $sql123);
        if ($result123->num_rows > 0) {
        while($row3 = $result123->fetch_assoc()) {
?> 

<div style="background: white; margin-bottom: 15px;color: black;display:block;padding-bottom: 10px; border-radius: 20px; margin-left: 10px; margin-right: 10px;">
<img width="90px" style="float: left;margin: 10px;" class="img-circle" src="rev/<?php echo $row3['r_image']; ?>"><br>
<h2 style="position: relative;top: -30px; left: 40px;"><?php echo $row3['r_name']; ?></h2>
<h5 style="position: relative;top: -25px; left: 60px;"><?php echo '" '.$row3['r_review'].' "'; ?></h5>

</div>

<?php 
}
}

else
  { echo '<div class="text-center"><h4>No reviews yet !</h4></div>';}
?>

    <div class="text-center">
    <span class="line-sep ">
    ----------X------------X----------X-------------
    </span>
    </div>


<h3>ADD REVIEWS</h3>
<form action="places_rev.php?p_id=<?php echo $row2['p_id'];?>" method="POST" style="color: black;" enctype="multipart/form-data">

<input type="text" name="r_name" style="border-radius: 7px; height: 40px; border: 3px solid lightblue; margin-bottom: 3px;" class="col-md-6" placeholder="NAME" required /><br>
<br><br>
<input type="text" name="r_email" style="border-radius: 7px; height: 40px; border: 3px solid lightblue; margin-bottom: 3px;" class="col-md-6" placeholder="E-mail" required />
<br><br>

<br><textarea name="r_review" style="border-radius: 7px;border: 3px solid lightblue;margin-bottom: 8px;padding: 10px;" class="col-md-12" placeholder="Enter review here :))" rows="3" required /></textarea><br>
<br><br><label style="color: white">Upload a photo (optional):</label>
<input type="hidden" name="MAX_FILE_SIZE" value="10000000">
<br><input type="file" name="image" style="color: white" />


<br><input type="submit" style="background:#2ecc71;border-radius:5px; font-size: 20px; color:white;float: right;" name="submit">
</form>


</div>
            </div>
           </div> <br>

                <?php 
                }}

         ?>





       </div> 
    </div>             
</div>
22222