<?php 

session_start();
require_once 'dbh.inc.php';
require_once 'functions.inc.php';


if(isset($_POST['game_id'])){
	$id = $_POST['game_id'];
	$_SESSION['game_id'] = $_POST['game_id'];
	$seatrows = getRows($conn,"select distinct seat.seat_section, seat.seat_row from seat inner join ticket on seat.seat_id = ticket.seat_id where ticket.game_id=? and ticket.customer_id = '0';",["$id"]);

	
	if($seatrows != NULL){
		echo '<option value="">--Select Row--</option>';
		foreach($seatrows as $seatrow){
			echo '<option value="'.$seatrow['seat_row'].'">'.$seatrow['seat_row'].'</option>';
		}
	}
	else{
		echo '<option value="">No seats found!</option>';
	}
	
	
}

if(isset($_POST['seat_row'])){
	$row_id = $_POST['seat_row'];
	$id = $_SESSION['game_id'];
	$seatnumber = getRows($conn,"select seat.seat_number, seat.seat_id from seat inner join ticket on seat.seat_id = ticket.seat_id where seat.seat_row = ? and game_id=? and customer_id='0';",["$row_id","$id"]);

	
	if($seatnumber != NULL){
		echo '<option value="">--Select seat--</option>';
		foreach($seatnumber as $seat){
			echo '<option value="'.$seat['seat_id'].'">'.$seat['seat_number'].'</option>';
		}
	}
	else{
		echo '<option value="">No seats found!</option>';
	}
	
	
}

?>
