<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>IMDB</title>
</head>
<body>
	<div class="container">
		
		<div class="header">
			<h2>Registracija</h2>
		</div>

		<form action="reg.php" method="post">
			
			<div>
				<label for="name">ime</label>
				<input type="text" name="name" required>

			</div>

			<div>
				<label for="surname">prezime</label>
				<input type="text" name="surname" required>

			</div>

			<div>
				<label for="email">email</label>
				<input type="email" name="email" required>

			</div>



			<div>
				<label for="username">korisnicko ime</label>
				<input type="text" name="username" required>

			</div>

			<div>
				<label for="password">lozinka</label>
				<input type="text" name="password" required>

			</div>

			<button type="submit" name="reg">Submit</button>

			<p>Imate nalog?<a href="login.php">Login</a></p>








		</form>

	</div>
	
</body>
</html>
 