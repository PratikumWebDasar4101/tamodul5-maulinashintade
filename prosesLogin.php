<?php 
session_start();

$user = array(
		"username"	=> "shinta",
		"password"	=> "12345678"
);
if ($user["username"] == $_POST["username"]) && $user["password"] == $_POST["password"] {
	$_SESSION["username"] = $user["username"];
	$_SESSION["user"] = $user;
	header("Location: login.php")
}else{
	header("Location: login.php")
}

 ?>
