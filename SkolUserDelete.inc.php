<?php

	session_start();

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	$accountToDelete = $_SESSION["userLookup"];
	
	if ($accountToDelete){
		$userpass = $_POST['deletePwd'];
		$uidExists = uidExists($conn, $_SESSION['username'], $_SESSION['username']);
		$password = $uidExists['cust_userpass'];
		$checkPwd = password_verify($userpass, $password);
		
		if($checkPwd == false) {
			header("location: SkolAccountLookup.php?error=wrongpassword");
			exit();
		}
		else if($checkPwd === true){
			delete_user($conn, $accountToDelete);
			header("location: SkolAdmin.php");
			exit();
		}
	}
	else {
		header("location: SkolAccountLookup.php?error=deletefailed");
		exit();
	}
	
		
	
		
		