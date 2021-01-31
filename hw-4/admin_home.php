<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PAGE</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<h1>Hello <?php echo $user_data['username']; ?></h1>
	<br>
	<br>
	
	<h1>Admin</h1>
	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;

		
	}

	#button{

		padding: 10px;
		width: 100px;
		color: black;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>
	<div id="box">

	<a href="dodajfilm.php"><p style="font-size: 20px;margin: 5px;color: white;">Dodaj film</p></a><br><br>
	<a href="izmenifilm.php"><p style="font-size: 20px;margin: 5px;color: white;">Izmeni film</p></a><br><br>
	<a href="listafilmova.php"><p style="font-size: 20px;margin: 5px;color: white;">Lista filmova</p></a><br><br>
	<a href="obrisi.php"><p style="font-size: 20px;margin: 5px;color: white;">Obrisi film</p></a><br><br>

	<br>
	<a href="logout.php"><p style="font-size: 20px;margin: 5px;color: white;">Logout</p></a>

</div>
	
</body>
</html>