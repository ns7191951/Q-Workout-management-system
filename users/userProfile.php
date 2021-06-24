<?php
define('TITLE', 'Profile');
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

 $sql = "SELECT * FROM user WHERE user_email = '$useremail'";
 $result = $conn->query($sql);
 if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $userid = $row["user_id"];
    $username = $row["user_name"];
    $userocc = $row["user_occ"];
    $userimg = $row["user_img"];
 }

 if(isset($_REQUEST['updateUserNameBtn'])){
    // checking for empty field
	if (($_REQUEST['username'] == "")) {
   // msg displyed if required field missing
    $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Field</div>';

    }else{
    	//assigning user values to variable
    $username = $_REQUEST['username'];    
    $userocc = $_REQUEST['userocc'];
  	$user_image = $_FILES['userimg']['name'];
  	$user_image_temp = $_FILES['userimg']['tmp_name'];
  	$img_folder = '../image/user/'.$user_image;
  	move_uploaded_file($user_image_temp, $img_folder);


    $sql = "UPDATE user SET  user_name='$username', user_occ='$userocc', user_img='$img_folder' WHERE user_email = '$useremail'";

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
<div class="col-sm-6 mt-5 ">
 	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="userid">User ID</label>
			<input type="text" class="form-control" id="userid" name="userid" value="<?php
			 if(isset($userid)){
			 	echo $userid;
			 }
			 ?>" readonly>
		</div>
		<div class="form-group">
			<label for="useremail">Email</label>
			<input type="Email" class="form-control" id="useremail" name="useremail" value="<?php echo $useremail ?>" readonly>
		</div>
		<div class="form-group">
			<label for="username">Name</label>
			<input type="text" class="form-control" id="username" name="username" value="<?php
			 if(isset($username)){
			 	echo $username;
			 }
			 ?>">
		</div>
		<div class="form-group">
			<label for="userocc">Occupation</label>
			<input type="text" class="form-control" id="userocc" name="userocc" value="<?php
			 if(isset($userocc)){
			 	echo $userocc;
			 }
			 ?>">
		</div>
		<div class="form-group">
			<label for="userimg">Upload image</label>
			<input type="file" class="form-control-file" id="userimg" name="userimg">
		</div>
		<div>
			<button type="submit" class="btn btn-primary" id="updateUserNameBtn" name="updateUserNameBtn">Update</button>
			<?php
             if(isset($passmsg)) {echo $passmsg;}
		     ?>
	</form>
        </div>
</div> <!--div row close from header -->
<?php
include('./userInclude/footer.php');
?>