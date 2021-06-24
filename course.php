<?php
  define('TITLE1', 'course');
   // start includeing header  
 include './mainInclude/header.php';
  include('./dbconnection.php');
 

?>


 <!-- end includeing header  -->
 <!-- start excercise banner  -->
<div class="container-fluid bg-dark">
	<div class="row">
		<img src="./image/dumball.jpg" alt="yoga" style="height: 650px; width: 100%; object-fit: cover; box-shadow: 10px;"/>
	</div>
</div>
<!-- end excercise banner  -->
<!-- start course -->
<div class="container mt-5">
  <h1 class="text-center"> Our Courses</h1>
  <div class="row mt-4">
    <?php
      $sql = "SELECT * FROM course ";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $course_id = $row['course_id'];
          echo '
          <div class="col-sm-4 mb-4"> 
          <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
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
  </a>
  </div>
  ';
     }
   }
  ?>
  </div> <!-- end all course row -->
</div> <!-- end all course -->
 
 <!-- start includeing footer -->
<?php include './mainInclude/footer.php';  ?>
 <!-- end includeing footer  -->
