<?php
define('TITLE', 'Edit Users');
if (!isset($_SESSION)) {
	session_start();
}

include('./adminInclude/header.php');
include('../dbconnection.php');
if(isset($_SESSION['is_admin_login'])){
	$adminLogemail = $_SESSION['adminLogemail'];
 }else{
 	echo "<script> location.href='../index.php';</script>";
 }



// update
if(isset($_REQUEST['requpdate'])){
	// checking for empty field
	if (($_REQUEST['user_id'] == "") || ($_REQUEST['user_name'] == "") || ($_REQUEST['user_email'] == "") || ($_REQUEST['user_pass'] == "") || ($_REQUEST['user_occ'] == "")) {
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Field</div>';

    }else{
    	//assigning user values to variable
    $uid = $_REQUEST['user_id'];    
    $uname = $_REQUEST['user_name'];
  	$uemail = $_REQUEST['user_email'];
  	$upass = $_REQUEST['user_pass'];
  	$uocc = $_REQUEST['user_occ'];
  	
    $sql = "UPDATE user SET user_id='$uid', user_name='$uname', user_email='$uemail', user_pass='$upass', user_occ='$uocc' WHERE user_id = '$uid'";

      if($conn->query($sql) == TRUE){
      	//below msg display on form submit success
      	$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2"
      	role=alert>Updated Successfully </div>';
      }else{
	      	$msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2"
      	    role=alert>Unable to Updated </div>';

           }
    }
}
?>	
<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<?php 
       if (isset($_REQUEST['view'])) {
       	$sql = "SELECT * FROM user WHERE user_id = {$_REQUEST['id']}";
        $result = $conn->query($sql); 
        $row = $result->fetch_assoc();
       }

	?>
	<h3 class="text-center">Update User Details</h3>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="user_id">User ID</label>
			<input type="text" class="form-control" id="user_id" name="user_id" value="<?php if(isset($row['user_id'])){
				echo $row['user_id']; } ?>" readonly>
		</div>
		<div class="form-group">
			<label for="user_name">Name</label>
			<input type="text" class="form-control" id="user_name" name="user_name" value="<?php if(isset($row['user_name'])){
				echo $row['user_name']; } ?>" >
		</div>
		<div class="form-group">
			<label for="user_email">Email</label>
			<input type="email" class="form-control" id="user_email" name="user_email" value="<?php if(isset($row['user_email'])){
				echo $row['user_email']; } ?>">
		</div>
		<div class="form-group">
			<label for="user_pass">Password</label>
			<input type="text" class="form-control" id="user_pass" name="user_pass" value="<?php if(isset($row['user_pass'])){
				echo $row['user_pass']; } ?>">
		</div>
		<div class="form-group">
			<label for="user_occ">Occupation</label>
			<input type="text" class="form-control" id="user_occ" name="user_occ" value="<?php if(isset($row['user_occ'])){
				echo $row['user_occ']; } ?>">
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update
		    </button><a href="user.php" class="btn btn-secondary">Close</a>
		</div>
		<?php
        if(isset($msg)) {echo $msg;}
		?>
	</form>
</div>
</div> <!--div row close from header -->
</div> <!-- div container-fluid close form header -->

<?php
include('./adminInclude/footer.php');
?>