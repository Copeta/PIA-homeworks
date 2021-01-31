<?php 
session_start();

	include("connection.php");
	include("function2.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$naslov = $_POST['naslov'];
		

		if(!empty($naslov)  )
		{

             $sql = "DELETE FROM filmovi WHERE naslov='$naslov'";

             if ($con->query($sql) === TRUE) {
                  header("Location: admin_home.php");
                 } else {
                 echo "Error : " . $con->error;
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
	<h1>OBRISI FILM</h1>
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
			<div style="font-size: 20px;margin: 10px;color: white;">Unesi naslov filma!</div>

			<input id="text" type="text" name="naslov">NASLOV<br><br>
			

			<input id="button" type="submit" value="Obrisi"><br><br>

			<a href="admin_home.php"><p style="font-size: 20px;margin: 5px;color: white;">Admin strana</p></a><br><br>
		</form>
	</div>
</body>
</html>