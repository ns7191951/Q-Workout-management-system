
<?php
	define('TITLE1', 'Payment Status');
	include('./dbconnection.php');
    include('./mainInclude/header.php');
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	
	

	// following files need to be included
	require_once("./Paytmkit/lib/config_paytm.php");
	require_once("./Paytmkit/lib/encdec_paytm.php");

	$ORDER_ID = "";
	$requestParamList = array();
	$responseParamList = array();

	if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {

		// In Test Page, we are taking parameters from POST request. In actual implementation these can be collected from session or DB. 
		$ORDER_ID = $_POST["ORDER_ID"];

		// Create an array having all required parameters for status query.
		$requestParamList = array("MID" => PAYTM_MERCHANT_MID , "ORDERID" => $ORDER_ID);  
		
		$StatusCheckSum = getChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY);
		
		$requestParamList['CHECKSUMHASH'] = $StatusCheckSum;

		// Call the PG's getTxnStatusNew() function for verifying the transaction status.
		$responseParamList = getTxnStatusNew($requestParamList);
	}

?>
 	<div class="container-fluid bg-dark"> <!-- start course page banner -->
 		<div class="row">
 			<img src="./image/yoga.jpg" alt="course"
 			style="height: 300px; width: 100%; object-fit: cover; box-shadow: 10px;" />
		</div>
 	</div> <!-- end of course banner -->

     <center>
	<h2>Transaction status query</h2>
	<form method="post" action="">
		<table border="1">
			<tbody>
				<tr>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $ORDER_ID ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input value="Status Query" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
		<br/></br/>
		<?php
		if (isset($responseParamList) && count($responseParamList)>0 )
		{ 
		?>
		<h2>Response of status query:</h2>
		<table style="border: 1px solid nopadding" border="0">
			<tbody>
				<?php
					foreach($responseParamList as $paramName => $paramValue) {
						if(($paramName == "TXNID") || ($paramName == "ORDERID") || ($paramName == "TXNAMOUNT") || ($paramName == "STATUS")){ 
				?>
				<tr >
					<td style="border: 1px solid"><label><?php echo $paramName?></label></td>
					<td style="border: 1px solid"><?php echo $paramValue?></td>
				</tr>
				<?php
					} }
				?>
				<tr>
					<TD><button type="button" class="btn btn-primary" onclick="javascript:window.print();">Print</button></TD>
				</tr>
			</tbody>
		</table>
		<?php
		}
		?>
	</form></center>
	<div class="mt-5">
		<?php 
			include('./contect.php');
		 ?>
	</div>
</div>
<!-- div Container-fluid close from header -->
<?php
include('./mainInclude/footer.php');
?>





