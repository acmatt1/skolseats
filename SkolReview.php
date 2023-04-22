<?php

session_start();

//SkolGameSelect POST
$games = $_POST['games'];
$seats = $_POST['seats'];

//SkolContactInfo POST
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$email = $_POST['email'];

//SkolBillingShipping POST
$fname1 = $_POST['fname1'];
$lname1 = $_POST['lname1'];
$address1 = $_POST['address1'];
$city1 = $_POST['city1'];
$state1 = $_POST['state1'];
$zip1 = $_POST['zip1'];

$fname2 = $_POST['fname2'];
$lname2 = $_POST['lname2'];
$address2 = $_POST['address2'];
$city2 = $_POST['city2'];
$state2 = $_POST['state2'];
$zip2 = $_POST['zip2'];

//Payment POST
$visa = $_POST['visa'];
$amex = $_POST['amex'];
$master = $_POST['master'];
$discover = $_POST['discover'];

$cardname = $_POST['cardname'];
$cardnum = $_POST['cardnum'];
$expiry = $_POST['expiry'];
$cvv = $_POST['cvv'];



//CSS
echo '<head>';
echo '<center><a href="SkolSeatsHomepage.php"><img src="SKOLSEATS1.JPG"><center></a><br>';
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
    font-family: Arial Black;
    font-size: 18px;
    color: #7F00FF;
    position: fixed;
    left: 44%;
   }
   #seats {
    font-family: Arial Black;
    font-size: 18px;
    color: #7F00FF;
    position: fixed;
    left: 44%;
   }
   #gamelabel {
    font-family: Arial Black;
    font-size: 24px;
    color: #7F00FF;
    position: fixed;
    left: 44%;
    bottom: 25%;
   }
   #seatslabel {
    font-family: Airal Black;
    color: #FFFF00;
    font-size: 24px;
    position: fixed;
    left: 39%;
   }
   button {
    font-family: Arial Black;
    color: #7F00FF;
    font-size: 24px;
    position: fixed;
    left: 31%;
    width: 36%;
    bottom: 5%
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
echo '<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 12%;"><a href ="SkolHelp.php">Help</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 18%;"><a href ="https://shop.vikings.com/en/minnesota-vikings/t-47267040+z-9997303-2329085382?_s=gppc&utm_campaign=NFL+-+Minnesota+Vikings+-+Brand+-+US+-+EN|16726709255&utm_medium=ppc&ks_id=6248_kw49762789&utm_term=vikings%20team%20store&matchtype=e&utm_source=g&target=kwd-378011627914&pcrid=590230914159&adposition=">Team Store</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 27%;"><a href ="SkolGameSelect.php">Buy</a></p>';


//Body Images
echo '<img src="Kirk.jpg" style="width:21%; height:60%; position: fixed; Right:9%; bottom:10%;">';
echo '<img src="mascott.jpg" style="width:21%; height:60%; position: fixed; Right:72%; bottom:10%;">';

//Form Fields
echo '<center><form action="SkolPayment.php" method="get"><fieldset>
<legend>Review Purchase</legend>
<label for="games" id="gamelabel">Game:</label>



<button type="submit" id="submit">Process Payment</button>
<button type="submit" id="previous" formaction="SkolBillingShipping.php">Previous Page</button>
</fieldset>
</form> 
</center>';


echo '<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;></a></center>';
echo '<br>';
?>
