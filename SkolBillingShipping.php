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

<img src="dalvin.jpg" style="width:21%; height:60%; position: fixed; Right:9%; bottom:10%;">
<img src="mpls.jpg" style="width:21%; height:60%; position: fixed; Right:72%; bottom:10%;">

<!--Form Field-->
<center><form action="SkolPayment.php" method="POST">
<fieldset id="f1">
<legend>Billing</legend><br>
<label for="fnamelabel1" id= "fnamelabel1">First name:</label>
<input type="text" id="fname1" name="fname1" maxlength="16" size="16">

<label for="lnamelabel" id= "lnamelabel1">Last name:</label>
<input type="text" id="lname1" name="lname1" maxlength="16" size="16">

<label for="addresslabel1" id= "addresslabel1">Address:</label>
<input type="text" id="address1" name="address1">

<label for="citylabel1" id= "citylabel1">City:</label>
<input type="text" id="city1" name="city1">

<label for=statelabel1" id= "statelabel1">State:</label>
<input type="text" id="state1" name="state1">

<label for=ziplabel1" id= "ziplabel1">Zip:</label>
<input type="text" id="zip1" name="zip1" maxlength="8" size="8">
</fieldset>

<fieldset id="f2">
<legend>Shipping</legend><br>
<label for="fnamelabel2" id= "fnamelabel2">First name:</label>
<input type="text" id="fname2" name="fname2" maxlength="16" size="16">

<label for="lnamelabel2" id= "lnamelabel2">Last name:</label>
<input type="text" id="lname2" name="lname2" maxlength="16" size="16">

<label for="addresslabel2" id= "addresslabel2">Address:</label>
<input type="text" id="address2" name="address2">

<label for="citylabel2" id= "citylabel2">City:</label>
<input type="text" id="city2" name="city2">

<label for=statelabel1" id= "statelabel2">State:</label>
<input type="text" id="state2" name="state2">

<label for=ziplabel2" id= "ziplabel2">Zip:</label>
<input type="text" id="zip2" name="zip2" maxlength="5" size="5">

<button type="submit" id="submit">Proceed to Payment Method</button>
<button type="submit" id="previous" formaction="SkolGameSelect.php">Previous Page</button>
</fieldset>
</form> 
</center>


<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;"></a></center>
<br>
