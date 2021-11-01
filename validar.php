<?php

$dbhost = "localhost";
$dbuser = "id17826099_harrypotter";
$dbpass = "C1x8|RLQZHL^dB-$";
$dbname = "id17826099_multimedios";



$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["username"];
$pass = $_POST["password"];

$query = mysqli_query($conn,"SELECT * FROM user WHERE user = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: post_login.php");
	
}
else if ($nr == 0) 
{
	//header("Location: login.html");
	//echo "No ingreso"; 
	echo "<script> alert('Error');window.location= 'login.html' </script>";
}
	


?>