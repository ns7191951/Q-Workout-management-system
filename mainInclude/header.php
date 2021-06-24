<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!-- bootstrep css   -->

      <link rel="stylesheet" href="css/bootstrap.min.css">
     
        <!-- font awsome css   -->
       <link rel="stylesheet" href="css/all.min.css">
	
       <!-- google font  -->
       <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
	
      <!-- custom css   -->
      <link rel="stylesheet"  href="css/style.css">
	<title><?php echo TITLE1 ?></title>
</head>



<body>
 <!-- start navigation  -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark pl-5 fixed-top">
  <a class="navbar-brand bg-ysecondary" href="index.php">Q-WORKOUTS</a>
   <span class="navbar-text">let's fight for fitness</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item custom-nav-item "><a class="nav-link" href="index.php">Home </a></li>
      
      <li class="nav-item custom-nav-item "><a class="nav-link" href="aboutus.php">About Us </a></li>

      <li class="nav-item custom-nav-item"><a class="nav-link" href="course.php">workouts</a></li>
    
      <li class="nav-item custom-nav-item"><a class="nav-link" href="paymentstatus.php">payment status</a></li>
       <?php 
       session_start();
       if (isset($_SESSION['is_login'])) {
         echo '
               <li class="nav-item custom-nav-item"><a class="nav-link" href="users/userProfile.php">my profile</a></li>
   
               <li class="nav-item custom-nav-item"><a class="nav-link" href="logout.php">logout</a></li>';
       }else {
        echo '
        <li class="nav-item custom-nav-item"><a class="nav-link" data-toggle="modal" data-target="#userLoginModelCenter" href="#">login</a></li>
      
       <li class="nav-item custom-nav-item"><a class="nav-link" data-toggle="modal" data-target="#userRegModelCenter" href="#">signup</a></li>';
      }
      ?>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="contactus.php">contact us</a></li>
     </ul>
  </div>
</nav>
