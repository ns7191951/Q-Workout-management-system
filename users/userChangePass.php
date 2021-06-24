<?php
define('TITLE', 'Change Password');
if (!isset($_SESSION)) {
	session_start();
}

include('./userInclude/header.php');
include_once('../dbconnection.php');

if(isset($_SESSION['is_login'])){
	$useremail = $_SESSION['userLogemail'];
 }else{
 	echo "<script> location.href='../index.php';</script>";
 }
  
  if(isset($_REQUEST['userPassUpdateBtn'])){
   if(($_REQUEST['userNewpass'] == "")) {
   	
   
// msg displayed if required field missing

  	$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">FILL ALL FIELDS </div>';
   }else{
   	$sql = "SELECT * FROM user WHERE user_email='$useremail'";
   	$result = $conn->query($sql);
   	if ($result->num_rows == 1) {
   		$userpass = $_REQUEST['userNewpass'];
   		$sql = "UPDATE user SET user_pass= '$userpass' WHERE user_email = '
   		$useremail'";

   		if ($conn->query($sql) == TRUE) {
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
 		<div class="col-sm-6">
 			<form class="mt-5 mx-5" method="post">
 				<div class="form-group">
 					<label for="inputemail">Email</label>
 					<input type="email" class="form-control" name="inputemail" id="inputemail" value="<?php echo $useremail ?>" readonly>
 				</div>
 				<div class="form-group">
 					<label for="userNewpass">New Password</label>
 					<input type="text" class="form-control" id="userNewpass" placeholder="New Password" name="userNewpass">
 				</div>
 				<button type="submit" class="btn btn-danger mr-4 mt-4" 
 				 name="userPassUpdateBtn">Update
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
include('./userInclude/footer.php');
?>