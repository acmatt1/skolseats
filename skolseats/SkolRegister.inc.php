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
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];

	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	if (emptyInputSignup($name, $address, $city, $state, $zip, $phone, $email, $username, $password, $password2) !== false) {
		header("location: SkolSignIn.php?error=emptyinput");
		exit();
	}
	
	if (invalidEmail($email) !== false) {
		header("location: SkolSignIn.php?error=invalidemail");
		exit();
	}
	
	if (uidExists($conn, $username, $email) !== false) {
		header("location: SkolSignIn.php?error=usernametaken");
		exit();
	}
	
	if (pwdMatch($password, $password2)) {
		header("location: SkolSignIn.php?error=passwordsdontmatch");
		exit();
	}
	
	createUser($conn, $name, $address, $city, $state, $zip, $phone, $email, $username, $password);
	
}
else {
	header("location: SkolRegister.php");
}