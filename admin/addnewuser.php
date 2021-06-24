<?php
define('TITLE', 'Add new users');
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


if(isset($_REQUEST['newuserSubmitBtn'])){
	// checking for empty field
	if (($_REQUEST['user_name'] == "") || ($_REQUEST['user_email'] == "") || 
		($_REQUEST['user_pass'] == "") || ($_REQUEST['user_occ'] == "")) {
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Field</div>';	
  }else{
  	$user_name = $_REQUEST['user_name'];
  	$user_email = $_REQUEST['user_email'];
  	$user_pass = $_REQUEST['user_pass'];
  	$user_occ = $_REQUEST['user_occ'];
  	

    $sql = "INSERT INTO user (user_name, user_email, user_pass, user_occ,) VALUES ('$user_name', '$user_email', '$user_pass', '$user_occ')"; 

     if($conn->query($sql) == TRUE) {
     	$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">User added successfully</div>';	
     }else{
     	$msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to add User</div>';	
     }
  }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Add New User</h3>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="user_name">Name</label>
			<input type="text" class="form-control" id="user_name" name="user_name">
		</div>
		<div class="form-group">
			<label for="user_email">Email</label>
			<input type="email" class="form-control" id="user_email" name="user_email">
		</div>
		<div class="form-group">
			<label for="user_pass">Password</label>
			<input type="text" class="form-control" id="user_pass" name="user_pass">
		</div>
		<div class="form-group">
			<label for="user_occ">Occupation</label>
			<input type="text" class="form-control" id="user_occ" name="user_occ">
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="newuserSubmitBtn" name="newuserSubmitBtn">Submit
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