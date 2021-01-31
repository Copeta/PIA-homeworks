<?php 

session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) )
		{

			//read from database
			$query = "select * from login where username = '$username' limit 1";
			$result = mysqli_query($con, $query);



			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						if ( $user_data['user_id']<10) {
							
						header("Location: admin_home.php");
						}

						else  {
							
						
						header("Location: home.php");
						die;
					  }
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="username"><p style="font-size: 20px;margin: 5px;color: white;">Username</p><br><br>
			<input id="text" type="password" name="password"><p style="font-size: 20px;margin: 5px;color: white;">Password</p><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php"><p style="font-size: 20px;margin: 5px;color: white;">Click to Signup</p></a><br><br>
		</form>
	</div>
</body>
</html>