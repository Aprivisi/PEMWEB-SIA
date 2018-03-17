<?php
$username = $_REQUEST['usr'];
$password = $_REQUEST['pwd'];
if($username == "Aprivisi" and $password == "visi123") {
	setcookie("login", true, time() + 60);
	echo "You Have Succesfully Logged In!!  \n<br/> <br/> <br/>";
	require ("time.php") ;
} else echo "Login Gagal!";
?>