<?php
include 'nav.php';
?>

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
