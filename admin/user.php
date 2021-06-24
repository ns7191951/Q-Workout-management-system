<?php
define('TITLE', 'Users');
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


?>

<div class="col-sm-9 mt-5">
	<!-- table -->
	<p class="bg-dark text-white p-2">
		List of users
	</p>
	<?php
       $sql = "SELECT * FROM user";
       $result = $conn->query($sql);
       if ($result->num_rows >0) {
    ?>
	<table class="table"> 
		<thead>
			<tr>
				<th scope="col">User ID</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php while($row = $result->fetch_assoc()){  
			echo'<tr>';
				echo'<th scope="row">'.$row['user_id'].'</th>';
				echo'<td>'.$row['user_name'].'</td>';
				echo'<td>'.$row['user_email'].'</td>';
				echo'<td>';
					echo'
                    <form  action="edituser.php" method="POST" class="d-inline">
                    <input type="hidden" name="id" value='.$row['user_id'].'>

					<button type="submit" class="btn btn-info mr-3" name="view" value="view">
						<i class="fas fa-pen"></i>					
					</button>
					</form>
                     <form method="POST" Action="" class="d-inline">
                     <input type="hidden" name="id" value='.$row['user_id'].'>
					<button type="submit" class="btn btn-secondary" name="delete" value="Delete">
						<i class="fas fa-trash-alt"></i>
					</button>
                      </form>
					';
				echo'</td>';
			echo'</tr>';
			} ?>
		</tbody>
	</table>
<?php } else {
	           echo "0 Result";
             } 
if(isset($_REQUEST['delete'])){
	$sql = "DELETE FROM user WHERE user_id = {$_REQUEST['id']}";
if($conn->query($sql) == TRUE){
	echo '<meta http_equi="refresh" content="0;URL=?deleted" />';
}else{
	echo "Unable to Delete Data";
}
}


?>
</div>
</div>

<!-- div row close from header   -->
	<div>
		<a href="./addnewuser.php" class="btn btn-danger box"><i class="fas fa-plus fa-2x"></i></a>
		
	</div>
</div>
<!-- div Container-fluid close from header -->
<?php
include('./adminInclude/footer.php');
?>