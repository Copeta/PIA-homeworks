<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>IMDB</title>
</head>
<body>
	<div class="container">
		
		<div class="header">
			<h2>Login</h2>
		</div>

		<form action="login.php" method="post">
			
		



			<div>
				<label for="username">korisnicko ime</label>
				<input type="text" name="username" required>

			</div>

			<div>
				<label for="password">lozinka</label>
				<input type="text" name="password" required >

			</div>

			<button type="submit" name="log">Login</button>

			<p>Nemate nalog?<a href="reg.php">Registracija</a></p>








		</form>

	</div>
	
</body>
</html>