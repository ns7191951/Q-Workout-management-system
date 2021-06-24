<?php
define('TITLE', 'change password');
if (!isset($_SESSION)) {
	session_start();
}

include('./adminInclude/header.php');
include('../dbconnection.php');
if(isset($_SESSION['is_admin_login'])){
	$adminemail = $_SESSION['adminLogemail'];
 }else{
 	echo "<script> location.href='../index.php';</script>";
 }
  $adminemail = $_SESSION['adminLogemail'];
  if(isset($_REQUEST['adminPassUpdatebtn'])){
   if(($_REQUEST['adminpass'] == "")) {
   	
   
// msg displayed if required field missing

  	$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">FILL ALL FIELDS </div>';
   }else{
   	$sql = "SELECT * FROM admin WHERE admin_email='$adminemail'";
   	$result = $conn->query($sql);
   	if ($result->num_rows == 1) {
   		$adminpass = $_REQUEST['adminpass'];
   		$sql = "UPDATE admin SET admin_pass= '$adminpass' WHERE admin_email = '
   		$adminemail'";

   		if ($conn->query($sql) ==TRUE) {
   			$passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully </div>';
   		}else{
   			$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
   		}
     }
   }
}
?>
<div class="col-sm-9 mt-5">
 	<div class="row">
 		<div class="col-sm-9">
 			<form class="mt-5 mx-5">
 				<div class="form-group">
 					<label for="inputemail">Email</label>
 					<input type="email" class="form-control" name="inputemail" id="inputemail" value="<?php echo $adminemail ?>" readonly>
 				</div>
 				<div class="form-group">
 					<label for="inputnewpassword">New Password</label>
 					<input type="text" class="form-control" id="inputnewpassword" placeholder="New Password" name="adminpass">
 				</div>
 				<button type="submit" class="btn btn-danger mr-4 mt-4" 
 				 name="adminPassUpdatebtn">Update
 				</button>
 				<button type="reset" class="btn btn-secondary mt-4">
 					Reset
 				</button><?php if (isset($passmsg)){echo $passmsg; } ?> 
 			</form>
 		</div>
 	</div>
</div>

</div> <!--div row close from header -->
</div> <!-- div container-fluid close form header -->
<?php
include('./adminInclude/footer.php');
?>