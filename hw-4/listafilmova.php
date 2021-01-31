<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" href="style.css">


		<?php 
	session_start();

	include("connection.php");
	

	$sql= "SELECT * FROM filmovi ;";
	$result=mysqli_query($con, $sql);
	$resultCheck=mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row=mysqli_fetch_assoc($result)) {

			echo "<h2>"  .$row['naslov']."</h2> <br>";
			



		}
	}

?>

<a href="admin_home.php"><p style="font-size: 20px;margin: 5px;color: white;">ADMIN</p></a>
</head>
<body>

</body>
</html>