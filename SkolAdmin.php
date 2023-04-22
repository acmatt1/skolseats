<?php

session_start();

?>
<!--CSS-->


	
<head>
<center><a href="SkolSeatsHomepage.php"><img src="SKOLSEATS1.JPG"><center></a><br>
<link rel="stylesheet" href="style.php" media="screen">

</head>




<!--Header options-->
<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:8%;"><a href ="SkolSeatsHomepage.php">Home</a></p>
<?php
echo'<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:8%;"><a href ="SkolSeatsHomepage.php">Home</a></p>';
if(isset($_SESSION["userid"])) {
	echo '<p align="left"; style="display:inline-block; font-family: Arial Black; color:purple; position: fixed; left:16%;"><a href ="SkolSignOut.php">Sign Out</a></p>';
}
else{
	echo '<p align="left"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:16%;"><a href ="SkolSignIn.php">Sign In</a></p>';
}
?>

<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:24%;"><a href ="SkolAccount.php">My Account</a></p>
<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 12%;"><a href ="SkolHelp.php">Help</a></p>
<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 18%;"><a href ="https://shop.vikings.com/en/minnesota-vikings/t-47267040+z-9997303-2329085382?_s=gppc&utm_campaign=NFL+-+Minnesota+Vikings+-+Brand+-+US+-+EN|16726709255&utm_medium=ppc&ks_id=6248_kw49762789&utm_term=vikings%20team%20store&matchtype=e&utm_source=g&target=kwd-378011627914&pcrid=590230914159&adposition=">Team Store</a></p>
<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 27%;"><a href ="SkolGameSelect.php">Buy</a></p>


<!--Body Images-->

<img src="adam.jpg" style="width:21%; height:60%; position: fixed; Right:9%; bottom:10%;">
<img src="fans.jpg" style="width:21%; height:60%; position: fixed; Right:72%; bottom:10%;">

<!--Form Field-->

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

?>
<!--$tickets = getTicketsForUser($conn, $userAccount['cust_id']);-->

<center><fieldset>
<legend>Admin Tools</legend><br>

</p><h2>User Lookup
<center><form action="SkolAccountLookup.inc.php" method="post">
<input type="text" id="userLookup" name="userLookup" maxlength="15" size="15">
<button type="submit" name="lookup" id="lookup">Find User</button>
</form> 
</p><br><br><h2>Assign tickets
<div id= "ticketGameLabel">Opponent:</div>
<div id= "ticketSectionLabel">Section:</div>
<div id= "ticketRowLabel">Row:</div>
<div id= "ticketSeatLabel">Seat number:</div>
<input type="text" id="ticketGame" name="ticketGame" maxlength="15" size="15">
<input type="text" id="ticketSection" name="ticketSection" maxlength="5" size="5">
<input type="text" id="ticketRow" name="ticketRow" maxlength="5" size="5">
<input type="text" id="ticketSeat" name="ticketSeat" maxlength="5" size="5">
<center><form action="SkolTicketAssign.php" method="POST">
<button type="submit" name="ticketAssign" id="ticketAssign">Find Ticket</button>
</form> 




<?php
if($userAccount['is_admin']=='0'){
	echo '<center><form action="SkolTickets.php" method="POST">';
	echo '<button type="submit" name="submit" id="mytix">My Tickets</button>';
	echo '</form>';
}
else if($userAccount['is_admin']=='1'){
	echo '<center><form action="SkolAdmin.php" method="POST">';
	echo '<button type="submit" name="submit" id="mytix">Admin Portal</button>';
	echo '</form>';
}
?>

<center><form action="SkolUpdate.php" method="POST">
<button type="submit" name="submit" id="editinfo">Edit Info</button>
</form> 

</fieldset>
</center>

<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;"></a></center>
<br>


