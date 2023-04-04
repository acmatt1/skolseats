<?php

session_start();

?>


<head>
<center><a href="SkolSeatsHomepage.php"><img src="SKOLSEATS.JPG"><center></a><br>
<link rel="stylesheet" href="style.php" media="screen">

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
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(isset($_SESSION["username"])) {
	$userAccount = uidExists($conn, $_SESSION["username"], $_SESSION["username"]);
}
else{
	header("location: SkolSignIn.php");
	exit();
}

$query = "SELECT games.game_id, games.game_date, team.opp_team_name FROM games INNER JOIN team ON games.game_opponent = team.opp_team_id;";
echo '<center><form action="SkolGameSelect.inc.php" method="post"><fieldset>
<legend>Game Selection</legend>
<label for="games" id="gamelabel">Game:</label>';
if($r_set=$conn->query($query)){
	echo "<SELECT name=games id=games class='form-control' style='width:240px;'>";
}

while($row=$r_set->fetch_assoc()){
	echo "<option value=$row[game_id]>$row[game_date] vs. $row[opp_team_name]</option>";
}
echo '</select>';


$query2 = "SELECT DISTINCT seat_row,seat_section FROM seat;";
echo '<br><label for="seatsrow" id="seatsrowlabel">Seat row:</label>';
if($r_set=$conn->query($query2)){
	echo "<SELECT name=seatsrow id=seatsrow class='form-control' style='width:240px;'>";
}

while($row=$r_set->fetch_assoc()){
	echo "<option value=$row[seat_row]>Section $row[seat_section] Row $row[seat_row] </option>";
}
echo '</select>';

$query3 = "SELECT DISTINCT seat_number FROM seat;";
echo '<br><label for="seatnumber" id="seatnumberlabel">Seat:</label>';
if($r_set=$conn->query($query3)){
	echo "<SELECT name=seatnumber id=seatnumber class='form-control' style='width:240px;'>";
}

while($row=$r_set->fetch_assoc()){
	echo "<option value=$row[seat_number]>Seat $row[seat_number] </option>";
}
echo '</select>';
?>


<img src="seatingchart.jpg" style="width:25%; height:45%; position: fixed; Right:39%; bottom:12%;">
<button type="submit" name="proceed" id="proceed">Proceed</button>
</fieldset>
</form> 
</center>

<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;"></a></center>';
<br>
?>