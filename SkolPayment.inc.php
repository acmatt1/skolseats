<?php

	session_start();

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	$venue = $_SESSION["ticket_venue"];
	$customer = $_SESSION["ticket_customer"];
	$game = $_SESSION["ticket_game"];
	$seat = $_SESSION["ticket_seat"];
	
	createTicket($conn, $venue, $customer, $game, $seat);
