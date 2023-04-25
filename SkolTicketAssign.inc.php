<?php

	session_start();

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	$ticket = $_SESSION["ticket_id"];
	$customer = $_POST["ticketReassign"];
	
	assignTicketToUser($conn, $ticket, $customer);
