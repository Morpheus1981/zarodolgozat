<?php
	include 'database.php';
	$sql = "SELECT * FROM gk";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>
		<tr>
			<td><?=$row['gkrendszam'];?></td>
			<td><?=$row['gkszin'];?></td>
			<td><?=$row['gkalvazszam'];?></td>
			<td><?=$row['gkmuszakierv'];?></td>
			<td><button type="button" class="btn btn-danger btn-sm delete" data-toggle="modal" data-keyboard="false" data-backdrop="static" 
			data-id="<?=$row['id'];?>"
			data-name="<?=$row['gkrendszam'];?>"
			data-email="<?=$row['gkszin'];?>"
			data-phone="<?=$row['gkalvazszam'];?>"
			data-city="<?=$row['gkmuszakierv'];?>"
			>Törlés</button>

			<td><button type="button" class="btn btn-success btn-sm update" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#update_country"
			data-id="<?=$row['id'];?>"
			data-name="<?=$row['gkrendszam'];?>"
			data-email="<?=$row['gkszin'];?>"
			data-phone="<?=$row['gkalvazszam'];?>"
			data-city="<?=$row['gkmuszakierv'];?>"
			>Szerkesztés</button>

		</tr>
			
<?php
	}
	}
	else {
		echo "<tr >
		<td colspan='5'>No Result found !</td>
		</tr>";
	}
	mysqli_close($conn);
?>
