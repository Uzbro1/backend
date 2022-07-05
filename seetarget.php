<html>
	<head>
		<title>ESA</title>
	</head>
		
	<body>
		<a href="index.php">Home</a> <br>
		<a href="addastronaut.php">Add astronaout</a> <br>
		<a href="addtarget.php">Add target</a> <br>
		<a href="addmission.php">Add mission</a> <br>
		<a href="seeastronaut.php">See astronauts</a> <br>
		<a href="seemission.php">See missions</a> <br>
		<a href="seetarget.php">See targets</a> <br>
		
		<?php
		
		$link = mysqli_connect("localhost", "root", "", "esa");
		// Check connection
		if ($link === false) {
			die("Connection failed: ");
		}
		?>
	
		<hr>
		
		<h3>See all targets</h3>
	
		<table>
		
			<tr>
				<th width="150px">target ID<br><hr></th>
				<th width="250px"> name<br><hr></th>
				<th width="250px">target_type<br><hr></th>
				<th width="250px">no.missions<br><hr></th>
				<th width="250px">first.mission<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT target_ID, name,no_missions,target_type,first_mission FROM target");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['target_ID']}</th>
				<th>{$row['name']}</th>
				<th>{$row['target_type']}</th>
				<th>{$row['no_missions']}</th>
				<th>{$row['first_mission']}</th>
			</tr>";
			}
			?>
			
		</table>
		
		<?php
		$link->close();
		?>
	
		
		
	</body>
</html>