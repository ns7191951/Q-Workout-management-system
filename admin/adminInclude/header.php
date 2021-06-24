<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo TITLE ?></title>
<!-- bootstrep css   -->

      <link rel="stylesheet" href="../css/bootstrap.min.css">
     
<!-- font awsome css   -->
       <link rel="stylesheet" href="../css/all.min.css">
	
       <!-- google font  -->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
	
      <!-- custom css   -->
      <link rel="stylesheet"  href="../css/adminstyle.css">
</head>
<body>
<!-- top navbar -->
<nav class="navbar navbar-dark fixed-top p-0 shadow mb-5" style="background-color: #225470;">
	<a href="adminDashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0">
		Q-workout<small class="text-white">
			Admin Area
		</small></a>
</nav>
<!--  side bar  -->
<div class="container-fluid mb-5" style="margin-top: 40px;">
	<div class="row">
		<nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="adminDashboard.php">
							<i class="fas fa-tachometer-alt"></i>
							Dashboard
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Courses.php">
							<i class="fas fa-accessible-icon"></i>
							Exercises
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="lesson.php">
							<i class="fas fa-accessible-icon"></i>
							Lessions
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="user.php">
							<i class="fas fa-users"></i>
							Users
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="sellreport.php">
							<i class="fas fa-table"></i>
							Sell report
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="adminpaymentstatus.php">
							<i class="fas fa-table"></i>
							Payment Status
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="fas fa-accessible-icon"></i>
							feedback
						</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="adminChangePass.php">
							<i class="fas fa-accessible-icon"></i>
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