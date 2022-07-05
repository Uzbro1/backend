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
		
		<h1>Add target</h1>
		
		<form method="post">
			
			<label>name :</label><br>
		    <input type="text" name="input2"><br>
			
			<label>target_type :</label><br>
		    <input type="text" name="input3"><br>
			
			<label>no.missions :</label><br>
		    <input type="number" name="input4"><br>
			
			<label>first.mission :</label><br>
		    <input type="date" name="input5"><br>
			<input type="submit">
			
		</form>
		<?php
			$host = "localhost";
			$username = "root";
			$password = "";
			$dbname = "esa";
			
			$link = mysqli_connect($host, $username, $password, $dbname);
			
			if($link === false) {
				die("Error:Could not connect");
			}
			
			$name = $_POST['input2'];
			$target_type = $_POST['input3'];
			$no_missions = $_POST['input4'];
			$first_mission = $_POST['input5'];
			
			$sql = "INSERT INTO target (name,target_type,no_missions,first_mission) VALUES ('$name', '$target_type', '$no_missions', '$first_mission')";
			
			if(mysqli_query($link, $sql)) {
				echo "Target has beed added";
			} else {
				echo "Error problem adding target";
			}
			mysqli_close($link);
		?>
		
	</body>
</html>