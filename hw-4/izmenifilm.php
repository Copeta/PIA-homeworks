<<?php 
session_start();

	include("connection.php");
	include("function2.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$naslov = $_POST['naslov'];
		$opis = $_POST['opis'];
		$zanr = $_POST['zanr'];
		$scenarista = $_POST['scenarista'];
		$reziser = $_POST['reziser'];
		$producent = $_POST['producent'];
		$glumci = $_POST['glumci'];
		$godina = $_POST['godina'];
		$slika = $_POST['slika'];
		$trajanje = $_POST['trajanje'];

		if(!empty($naslov)  )
		{	
			if (!empty($opis)) {
				$sql = "UPDATE filmovi SET opis='$opis' WHERE naslov='$naslov'";
				
			}
			if (!empty($zanr)) {
				$sql = "UPDATE filmovi SET zanr='$zanr' WHERE naslov='$naslov'";
				
			}
			if (!empty($scenarista)) {
				$sql = "UPDATE filmovi SET scenarista='$scenarista' WHERE naslov='$naslov'";
				
			}
			if (!empty($reziser)) {
				$sql = "UPDATE filmovi SET reziser='$reziser' WHERE naslov='$naslov'";
				
			}
			if (!empty($producent)) {
				$sql = "UPDATE filmovi SET producent='$producent' WHERE naslov='$naslov'";
				
			}
			if (!empty($glumci)) {
				$sql = "UPDATE filmovi SET glumci='$glumci' WHERE naslov='$naslov'";
				
			}
			if (!empty($godina)) {
				$sql = "UPDATE filmovi SET godina='$godina' WHERE naslov='$naslov'";
				
			}
			if (!empty($slika)) {
				$sql = "UPDATE filmovi SET slika='$slika' WHERE naslov='$naslov'";
				
			}
			if (!empty($trajanje)) {
				$sql = "UPDATE filmovi SET trajanje='$trajanje' WHERE naslov='$naslov'";
				
			}

			
			
			
			
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>IZMENI FILM</h1>
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
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">IZMENI</div>

			<input id="text" type="text" name="naslov">NASLOV<br><br>
			<input id="text" type="text" name="opis">OPIS<br><br>
			<input id="text" type="text" name="zanr">ZANR<br><br>
			<input id="text" type="text" name="scenarista">SCENARISTA<br><br>
			<input id="text" type="text" name="reziser">REZISER<br><br>
			<input id="text" type="text" name="producent">PRODUCENT<br><br>
			<input id="text" type="text" name="glumci">GLUMCI<br><br>
			<input id="text" type="text" name="godina">GODINA<br><br>
			<input id="text" type="text" name="slika">SLIKA<br><br>
			<input id="text" type="text" name="trajanje">TRAJANJE<br><br>

			<input id="button" type="submit" value="IZMENI"><br><br>

			<a href="admin_home.php"><p style="font-size: 20px;margin: 5px;color: white;">Admin strana</p></a><br><br>
		</form>
	</div>
</body>
</html>