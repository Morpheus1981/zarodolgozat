<?php
	include 'database.php';
	$id=$_POST['id'];
	$gkrendszam=$_POST['gkrendszam'];
	$gkszin=$_POST['gkszin'];
	$gkalvazszam=$_POST['gkalvazszam'];
	$gkmuszakierv=$_POST['gkmuszakierv'];
	$sql = "UPDATE `gk` 
	SET `gkrendszam`='$gkrendszam',
	`gkszin`='$gkszin',
	`gkalvazszam`='$gkalvazszam',
	`gkmuszakierv`='$gkmuszakierv' WHERE id=$id";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
