<?php 
if (!isset($_SESSION)) {
	session_start();
}

include('../dbconnection.php');
// checking email already registered

if (isset($_POST['checkemail']) && isset($_POST['useremail'])) {
	$useremail = $_POST['useremail'];
	$sql = "SELECT user_email FROM user WHERE user_email = '".$useremail."' ";
	$result = $conn->query($sql);
	$row = $result->num_rows;
	echo json_encode($row);
}

// insert user
if(isset($_POST['usersignup']) && isset($_POST['username']) && isset($_POST['useremail']) && isset($_POST['userpass'])){

	$username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$userpass = $_POST['userpass'];
   
   $sql = "INSERT INTO user(user_name, user_email, user_pass) VALUES('$username', '$useremail', '$userpass')";

   if($conn->query($sql) == TRUE){
   	echo json_encode("ok");
   }else{
   	echo json_encode("failed");
   }
}
 
 // student Login varification
if(!isset($_SESSION['is_login'])){
  if(isset($_POST['checkLogemail']) && isset($_POST['userLogemail']) && isset($_POST['userLogpass'])){
	$userLogemail = $_POST['userLogemail'];
	$userLogpass = $_POST['userLogpass'];

	$sql = "SELECT user_email, user_pass FROM user WHERE 
	user_email= '".$userLogemail."' AND  user_pass ='".$userLogpass."' ";

	$result = $conn->query($sql);

	$row = $result->num_rows;

	if ($row === 1) {
		$_SESSION['is_login'] = true;
		$_SESSION['userLogemail'] = $userLogemail;		
		echo json_encode($row);
	}elseif ($row === 0) {
		echo json_encode($row);		
	}
  }
}
?>