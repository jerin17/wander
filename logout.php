<?php
session_start();
if (isset($_SESSION['username'])) {
session_destroy();
include 'login.php';
$msg="Successfully logged off !";
}
?>

<div class="col-md-12 col-sm-6 alert-success" style="height:30px; text-align:center;padding-top:5px;"> <?php echo $msg; ?> </div>
