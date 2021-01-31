

<!DOCTYPE html>
<html>
<head>
	<title>IMDB</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>



	<br>
	


	<h1 style="font-size: 80px;margin: 5px;color: white;">Filmovi:</h1>
	<br>
	<hr>


	<?php 
	session_start();

	include("connection.php");
	

	$sql= "SELECT * FROM filmovi ;";
	$result=mysqli_query($con, $sql);
	$resultCheck=mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row=mysqli_fetch_assoc($result)) {
			echo "<h1>" .$row['naslov']."</h1><br>";
			echo"<h2>" .$row['opis']."</h2><br>";
			echo "<h2>" .$row['zanr']."</h2><br>";
			echo"<h2>" .$row['scenarista']."</h2><br>";
			echo "<h2>" .$row['reziser']."</h2><br>";
			echo"<h2>" .$row['producent']."</h2><br>";
			echo "<h2>" .$row['glumci']."</h2><br>";
			echo "<h2>" .$row['godina']."</h2><br>";
			echo "<h2>" .$row['slika']."</h2><br>";
			echo "<h2>" .$row['trajanje']."</h2><br><br><br><hr>";
		}
	}

?>

<br>
<br>
	 
        
    <a href="logout.php" id="logout">Logout</a>
  



</body>
</html>