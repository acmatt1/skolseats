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
if(isset($_SESSION["userid"])) {
	echo '<p align="left"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:15%;"><a href ="SkolSignOut.php">Sign Out</a></p>';
}
else{
	echo '<p align="left"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:15%;"><a href ="SkolSignIn.php">Sign In</a></p>';
}
?>
<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:22%;"><a href ="SkolAccount.php">My Account</a></p>
<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 12%;"><a href ="SkolHelp.php">Help</a></p>
<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 18%;"><a href ="https://shop.vikings.com/en/minnesota-vikings/t-47267040+z-9997303-2329085382?_s=gppc&utm_campaign=NFL+-+Minnesota+Vikings+-+Brand+-+US+-+EN|16726709255&utm_medium=ppc&ks_id=6248_kw49762789&utm_term=vikings%20team%20store&matchtype=e&utm_source=g&target=kwd-378011627914&pcrid=590230914159&adposition=">Team Store</a></p>
<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 27%;"><a href ="SkolGameSelect.php">Buy</a></p>


<!--Body Images-->

<img src="Jefferson.jpg" style="width:21%; height:60%; position: fixed; Right:9%; bottom:10%;">
<img src="fan2.jpg" style="width:21%; height:60%; position: fixed; Right:72%; bottom:10%;">

<!--Form Field-->
<center><form action="SkolPayment.inc.php" method="POST">
<fieldset id="f3">
<legend>Payment Method</legend><br>

<label for="visalabel" id= "visalabel">Visa</label>
<input type="radio" id="visa" name="visa">

<label for="amexlabel" id= "amexlabel">Amex</label>
<input type="radio" id="amex" name="amex">

<label for="masterlabel" id= "masterlabel">Master</label>
<input type="radio" id="master" name="master">

<label for="discoverlabel" id= "discoverlabel">Discover</label>
<input type="radio" id="discover" name="discover">

<label for="cardnamelabel" id= "cardnamelabel">Name on Card:</label>
<input type="text" id="cardname" name="cardname">

<label for="cardnumlabel" id= "cardnumlabel">Card Number:</label>
<input type="text" id="cardnum" name="cardnum">

<label for="expirylabel" id= "expirylabel">Expiration:</label>
<input type="text" id="expiry" name="expiry" maxlength="5" size="5" placeholder="MM/YY">

<label for="cvvlabel" id= "cvvlabel">CVV:</label>
<input type="text" id="cvv" name="cvv" maxlength="4" size="14">

<label for="total" id="total">Total cost: $<?php echo $_SESSION['ticket_cost']?></label>


<button type="submit" id="submit">Confirm Purchase</button>
<button type="submit" id="previous" formaction="SkolBillingShipping.php">Previous Page</button>
</fieldset>
</form> 
</center>


<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;"</a></center>
<br>