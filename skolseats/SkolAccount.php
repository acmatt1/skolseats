<?php

session_start();

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
    font-family: Bahnschrift;
    color: #7F00FF;
    font-size: 24px;
   }
   input{
    font-family: Bahnschrift;
   }
   select {
    font-family: Bahnschrift;
    font-size: 18px;
    color: #7F00FF;
    position: fixed;
    left: 44%;
   }
   label {
    font-family: Bahnschrift;
    color: #FFFF00;
    font-size: 24px;
    position: fixed;
    left: 34%;
   }
   #submit {
    font-family: Bahnschrift;
    color: #7F00FF;
    font-size: 18px;
    position: fixed;
    left: 47%;
    width: 20%;
    bottom: 5%
   }
     #register {
    font-family: Bahnschrift;
    color: #7F00FF;
    font-size: 18px;
    position: fixed;
    left: 47%;
    width: 20%;
    bottom: 5%
   }
   input {
    font-family: Bahnschrift;
    color: #7F00FF;
    font-size: 14px;
    position: fixed;
    left: 50%;
   }
   h2 {
    font-family: Bahnschrift;
    color: #FFFF00;
    font-size: 24px;
  ';
echo '</style>';
echo '</head>';




//Header options
echo '<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; left:8%;"><a href ="SkolSeatsHomepage.php">Home</a></p>';
if(isset($_SESSION["userid"])) {
	echo '<p align="left"; style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; left:15%;"><a href ="SkolSignOut.php">Sign Out</a></p>';
}
else{
	echo '<p align="left"; style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; left:15%;"><a href ="SkolSignIn.php">Sign In</a></p>';
}
echo '<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; left:22%;"><a href ="SkolAccount.php">My Account</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; right: 12%;"><a href ="SkolSeasonTickets.php">Help</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; right: 18%;"><a href ="https://shop.vikings.com/en/minnesota-vikings/t-47267040+z-9997303-2329085382?_s=gppc&utm_campaign=NFL+-+Minnesota+Vikings+-+Brand+-+US+-+EN|16726709255&utm_medium=ppc&ks_id=6248_kw49762789&utm_term=vikings%20team%20store&matchtype=e&utm_source=g&target=kwd-378011627914&pcrid=590230914159&adposition=">Team Store</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; right: 27%;"><a href ="SkolGameSelect.php">Buy</a></p>';


//Body Images

echo '<img src="adam.jpg" style="width:21%; height:60%; position: fixed; Right:9%; bottom:10%;">';
echo '<img src="fans.jpg" style="width:21%; height:60%; position: fixed; Right:72%; bottom:10%;">';

//Form Field


require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(isset($_SESSION["username"])) {
	$userAccount = uidExists($conn, $_SESSION["username"], $_SESSION["username"]);
}
else{
	header("location: SkolSignIn.php");
	exit();
}

//$tickets = getTicketsForUser($conn, $userAccount['cust_id']);

echo '<center><fieldset>
<legend>Account Information</legend><br>';

echo "</p><h2>Name: " , $userAccount["cust_name"];
echo "</p><h2>Address: " , $userAccount["cust_address"];
echo "</p><h2>City: " , $userAccount["cust_city"];
echo "</p><h2>State: " , $userAccount["cust_state"];
echo "</p><h2>ZIP: " , $userAccount["cust_zip"];
echo "</p><h2>Phone Number: " , $userAccount["cust_phone"];
echo "</p><h2>E-Mail Address: " , $userAccount["cust_email"];
echo "</p><h2>Username: " , $userAccount["cust_username"];
/*echo "</p><h2>My Tickets: ";

for ($i = 0; $i < sizeof($tickets); $i++){
	echo "<h2>Venue: " , $tickets["$i"]["1"] , "\t\tOpposing Team: " , $tickets["$i"]["3"] , "\t\tSeat: " , $tickets["$i"]["4"] , "\t\tDate: " , $tickets["$i"]["5"];
	echo "<h2>Time: " , $tickets["$i"]["6"] , "\t\tTotal Cost: " , $tickets["$i"]["7"];
}



print_r($tickets);*/




echo '<center><form action="SkolUpdate.php" method="POST">
<button type="submit" name="submit" id="register">Edit Info</button>
</form>'; 




echo '<center><form action="SkolUpdate.php" method="POST">
<button type="submit" name="submit" id="register">Edit Info</button>
</form>'; 

echo '</fieldset>
</center>';

echo '<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;></a></center>';
echo '<br>';


