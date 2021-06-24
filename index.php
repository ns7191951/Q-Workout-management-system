 <!-- start includeing header  -->
<?php
 define('TITLE1', 'Qworkout');
 include './dbconnection.php'; ?>
<?php include './mainInclude/header.php'; ?>
<!-- end includeing header  -->
 

 <!-- end navigation  -->
 <!-- start video backgound  -->
 <div class="container-fluid remove-vid-marg">
 	<div class="vid-parent">
 		
 		<video playsinline autoplay muted loop>
 			<source src="video/woman.mp4">
 		</video>
 	<div class="vid-overlay"></div>
 	</div>
     <div class="vid-content">
     	 <h1 class="my-content">welcome to Q-workouts</h1>
     	 <small class="my-content"> fight for the fitness</small><br>

       <?php
       if(!isset($_SESSION['is_login'])){
        echo '<a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#userRegModelCenter">Get started</a>
        ';
       } else{
        echo '<a href="users/userProfile.php" class="btn btn-primary mt-3">
        My Profile</a>';
       }
       ?>
     	 </div>
</div>
 <!-- end video backgound -->
   <!-- start text banner  -->
   <div class="container-fluid bg-success txt-banner">
     <div class="row bottom-banner">
       <div class="col-sm">
        <h5><i class="fas fa-book-open mr-3"></i>100+ online Course</h5>
       </div>
     <div class="col-sm">
        <h5><i class="fas fa-users mr-3"></i>Expert Instruction</h5>
       </div>
       <div class="col-sm">
        <h5><i class="fas fa-keyboard mr-3"></i>lifetime Access</h5>
       </div>
       <div class="col-sm">
        <h5><i class="fas fa-rupee-sign mr-3"></i>Money back Gurantee</h5>
       </div>
     </div>
   </div>

 <!-- end text banner -->
 <!-- start course -->
<div class="container mt-5">
  <h1 class="text-center"> Our Courses</h1>
 <!-- start course 1st card deck -->
 <div class="card-deck mt-4">
  <?php 
   $sql = "SELECT * FROM course LIMIT 3";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) {
       $course_id = $row['course_id'];
       echo '<a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
    <div class="card">
      <img src="'.str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="Guiter"/>
      <div class="card-body">
        <h5 class="card-title">'.$row['course_name'].'</h5>
        <p class="card-text">'.$row['course_desc'].'</p>
      </div>
      <div class="card-footer">
        <p class="card-text d-inline">Price:<small><del>&#8360; '.$row['course_price'].'</del></small>
          <span class="font-weight-bolder">&#8360; '.$row['course_original_price'].' </span>
        </p><a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
      </div>
    </div>
  </a>';
     }
   }
  ?>
  </div>
  <!-- end 1st card deck  -->
  <!-- start 2nd card deck -->
 <div class="card-deck mt-4">
   <?php 
   $sql = "SELECT * FROM course LIMIT 3, 3";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) {
       $course_id = $row['course_id'];
       echo '<a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
    <div class="card">
      <img src="'.str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="Guiter"/>
      <div class="card-body">
        <h5 class="card-title">'.$row['course_name'].'</h5>
        <p class="card-text">'.$row['course_desc'].'</p>
      </div>
      <div class="card-footer">
        <p class="card-text d-inline">Price:<small><del>&#8360;'.$row['course_price'].'</del></small>
          <span class="font-weight-bolder">&#8360; '.$row['course_original_price'].' </span>
        </p><a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
      </div>
    </div>
  </a>';
     }
   }
  ?>
  
  
 </div>
   <!-- end 2nd card deck -->
   <div class="text-center m-2">
     <a class="btn btn-danger btn-sm" href="course.php">view all couse</a>
   </div>
</div>
<!-- end course  -->
  <!-- start contact us -->
  <?php include './contect.php'; ?>
  <!-- end contact us -->
  <!-- start social  follow  -->
  <div class="container-fluid bg-danger">
    <div class="row text-white text-center p-1">
      <div class="col-sm">
        <a class="text-white social-hover "href="#"><i class="fab fa-twitter"></i>twitter</a>
      </div> 
         <div class="col-sm">
        <a class="text-white social-hover "href="#"><i class="fab fa-facebook"></i>facebook</a>
         </div> 
         <div class="col-sm">
        <a class="text-white social-hover "href="#"><i class="fab fa-whatsapp"></i>whatsapp</a>
        </div> 
         <div class="col-sm">
        <a class="text-white social-hover "href="#"><i class="fab fa-instagram"></i>instagram</a>
        </div>
    </div>
  </div>  <!-- end socal follow-->

  <!-- start about section -->
   <div class="container-fluid p-4" style="background-color: #E9ECEF">
    <div class="container" style="background-color: #E9ECEF">
      <div class="row text-center">
         <div class="col-sm">
          <h5>About us</h5>
          <p> Qworkout is the site specially design for those who can't workout in qurentine time for improve their emunity in this covid-19 pandamic.</p>
         </div>
        <div class="col-sm">
          <h5>Category</h5>
          <a class="text-dark" href="#">web development</a><br />
          <a class="text-dark" href="#">web designing</a><br />
          <a class="text-dark" href="#">Android app dev</a><br />
          <a class="text-dark" href="#">IOS Development</a><br />
          <a class="text-dark" href="#">data Analysis</a><br />
        </div>
      <div class="col-sm">
      <h5>Contact Us</h5>
      <p>Qworkout pvt ltd<Br> near police camp 2 <Br> nangloi new delhi
        <br> ph. 446666</p>      
     </div>
    </div>
  </div>
</div> <!-- end about section -->
 <!-- start includeing footer -->
<?php include './mainInclude/footer.php';  ?>

<!-- end including footer  -->