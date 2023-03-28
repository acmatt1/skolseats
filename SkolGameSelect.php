<?php

session_start();

echo'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css">';

//CSS
echo '<head>';
echo '<center><a href="SkolSeatsHomepage.php"><img src="SKOLSEATS.JPG"><center></a><br>';
echo '<style>';
echo 'fieldset {
    background-color: #7F00FF;
    position: fixed;
    width: 36%;
    height: 80%;
    bottom: 1%;
    left: 30%;
  }
  body {
    background-image: url("yellow.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
    position: fixed;
    width: 100%;
    height: 150%; 
   }
  legend {
    background-color: #FFFF00; 
    font-family: Arial Black;
    color: #7F00FF;
    font-size: 24px;
   }
   input{
    font-family: Arial Black;
   }
   #games {
    font-family: Arial;
    font-size: 18px;
    color: #7F00FF;
    position: fixed;
    left: 55%;
    bottom: 72%;
   }
   #seats {
    font-family: Arial;
    font-size: 18px;
    color: #7F00FF;
    position: fixed;
    left: 55%;
    bottom: 66%;
   }
   #seatsqty {
    font-family: Arial;
    font-size: 18px;
    color: #7F00FF;
    position: fixed;
    left: 55%;
    bottom: 60%;
   }
   #gamelabel {
    font-family: Arial Black;
    font-size: 20px;
    color: #FFFF00;
    position: fixed;
    left: 36%;
    bottom: 72%;
   }
   #seatslabel {
    font-family: Arial Black;
    color: #FFFF00;
    font-size: 20px;
    position: fixed;
    left: 36%;
    bottom: 66%;
   }
   #seatsqtylabel {
    font-family: Arial Black;
    color: #FFFF00;
    font-size: 20px;
    position: fixed;
    left: 36%;
    bottom: 60%;
   }
   button {
    font-family: Arial Black;
    color: #7F00FF;
    font-size: 24px;
    position: fixed;
    left: 31%;
    width: 34%;
    bottom: 5%
   }
  ';
echo '</style>';
echo '</head>';
//Header options
echo '<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:8%;"><a href ="SkolSeatsHomepage.php">Home</a></p>';
if(isset($_SESSION["userid"])) {
	echo '<p align="left"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:15%;"><a href ="SkolSignOut.php">Sign Out</a></p>';
}
else{
	echo '<p align="left"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:15%;"><a href ="SkolSignIn.php">Sign In</a></p>';
}
echo '<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:22%;"><a href ="SkolAccount.php">My Account</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 12%;"><a href ="SkolSeasonTickets.php">Help</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 18%;"><a href ="https://shop.vikings.com/en/minnesota-vikings/t-47267040+z-9997303-2329085382?_s=gppc&utm_campaign=NFL+-+Minnesota+Vikings+-+Brand+-+US+-+EN|16726709255&utm_medium=ppc&ks_id=6248_kw49762789&utm_term=vikings%20team%20store&matchtype=e&utm_source=g&target=kwd-378011627914&pcrid=590230914159&adposition=">Team Store</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 27%;"><a href ="SkolGameSelect.php">Buy</a></p>';


//Body Images
echo '<img src="Kirk.jpg" style="width:21%; height:60%; position: fixed; Right:9%; bottom:10%;">';
echo '<img src="mascott.jpg" style="width:21%; height:60%; position: fixed; Right:72%; bottom:10%;">';

//Form Fields

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(isset($_SESSION["username"])) {
	$userAccount = uidExists($conn, $_SESSION["username"], $_SESSION["username"]);
}
else{
	header("location: SkolSignIn.php");
	exit();
}

$query = "SELECT game_id,game_date,game_opponent FROM game;";
echo '<center><form action="SkolGameSelect.inc.php" method="post"><fieldset>
<legend>Game Selection</legend>
<label for="games" id="gamelabel">Game:</label>';
if($r_set=$conn->query($query)){
	echo "<SELECT id=s1 onChange='reload()' name=games class='form-control' style='width:200px;'>";
}

while($row=$r_set->fetch_assoc()){
	echo "<option value=$row[game_id]>$row[game_date] vs. $row[game_opponent]</option>";
}
echo '</select>';


$query2 = "SELECT DISTINCT seat_row,seat_section FROM seat;";
echo '<br><label for="seats" id="seatslabel">Seat row:</label>';
if($r_set=$conn->query($query2)){
	echo "<SELECT id=s2 name=seats class='form-control' style='width:200px;'>";
}

while($row=$r_set->fetch_assoc()){
	echo "<option value=$row[seat_section]>Section $row[seat_section] Row $row[seat_row] </option>";
}
echo '</select>';

$query3 = "SELECT DISTINCT seat_number FROM seat;";
echo '<br><label for="seatsqty" id="seatsqtylabel">Seats:</label>';
if($r_set=$conn->query($query3)){
	echo "<SELECT id=s3 name=seatsqty class='form-control' multiple style='width:200px;'>";
}

while($row=$r_set->fetch_assoc()){
	echo "<option value=$row[seat_number]>Seat $row[seat_number] </option>";
}
echo '</select>';


echo '<img src="seatingchart.jpg" style="width:25%; height:45%; position: fixed; Right:39%; bottom:12%;">
<button type="submit" name="submit">Proceed</button>
</fieldset>
</form> 
</center>';

echo '<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;></a></center>';
echo '<br>';
?>