<?php 
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "lms_db";

// crate Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// check connectoin 

if($conn->connect_error) {
	die("connectoin failed");
}
/*else{
	echo "connceted";
}*/

?>