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
		
		<h1>Add astronaut</h1>
		
		<form method="post">
			
			
	        <label>name :</label><br>
		    <input type="text" name="input1"><br>
			
			<label>no.missions :</label><br>
		    <input type="number" name="input2"><br>
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
			
			
			$name = $_POST['input1'];
			$missions = $_POST['input2'];
			
			$sql = "INSERT INTO astranaut (name, no_missions) VALUES ('$name', '$missions')";
			
			if(mysqli_query($link, $sql)) {
				echo "Astronaut has beed added";
			} else {
				echo "Error problem adding mission";
			}
			mysqli_close($link);
		?>
		
	</body>
</html>