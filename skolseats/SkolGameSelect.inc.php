<?php

if (isset($_POST["submit"])) {

	$game = $_POST["games"];
	$seats = $_POST["seats"];
	$qty = $_POST["qty"];

	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	if (!$qty) {
		header("location: SkolGameSelect.php?error=emptyinput");
		exit();
	}
	
	createTicket($conn, $game, $seats, $qty);
	
	
}
else {
	header("location: SkolAccount.php");
	exit();
}