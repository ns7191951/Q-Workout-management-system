<?php
include('./dbconnection.php');
session_start();
if(!isset($_SESSION['userLogemail'])){
	echo "<script> location.href = 'loginsignup.php' </script>";
}else{
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
   $useremail = $_SESSION['userLogemail'];
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="GENERATOR" content="Evrsoft First Page">

	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	<!-- bootstrep css   -->

      <link rel="stylesheet" href="css/bootstrap.min.css">
     
        <!-- font awsome css   -->
       <link rel="stylesheet" href="css/all.min.css">
	
       <!-- google font  -->
       <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
	
      <!-- custom css   -->
      <link rel="stylesheet"  href="css/style.css">
	<title>checkout</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3 jumbotron">
				<h3 class="mb-5">
					Welcome to Q-workout Payment Page
				</h3>
			<form method="post" action="./Paytmkit/pgRedirect.php">
                 <div class="form-group row">
                 	<label for="ORDER_ID" class="col-sm-4 col-form-label">ORDER_ID::*</label>
                 	<div class="col-sm-8">
                 	<input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>"
						readonly>
					</div>	
				</div>
				<div class="form-group row">
					<label for="CUST_ID" class="col-sm-4">User Email</label>
					<div class="col-sm-8">
					<input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php if(isset($useremail)){echo $useremail;}?>" readonly>
					</div>	
				</div>
				<div class="form-group row">
					<label class="col-sm-4 col-form-label" for="TXN_AMOUNT"> Amount</label>
					<div class="col-sm-8">
						<input title="TXN_AMOUNT"  class="form-control" 
						tabindex="10" 
						type="text" name="TXN_AMOUNT" value="<?php if(isset($_POST['id'])){ echo $_POST['id']; } ?>" readonly> 
					</div>
				</div>
				<div class="form-group row">		
					<!--<label>INDUSTRY_TYPE_ID ::*</label>-->
					<div class="col-sm-8">
					<input type="hidden" id="INDUSTRY_TYPE_ID" class="form-control" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly>
				    </div>
				</div>
				<div class="form-group row">
					<!--  <label>Channel ::*</label>  -->
					<div class="col-sm-8">
						<input  type="hidden" id="CHANNEL_ID" class="form-control" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
					</div>
				</div>
				<div class="text-center">	
					<input value="CheckOut" type="submit" class="btn btn-secondary" onclick="">
					<a href="./course.php" class="btn btn-secondary">
					Cancel</a>
				</div>
			</form>
			<small class="form-text text-muted">Note: Complete Payment by Clicking Checkout Button</small>
		 </div>
	</div>
</div> 
</body>
</html>

<?php }

?>