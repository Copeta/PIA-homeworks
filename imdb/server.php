<?php 

session_start();

$username="";
$email="";

$errors = array();


$conn=mysqli_connect('localhost','peca','peca123','imdb');


$name = mysql_real_escape_string($conn, $_POST['name']);
$surname = mysql_real_escape_string($conn, $_POST['surname']);
$email = mysql_real_escape_string($conn, $_POST['email']);
$username = mysql_real_escape_string($conn, $_POST['username']);
$password = mysql_real_escape_string($conn, $_POST['password']);

$user_check= "SELECT * FROM login WHERE username= '$username' or email ='$email' LIMIT 1";

$result= mysql_query($conn, $user_check);
$user=mysql_fetch_assoc($result); 

if ($user) {

	if ($user['username']=== $username) {
		array_push($errors, "Kosisnicko ime je zauzeto!");
		# code...
	}

	if ($user['email']=== $email) {
		array_push($errors, "Email  je zauzet!");
		# code...
	}
	# code...
}


if(count($errors)==0){

	$query="INSERT INTO login (nema, surname, email, username, password) VALUES ('$name', '$surname','$email', '$username','$password')";

	mysql_query($conn,$query);
	header('location: home.php');
}




 ?>