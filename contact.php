<?php
include 'nav.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<br>    
   <div class="container">
       <div class="row text-center">
        <div class="text-center">
         <div class="col-md-offset-3 col-sm-6 alert-success" style="max-width:500px; background:#232b38">
                    <h4 style="color:#2ecc71;">SPEAK TO US</h4>
   <form method="POST" action="message.php">
                                <div class="row">

                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" required="required" placeholder="Name" style="color:white;" ><br>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" required="required" placeholder="Email address"style="color:white;"><br>
                                        </div>
                                    </div>
                                </div>
            <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group">
                            <textarea name="msg" id="message" required="required" class="form-control" rows="9" placeholder="Message" style="color:white;"></textarea><br><br>
                        </div>
                        <div class="form-group">
<!--                                    <button type="submit" class="btn btn-danger">Submit Request</button>-->
                            <input type="submit" class="btn btn-success" value="Submit Request" >
                        </div>
                    </div>

             </div>

     </form>    

            </div>

    
</body>
</html>