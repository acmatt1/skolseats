<?php

session_start();

if (isset($_POST["submit"])) {
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	

	if(isset($_SESSION["username"])) {
		$userAccount = uidExists($conn, $_SESSION["username"], $_SESSION["username"]);
	}
	
	$ticket = getTicket($conn);


	$customer_id = $userAccount["customer_id"];
	$ticket_id = $ticket["ticket_id"];
	$order_price = $ticket["ticket_price"];
	$current_date = strtotime("now");
	$order_date = date("Y-m-d", $current_date);
	
	createOrder($conn, $customer_id, $ticket_id, $order_price, $order_date);
	

	
}
else {
	header("location: SkolAccount.php");
	exit();
}