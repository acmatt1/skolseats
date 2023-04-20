<?php

session_start();

?>

<!--CSS-->
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

<img src="adam.jpg" style="width:21%; height:60%; position: fixed; Right:9%; bottom:10%;">
<img src="fans.jpg" style="width:21%; height:60%; position: fixed; Right:72%; bottom:10%;">

<!--Form Field-->
<center><form action="SkolUserEdit.inc.php" method="POST"><fieldset>
<legend>Update Information</legend><br>
<label for="name">Full name:</label>
<input type="text" id="name" name="name"><br><br><br>

<label for="address">Address:</label>
<input type="text" id="address" name="address" maxlength="100" size="10" ><br><br><br>

<label for="city">City:</label>
<input type="text" id="city" name="city" maxlength="100" size="10" ><br><br><br>

<label for="state">State:</label>
<input type="text" id="state" name="state" maxlength="20" size="10" ><br><br><br>

<label for="zip">ZIP:</label>
<input type="text" id="zip" name="zip" maxlength="10" size="10" ><br><br><br>

<label for="phone">Phone Number:</label>
<input type="text" id="phone" name="phone" maxlength="12" size="12" placeholder="XXX-XXX-XXXX"><br><br><br>

<label for="email">E-Mail Address:</label>
<input type="text" id="email" name="email"><br><br><br>

<label for="password">Password:</label>
<input type="password" id="password" name="password"><br><br><br>

<label for="password2">Re-Enter Password:</label>
<input type="password" id="password2" name="password2"><br><br><br>

<button type="submit" name="submit" id="submit">Submit</button>
<button type="submit" id="previous" formaction="SkolAccount.php">Previous Page</button>
</fieldset>
</form> 
</center>


<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;"></a></center>
<br>
?>