<?php
include('../dbconnection.php');
if(!isset($_SESSION)){
	session_start();
}
if(isset($_SESSION['is_login'])){
		$userLogemail = $_SESSION['userLogemail'];
}

if(isset($userLogemail)){
	$sql = "SELECT user_img FROM user WHERE user_email= '$userLogemail'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$user_img = $row['user_img'];
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo TITLE ?></title>
       <!-- bootstrep css   -->

      <link rel="stylesheet" href="../css/bootstrap.min.css">
     
        <!-- font awsome css   -->
       <link rel="stylesheet" href="../css/all.min.css">
	
       <!-- google font  -->
       
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

        <!-- custom css -->
        <link rel="stylesheet" type="text/css" href="../css/userstyle.css">
	</head>

	<body>
<!-- top navbar -->
<nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #225470;">
	<a href="userProfile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">
		Q-workout</a>
</nav>
<!--  side bar  -->
<div class="container-fluid mb-5" style="margin-top: 40px;">
	<div class="row">
		<nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item mb-3">
						<img class="img-thumbnail rounded-circle" src="<?php echo $user_img; ?>" alt="userImage">
					</li>
					<li class="nav-item">
						<a class="nav-link"  href="userProfile.php">
							<i class="fas fa-user"></i>
							Profile <span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="myCourse.php">
							<i class="fas fa-accessible-icon"></i>
							My Courses
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="feedback.php">
							<i class="fas fa-accessible-icon"></i>
							feedback
						</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="userChangePass.php">
							<i class="fas fa-key"></i>
							Change Password
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../logout.php">
							<i class="fas fa-sign-out-alt"></i>
							Logout
						</a>
					</li>
				</ul>
			</div>
		</nav>