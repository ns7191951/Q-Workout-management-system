<?php
define('TITLE', 'Mycourse');
if (!isset($_SESSION)) {
	session_start();
} 							
include('./userInclude/header.php');
include('../dbconnection.php');
if(isset($_SESSION['is_login'])){
	$userLogemail = $_SESSION['userLogemail'];
 }else{
 	echo "<script> location.href='../index.php';</script>";
 }

 ?>

 <div class="container mt-5 ml-4">
 	<div class="row">
 		<div class="jumbotrom">
 			<h4 class="text-center">All Course</h4>
 		<?php
 		if(isset($userLogemail)){
 			$sql = "SELECT co.order_id, c.course_id, c.course_name, c.course_duration, c.course_desc, c.course_img, c.course_author, c.course_original_price, c.course_price FROM courseorder AS co JOIN course AS c ON c.course_id = co.course_id WHERE co.user_email = '$userLogemail'";

 			$result = $conn->query($sql);
 			if($result->num_rows > 0){
 				while($row = $result->fetch_assoc()){ ?>
 					<div class="bg-light mb-3">
 						<h5 class="card-header"><?php echo $row['course_name'] ?></h5>
 						<div class="row">
 							<div class="col-sm-3">
 								<img src="<?php echo $row['course_img']; ?>" class="card-img-top mt-4" alt="pic">
 							</div>
 							<div class="col-sm-6 mb-3">
 								<div class="card-body">
 									<p class="card-title"><?php echo $row['course_desc']; ?></p>
 									<small class="card-text">Duration: <?php echo $row['course_duration']; ?></small><br/>
 									<small class="card-text">Instructor: <?php echo $row['course_author']; ?></small><br/>
 									<p class="card-text d-online">Price:
 										<small><del>&#8377 <?php $row['course_price']; ?></del></small>
 										<span class="font-weight-bolder">&#8377 <?php echo $row['course_original_price']; ?></span></p>
 										<a href="watchcourse.php?course_id =<?php echo $row['course_id'] ?>" class="btn btn-primary mt-5 float-right"> watch Course</a>
 									
 								</div>
 							</div>
 						</div>
 					</div>
 				<?php
 				}
 			}
 		}
 		?>
 		<hr/>
 		</div>
 	</div>
 </div>
</div> <!--div row close from header -->
<?php
include('./userInclude/footer.php');
?>