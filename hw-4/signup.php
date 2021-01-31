<?php 
session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($username)  )
		{

			
			$user_id = random_num(20);
			$query = "insert into login (user_id,name,surname,username,email,password) values ('$user_id','$name','$surname',
			'$username','$email','$password')";

			mysqli_query($con, $query);

			header("Location: home.php");
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
	<title>Signup</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

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
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="name">Name<br><br>
			<input id="text" type="text" name="surname">Surname<br><br>
			<input id="text" type="text" name="username">Username<br><br>
			<input id="text" type="text" name="email">Email<br><br>
			<input id="text" type="password" name="password">Password<br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php"><p style="font-size: 20px;margin: 5px;color: white;">Click to Login</p></a><br><br>
		</form>
	</div>
</body>
</html>