<?php

	session_start();

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	$remoteUserAccount = $_POST["userLookup"];
	
	if ($remoteUserAccount){
		lookup_user($conn, $remoteUserAccount);
	}
	else {
		header("location: SkolAdmin.php?error=emptyinput");
		exit();
	}
	
		
	
		
		