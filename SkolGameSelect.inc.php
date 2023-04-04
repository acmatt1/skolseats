<?php

session_start();

if (isset($_POST["proceed"])) {

	$game = $_POST["games"];
	$seat_row = $_POST["seatsrow"];
	$seat_number = $_POST["seatnumber"];

	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	if (!$game||!$seat_row||!$seat_number) {
		header("location: SkolGameSelect.php?error=emptyinput");
		exit();
	}
	
	createTicketVariables($conn, $game, $seat_row, $seat_number);
	
	
}
else {
	header("location: SkolAccount.php");
	exit();
}