<?php
define('TITLE', 'Status');
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	include('../dbconnection.php');
	include('./adminInclude/header.php');

	// following files need to be included
	require_once("../Paytmkit/lib/config_paytm.php");
	require_once("../Paytmkit/lib/encdec_paytm.php");

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
    <!--<br/><br/><br/><br/><br/> -->
	<center>
	<h2 class="p-5">Transaction status query</h2>
	<form method="post" action="">
		<table class="pl-5" border="1" >
			<tbody class="p-5">
				<tr class="p-5">
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $ORDER_ID ?>">
					</td>
				</tr>
				<tr class="p-5">
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
				?>
				<tr >
					<td style="border: 1px solid"><label><?php echo $paramName?></label></td>
					<td style="border: 1px solid"><?php echo $paramValue?></td>
				</tr>
				<?php
					}
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
/div>
<!-- div Container-fluid close from header -->
<?php
include('./adminInclude/footer.php');
?>