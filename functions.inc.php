<?php

function getRows($conn,$query,$params=[]){
		$stmt = $conn->prepare($query);
		$stmt->execute($params);
		$resultSet = $stmt->get_result();
		$data = $resultSet->fetch_all(MYSQLI_ASSOC);
		
		return $data;
	}
	

function emptyInputSignup($name, $address, $city, $state, $zip, $phone, $email, $username, $password, $password2) {
	
	$result;
	
	if (empty($name) || empty($address) || empty($city) || empty($state) || empty($zip) || empty($phone) || empty($email) || empty($username) || empty($password)) {
		$result = true;
	}
	else {
		$result = false;
	}

	return $result;
	
}

function emptyInputLogin($username,$password) {
	
	$result;
	
	if (empty($username) || empty($password)) {
		$result = true;
	}
	else {
		$result = false;
	}

	return $result;
}

function invalidEmail($email) {
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	
	return $result;
}

function pwdMatch($password, $password2) {
	
	$result;
	if ($password !== $password2) {
		$result = true;
	}
	else {
		$result = false;
	}
	
	return $result;
}

function uidExists($conn, $username, $email) {
	$sql = "SELECT * FROM customer WHERE cust_username = ? OR cust_email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: SkolSignIn.php?error=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
		
	mysqli_stmt_close($stmt);
}


	
	

function createUser($conn, $name, $address, $city, $state, $zip, $phone, $email, $username, $password) {
	
	$sql = "INSERT INTO customer (cust_name, cust_address, cust_city, cust_state, cust_zip, cust_phone, cust_email, cust_username, cust_userpass) VALUES (?,?,?,?,?,?,?,?,?);";
	
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: .SkolSignIn.php?error=stmtfailed");
		exit();
	}
	
	$hashedpwd = PASSWORD_HASH($password, PASSWORD_DEFAULT);
	
	mysqli_stmt_bind_param($stmt, "sssssssss", $name, $address, $city, $state, $zip, $phone, $email, $username, $hashedpwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: SkolSeatsHomepage.php?error=none");
	exit();
	
}

function delete_user($conn, $accountToDelete) {
	$sql = "DELETE FROM customer WHERE cust_username = ?;";
	var_dump($accountToDelete);
	
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: .SkolSignIn.php?error=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "s", $accountToDelete);
	
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: SkolAdmin.php?error=none");
	exit();
	
}

function assignTicket($conn, $ticket_venue, $ticket_game, $ticket_customer, $ticket_seat){
	
	
	for($x=0; $x < sizeof($ticket_seat); $x++){
		$sql = "UPDATE ticket SET customer_id = ? WHERE venue_id = ? AND game_id = ? AND seat_id = ?;";
		
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolAccount.php?error=orderfailed");
			exit();
		}
		
		mysqli_stmt_bind_param($stmt, "iiii", $ticket_customer, $ticket_venue, $ticket_game, $ticket_seat[$x]);
		mysqli_stmt_execute($stmt);	
		mysqli_stmt_close($stmt);
	}


	
	
	header("location: SkolConfirmation.php?error=none");
	
	exit();
	
}

function assignTicketToUser($conn, $ticket, $customer){
	
	$query = "SELECT cust_id, cust_username FROM customer WHERE cust_username = '".$customer."';";
	
	if($r_set=$conn->query($query)){
		while($row=$r_set->fetch_assoc()){
			$customer_id = $row['cust_id'];
		}
	}
	
	
	$sql = "UPDATE ticket SET customer_id = ? WHERE ticket_id = ?;";
	
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: .SkolAccount.php?error=orderfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "ii", $customer_id, $ticket);
	mysqli_stmt_execute($stmt);	
	mysqli_stmt_close($stmt);	
	
	header("location: SkolAdmin.php?error=none");
	
	exit();
	
}

function createTicketVariables($conn, $game, array $seat_id){
		
	$_SESSION["ticket_venue"] = 1;
	
	$userAccount = uidExists($conn, $_SESSION["username"], $_SESSION["username"]);
	$_SESSION["ticket_customer"] = $userAccount['cust_id'];
	
	$_SESSION["ticket_game"] = $game;
	
	unset($_SESSION['ticket_cost']);
	unset($_SESSION['ticket_seat']);
	$_SESSION['ticket_seat']=[];
	
	var_dump($seat_id);
	for($x=0; $x < sizeof($seat_id); $x++){
		$query = "SELECT seat_id, seat_price FROM seat WHERE seat_id = '".$seat_id[$x]."';";
		if($r_set=$conn->query($query)){
			while($row=$r_set->fetch_assoc()){
				array_push($_SESSION['ticket_seat'], $row['seat_id']);
				$_SESSION["ticket_cost"] += $row['seat_price'];
			}
		}
	}
		
	header("location: SkolBillingShipping.php?error=none");
	
	exit();
	
}

function getTicket($conn){
	
	$sql = "select * from ticket where ticket_id= (SELECT MAX(ticket_id) FROM ticket);";	
	
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: SkolGameSelect.php?error=orderfailed");
		exit();
	}
	
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
		
	mysqli_stmt_close($stmt);
}

function getOrder($conn, $ticket_id){
	
	$sql = "select * from order where ticket_id = ?;";	
	
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: SkolGameSelect.php?error=orderfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "s", $ticket_id);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
		
	mysqli_stmt_close($stmt);
}

function updateTicket($conn, $order_id, $ticket_id){
	
	$sql = "UPDATE ticket SET order_id = ? WHERE ticket_id = ?;";
	
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: .SkolSignIn.php?error=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "ii", $order_id, $ticket_id);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
}


function createOrder($conn, $cust_id, $ticket_id, $order_price, $order_date) {
	
	static $count = '0';
	
	$sql = "INSERT INTO purchaseorder (cust_id, ticket_id, order_price, order_date) VALUES (?,?,?,?);";
	
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: .SkolSignIn.php?error=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "isss", $cust_id, $ticket_id, $order_price, $order_date);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: SkolConfirmation.php?error=none");

}

function updateUser($conn, $name, $address, $city, $state, $zip, $phone, $email, $password) {
	
	if(isset($_SESSION["username"])) {
		$userAccount = uidExists($conn, $_SESSION["username"], $_SESSION["username"]);
	}
	$sql = "";
	
	$hashedpwd = PASSWORD_HASH($password, PASSWORD_DEFAULT);
	
	if($name) {
		$sql = "UPDATE customer SET cust_name = ? WHERE cust_id = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolSignIn.php?error=stmtfailed");
			exit();
	
		}
		//$column = "customer_name";
		//mysqli_stmt_bind_param($stmt, "sss", $column, $name, $userAccount["cust_id"]);
		mysqli_stmt_bind_param($stmt, "ss", $name, $userAccount["cust_id"]);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	if($address) {
		$sql = "UPDATE customer SET cust_address = ? WHERE cust_id = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolSignIn.php?error=stmtfailed");
			exit();
	
		}
		
		mysqli_stmt_bind_param($stmt, "ss", $address, $userAccount["cust_id"]);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	if($city) {
		$sql = "UPDATE customer SET cust_city = ? WHERE cust_id = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolSignIn.php?error=stmtfailed");
			exit();
	
		}
		
		mysqli_stmt_bind_param($stmt, "ss", $city, $userAccount["cust_id"]);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	if($state) {
		$sql = "UPDATE customer SET cust_state = ? WHERE cust_id = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolSignIn.php?error=stmtfailed");
			exit();
	
		}
		
		mysqli_stmt_bind_param($stmt, "ss", $state, $userAccount["cust_id"]);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	if($zip) {
		$sql = "UPDATE customer SET cust_zip = ? WHERE cust_id = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolSignIn.php?error=stmtfailed");
			exit();
	
		}
		
		mysqli_stmt_bind_param($stmt, "ss", $zip, $userAccount["cust_id"]);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	if($phone) {
		$sql = "UPDATE customer SET cust_phone = ? WHERE cust_id = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolSignIn.php?error=stmtfailed");
			exit();
	
		}
		
		mysqli_stmt_bind_param($stmt, "ss", $phone, $userAccount["cust_id"]);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	if($email) {
		if (invalidEmail($email) !== false) {
			header("location: SkolUpdate.php?error=invalidemail");
			exit();
		}
		else{
			$sql = "UPDATE customer SET cust_email = ? WHERE cust_id = ?;";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)) {
				header("location: .SkolSignIn.php?error=stmtfailed");
				exit();
			}
	
		
			mysqli_stmt_bind_param($stmt, "ss", $email, $userAccount["cust_id"]);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
		}
	}
	if($password) {
		$sql = "UPDATE customer SET cust_userpass = ? WHERE cust_id = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolSignIn.php?error=stmtfailed");
			exit();
	
		}
		
		mysqli_stmt_bind_param($stmt, "ss", $hashedpwd, $userAccount["cust_id"]);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	
	header("location: SkolAccount.php");
	exit();
}

function updateRemoteUser($conn, $name, $address, $city, $state, $zip, $phone, $email, $password) {
	
	if(isset($_SESSION["userLookup"])) {
		$userAccount = uidExists($conn, $_SESSION["userLookup"], $_SESSION["userLookup"]);
	}
	$sql = "";
	
	$hashedpwd = PASSWORD_HASH($password, PASSWORD_DEFAULT);
	
	if($name) {
		$sql = "UPDATE customer SET cust_name = ? WHERE cust_id = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolSignIn.php?error=stmtfailed");
			exit();
	
		}
		//$column = "customer_name";
		//mysqli_stmt_bind_param($stmt, "sss", $column, $name, $userAccount["cust_id"]);
		mysqli_stmt_bind_param($stmt, "ss", $name, $userAccount["cust_id"]);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	if($address) {
		$sql = "UPDATE customer SET cust_address = ? WHERE cust_id = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolSignIn.php?error=stmtfailed");
			exit();
	
		}
		
		mysqli_stmt_bind_param($stmt, "ss", $address, $userAccount["cust_id"]);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	if($city) {
		$sql = "UPDATE customer SET cust_city = ? WHERE cust_id = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolSignIn.php?error=stmtfailed");
			exit();
	
		}
		
		mysqli_stmt_bind_param($stmt, "ss", $city, $userAccount["cust_id"]);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	if($state) {
		$sql = "UPDATE customer SET cust_state = ? WHERE cust_id = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolSignIn.php?error=stmtfailed");
			exit();
	
		}
		
		mysqli_stmt_bind_param($stmt, "ss", $state, $userAccount["cust_id"]);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	if($zip) {
		$sql = "UPDATE customer SET cust_zip = ? WHERE cust_id = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolSignIn.php?error=stmtfailed");
			exit();
	
		}
		
		mysqli_stmt_bind_param($stmt, "ss", $zip, $userAccount["cust_id"]);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	if($phone) {
		$sql = "UPDATE customer SET cust_phone = ? WHERE cust_id = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolSignIn.php?error=stmtfailed");
			exit();
	
		}
		
		mysqli_stmt_bind_param($stmt, "ss", $phone, $userAccount["cust_id"]);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	if($email) {
		if (invalidEmail($email) !== false) {
			header("location: SkolUpdate.php?error=invalidemail");
			exit();
		}
		else{
			$sql = "UPDATE customer SET cust_email = ? WHERE cust_id = ?;";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)) {
				header("location: .SkolSignIn.php?error=stmtfailed");
				exit();
			}
	
		
			mysqli_stmt_bind_param($stmt, "ss", $email, $userAccount["cust_id"]);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
		}
	}
	if($password) {
		$sql = "UPDATE customer SET cust_userpass = ? WHERE cust_id = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: .SkolSignIn.php?error=stmtfailed");
			exit();
	
		}
		
		mysqli_stmt_bind_param($stmt, "ss", $hashedpwd, $userAccount["cust_id"]);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	
	header("location: SkolAccount.php");
	exit();
}

function loginUser($conn, $username, $pwd) {
	$uidExists = uidExists($conn, $username, $username);
	
	if ($uidExists === false) {
		header("location: SkolSignIn.php?error=userdoesnotexist");
		exit();
	}
	
	$password = $uidExists["cust_userpass"];
	$checkPwd = password_verify($pwd, $password);
	
	if($checkPwd == false) {
		echo '<script>alert($pwd)</script>';
		echo '<script>alert($password)</script>';
		header("location: SkolSignIn.php?error=wronglogin");
		exit();
	}
	else if($checkPwd === true){
		session_start();
		$_SESSION["userid"] = $uidExists["cust_name"];
		$_SESSION["username"] = $uidExists["cust_username"];
		header("location: SkolSeatsHomepage.php");
		exit();
	}
	
}
	
function lookup_user($conn, $username){
	$uidExists = uidExists($conn, $username, $username);
	
	if ($uidExists === false) {
		header("location: SkolAdmin.php?error=userdoesnotexist");
		exit();
	}
	
	session_start();
	$_SESSION["userLookup"] = $uidExists["cust_username"];
	header("location: SkolAccountLookup.php");
	exit();
}
	