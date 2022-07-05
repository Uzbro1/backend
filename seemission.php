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
		
		<hr>
		
		<h1>See mission</h1>
		
				<?php
		
		$link = mysqli_connect("localhost", "root", "", "esa");
		// Check connection
		if ($link === false) {
			die("Connection failed: ");
		}
		?>
	
		<table>
		
			<tr>
				<th width="150px">mission_ID<br><hr></th>
				<th width="250px">name<br><hr></th>
				<th width="250px">destination<br><hr></th>
				<th width="250px">launch_date<br><hr></th>
				<th width="250px">mission_type<br><hr></th>
				<th width="250px">crew_size<br><hr></th>
				<th width="250px">astronaut_ID<br><hr></th>
				<th width="250px">target_ID<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT mission_ID, destination,launch_date,mission_type,crew_size,name,astronaut_ID,target_ID FROM mission");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['mission_ID']}</th>
				<th>{$row['name']}</th>
				<th>{$row['destination']}</th>
				<th>{$row['launch_date']}</th>
				<th>{$row['mission_type']}</th>
				<th>{$row['crew_size']}</th>
				<th>{$row['astronaut_ID']}</th>
				<th>{$row['target_ID']}</th>
			</tr>";
			}
			?>
			
		</table>
		
		<?php
		$link->close();
		?>
		
	</body>
</html>