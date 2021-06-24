<?php
define('TITLE', 'Report');
if (!isset($_SESSION)) {
	session_start();
}

include('./adminInclude/header.php');
include('../dbconnection.php');
if(isset($_SESSION['is_admin_login'])){
	$adminemail = $_SESSION['adminLogemail'];
 }else{
 	echo "<script> location.href='../index.php';</script>";
 }


?>

<div class="col-sm-9 mt-5">
	<form action="" method="POST" class="d-print-none">
		<div class="form-row">
			<div class="form-group col-md-2">
				<input type="date" class="form-control" id="startdate" name="startdate">
			</div><span> to </span>
			<div class="form-group col-md-2">
				<input type="date" class="form-control" id="enddate" name="enddate">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-secondary" id="search" name="search" value="search">
			</div>
		</div>
	</form>
	<?php
	if (isset($_REQEST['search'])) {
		$startdate = $_REQEST['startdate'];
		$enddate = $_REQEST['enddate'];

		$sql = "SELECT * FROM courseorder WHERE order_date BETWEEN '$startdate' AND '$enddate'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			echo '
		    <p class="bg-dark text-white p-2 mt-4">Details</p>
		 <table class="table">
		 	<thead>
		 		<tr>
		 			<th scope="col">Order Id</th>
		 			<th scope="col">Course Id</th>
		 			<th scope="col">User Email</th>
		 			<th scope="col">Payment Status</th>
		 			<th scope="col">Order Date</th>
		 		    <th scope="col">Amount</th>
		 		</tr>
		 	</thead>
		 </table>';
		 while ($row = $result->fetch_assoc()) {
		 	
		 	echo '
		 	<tr>
		 		<th scope="row">'.$row["order_id"].'</th>
		 		<td>'.$row["course_id"].'</td>
		 		<td>'.$row["user_email"].'</td>
		 		<td>'.$row["status"].'</td>
		 		<td>'.$row["order_date"].'</td>
		 		<td>'.$row["amount"].'</td>
		    </tr>';
		 }
		 echo '
		<tr>
			<td><form class="d-print-none"><input type="submit" class="btn btn-danger" value="Print" onclick="window.print()"> 
			</form></td>
		</tr></tbody>
	</table>';
	}else{
		echo "<div class='alert alert-warning col-sm-6 ml-5 mt-2 role='alert'> NO Records Found !</div>";
	     }
	}
	?>
	</div>
	</div>
</div>

</div>
</div>
<!-- div Container-fluid close from header -->
<?php
include('./adminInclude/footer.php');
?>