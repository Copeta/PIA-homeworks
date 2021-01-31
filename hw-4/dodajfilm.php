<?php 
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

			
			$user_id = random_num(20);
			$query = "insert into filmovi (user_id,naslov,opis,zanr,scenarista,reziser,producent,glumci,
			godina, trajanje) values ('$user_id','$naslov','$opis','$zanr','$scenarista','$reziser'
			'$procent','$glumci','$godina','$slika','$trajanje')";

			mysqli_query($con, $query);

			header("Location: admin_home.php");
			die;
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
	<h1>DODAJ FILM</h1>
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
			<div style="font-size: 20px;margin: 10px;color: white;">Dodaj film</div>

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

			<input id="button" type="submit" value="Dodaj"><br><br>

			<a href="admin_home.php"><p style="font-size: 20px;margin: 5px;color: white;">Admin strana</p></a><br><br>
		</form>
	</div>
</body>
</html>