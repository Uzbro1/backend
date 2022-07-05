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
		
		<h1>Add mission</h1>
		
		
		<?php
			$host = "localhost";
			$username = "root";
			$password = "";
			$dbname = "esa";
			
			$link = mysqli_connect($host, $username, $password, $dbname);
			
			if($link === false) {
				die("Error:Could not connect");
			}
		
		?>
		
		
		<form method="post" action="addmission.php">
			<label>name :</label><br>
		    <input type="text" name="input2"><br>
			<label>destination :</label><br>
		    <input type="text" name="input3"><br>
			<label>launch_date :</label><br>
		    <input type="date" name="input4"><br>
			<label>mission_type :</label><br>
		    <input type="text" name="input5"><br>
			<label>crew_size :</label><br>
		    <input type="number" name="input6"><br>
			<label>select astranaut :</label>"<br>
		    
			<select name="input7">
				<?php
				$sql = mysqli_query($link, "SELECT astronaut_ID, name FROM astranaut");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='{$row['astronaut_ID']}'>{$row['name']}</option>";
				}
				?>
			</select>
			
			
			<br>
			<label>select target :</label>"<br>
		    
			<select name="input8">
				<?php
				$sql = mysqli_query($link, "SELECT target_ID, name FROM target");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='{$row['target_ID']}'>{$row['name']}</option>";
				}
				?>
			</select>

			<br>
			<input type="submit">
		</form>
		<?php
			$mission_name = $_POST['input2'];
			$destination = $_POST['input3'];
			$launch = $_POST['input4'];
			$miss_type = $_POST['input5'];
			$crew_size = $_POST['input6'];
			$ast_id = $_POST['input7'];
			$tar_id = $_POST['input8'];
			
			$sql = "INSERT INTO mission (name, destination, launch_date, mission_type, crew_size, astronaut_ID, target_ID) VALUES 
			('$mission_name', '$destination', '$launch', '$miss_type', '$crew_size', '$ast_id', '$tar_id')";
			
			if(mysqli_query($link, $sql)) {
				echo "Mission has beed added";
			} else {
				echo "Error problem adding mission";
			}
			mysqli_close($link);
			?>
		
	</body>
</html>