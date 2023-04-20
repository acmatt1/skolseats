<?php

session_start();
require_once 'dbh.inc.php';
require_once 'functions.inc.php';




$games = getRows($conn, "SELECT games.game_id, games.game_date, team.opp_team_name FROM games INNER JOIN team ON games.game_opponent = team.opp_team_id;");
$seatrows = getRows($conn, "select distinct seat.seat_section, seat.seat_row from seat inner join ticket on seat.seat_id = ticket.seat_id where ticket.game_id='1' and ticket.customer_id = '0';");
$seatnumbers = getRows($conn, "select seat.seat_number, seat.seat_id from seat inner join ticket on seat.seat_id = ticket.seat_id where seat.seat_row = 'F' and game_id='1' and customer_id='0';");

?>


<head>
<center><a href="SkolSeatsHomepage.php"><img src="SKOLSEATS.JPG"><center></a><br>
<link rel="stylesheet" href="style.php" media="screen">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


</head>

<!--Header options-->
<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:8%;"><a href ="SkolSeatsHomepage.php">Home</a></p>

<?php
if(isset($_SESSION["userid"])) {
	echo '<p align="left"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:15%;"><a href ="SkolSignOut.php">Sign Out</a></p>';
}
else{
	echo '<p align="left"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:15%;"><a href ="SkolSignIn.php">Sign In</a></p>';
}
?>

<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:22%;"><a href ="SkolAccount.php">My Account</a></p>
<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 12%;"><a href ="SkolSeasonTickets.php">Help</a></p>
<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 18%;"><a href ="https://shop.vikings.com/en/minnesota-vikings/t-47267040+z-9997303-2329085382?_s=gppc&utm_campaign=NFL+-+Minnesota+Vikings+-+Brand+-+US+-+EN|16726709255&utm_medium=ppc&ks_id=6248_kw49762789&utm_term=vikings%20team%20store&matchtype=e&utm_source=g&target=kwd-378011627914&pcrid=590230914159&adposition=">Team Store</a></p>
<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 27%;"><a href ="SkolGameSelect.php">Buy</a></p>


<!--Body Images-->
<img src="Kirk.jpg" style="width:21%; height:60%; position: fixed; Right:9%; bottom:10%;">
<img src="mascott.jpg" style="width:21%; height:60%; position: fixed; Right:72%; bottom:10%;">

<!--Form Fields-->
<?php

if(isset($_SESSION["username"])) {
	$userAccount = uidExists($conn, $_SESSION["username"], $_SESSION["username"]);
}
else{
	header("location: SkolSignIn.php");
	exit();
}

?>

<center><form action="SkolGameSelect.inc.php" method="post"><fieldset>
<legend>Game Selection</legend>
<label for="games" id="gamelabel">Game:</label>
	<select name="games" id="games" onchange="fetchSeatRows(this.value)">
		<option value=''>Select a game</option>
		<?php
		foreach($games as $game){
		  
		?>
		<option value="<?php echo $game['game_id'];?>"><?php echo $game['game_date'].' vs. '.$game['opp_team_name'];?></option>
		
		<?php } ?>
	</select>
<br><br>
<label for="seatsrow" id="seatsrowlabel">Row:</label>
	<select name="seatsrow" id="seatsrow" onchange="fetchSeatNumbers(this.value)">
	  <option value=''>Select a row</option>
		<?php
		foreach($seatrows as $seatrow){
		  
		?>
		<option value="<?php echo $seatrow['seat_row'];?>"><?php echo 'Section '.$seatrow['seat_section'].' Row '.$seatrow['seat_row'];?></option>
		
		<?php } ?>
	</select>
<br><br>
<label for="seatnumber" id="seatnumberlabel">Seats:</label>
	<select name="seatnumber" id="seatnumber">
	  <option value=''>Select a seat</option>
		<?php
		foreach($seatnumbers as $seatnumber){
		  
		?>
		<option value="<?php echo $seatnumber['seat_id'];?>"><?php echo 'Seat '.$seatnumber['seat_number'];?></option>
		
		<?php } ?>
	</select>


<img src="seatingchart.jpg" style="width:25%; height:45%; position: fixed; Right:39%; bottom:12%;">
<button type="submit" name="proceed" id="proceed">Proceed</button>
</fieldset>
</form> 
</center>



<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;"></a></center>';
<br>

<script>
	function fetchSeatRows(id){
		$("#seatsrow").html('');
		$("#seatnumber").html('<option>Select a seat</option>');
		$.ajax({
			type:'post',
			url:'getdata.php',
			data:{game_id :id},
			success:function(data){
				$('#seatsrow').html(data);
			}
		})
	}
	
	function fetchSeatNumbers(row){
		$("#seatnumber").html('<option>Select a seat</option>');
		$.ajax({
			type:'post',
			url:'getdata.php',
			data:{seat_row :row},
			success:function(data){
				$('#seatnumber').html(data);
			}
		})
	}

</script>