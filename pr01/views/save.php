<?php
	include 'database.php';
	$gkrendszam=$_POST['gkrendszam'];
	$gkszin=$_POST['gkszin'];
	$gkalvazszam=$_POST['gkalvazszam'];
	$gkmuszakierv=$_POST['gkmuszakierv'];
	$sql = "INSERT INTO `gk`( `gkrendszam`, `gkszin`, `gkalvazszam`, `gkmuszakierv`) 
	VALUES ('$gkrendszam','$gkszin','$gkalvazszam','$gkmuszakierv')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
