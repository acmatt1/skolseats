<?php

session_start();

if (isset($_POST["submit"])) {

	$name = $_POST["name"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zip = $_POST["zip"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];

	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	
	if (pwdMatch($password, $password2)) {
		header("location: SkolUpdate.php?error=passwordsdontmatch");
		exit();
	}
	
	updateUser($conn, $name, $address, $city, $state, $zip, $phone, $email, $password);
		
}
else {
	header("location: SkolAccount.php");
}