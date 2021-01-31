<?php

$dbhost = "localhost";
$dbuser = "peca";
$dbpass = "peca123";
$dbname = "imdb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
