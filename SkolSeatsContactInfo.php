<?php

session_start();

//CSS
echo '<head>';
echo '<center><a href="SkolSeatsHomepage1.php"><img src="SKOLSEATS1.JPG"><center></a><br>';
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
   select {
    font-family: Arial Black;
    font-size: 18px;
    color: #7F00FF;
    position: fixed;
    left: 44%;
   }
   label {
    font-family: Arial Black;
    color: #FFFF00;
    font-size: 24px;
    position: fixed;
    left: 34%;
   }
   #submit {
    font-family: Arial Black;
    color: #7F00FF;
    font-size: 18px;
    position: fixed;
    left: 47%;
    width: 20%;
    bottom: 5%
   }
   #previous {
    font-family: Arial Black;
    color: #7F00FF;
    font-size: 18px;
    position: fixed;
    left: 33%;
    width: 10%;
    bottom: 5%
   }
   input {
    font-family: Arial Black;
    color: #7F00FF;
    font-size: 14px;
    position: fixed;
    left: 50%;
   }
  ';
echo '</style>';
echo '</head>';

//Header options
echo '<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:8%;"><a href ="SkolSeatsHomepage1.php">Home</a></p>';
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

echo '<img src="adam.jpg" style="width:21%; height:60%; position: fixed; Right:9%; bottom:10%;">';
echo '<img src="fans.jpg" style="width:21%; height:60%; position: fixed; Right:72%; bottom:10%;">';

//Form Field
echo '<center><form action="SkolBillingShipping.php" method="POST"><fieldset>
<legend>Contact Information</legend><br>
<label for="fname">First name:</label>
<input type="text" id="fname" name="fname"><br><br><br><br>

<label for="lname">Last name:</label>
<input type="text" id="lname" name="lname"><br><br><br><br>

<label for="dob">Date of Birth:</label>
<input type="text" id="dob" name="dob" maxlength="10" size="10" placeholder="MM/DD/YYYY"><br><br><br><br>

<label for="phone">Phone Number:</label>
<input type="text" id="phone" name="phone" maxlength="12" size="12" placeholder="XXX-XXX-XXXX"><br><br><br><br>

<label for="email">E-Mail Address:</label>
<input type="text" id="email" name="lname"><br><br><br>

<button type="submit" id="submit">Proceed to Billing and Shipping</button>
<button type="submit" id="previous" formaction="SkolGameSelect.php">Previous Page</button>
</fieldset>
</form> 
</center>';


echo '<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;></a></center>';
echo '<br>';
?>