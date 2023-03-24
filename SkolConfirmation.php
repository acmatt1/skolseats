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
    font-family: Arial Black;
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
   #home {
    font-family: Arial Black;
    color: #7F00FF;
    font-size: 18px;
    position: fixed;
    left: 42%;
    width: 15%;
    bottom: 5%
   }
   #thankyou{
    font-family: Arial Black;
    color: #FFFF00;
    font-size: 32px;
    position: fixed;
    left: 34%;
    bottom: 55%;
   }
   #content{
    font-family: Arial Black;
    color: #FFFF00;
    font-size: 22px;
    position: fixed;
    left: 33%;
    bottom: 35%;
   }
  ';
echo '</style>';
echo '</head>';
//Header options
echo '<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:8%;"><a href ="SkolSeatsHomepage1.php">Home</a></p>';
echo '<p align="left"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:15%;"><a href ="SkolSignIn.php">Sign In</a></p>';
echo '<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:22%;"><a href ="SkolAccount.php">My Account</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 12%;"><a href ="SkolSeasonTickets.php">Help</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 18%;"><a href ="https://shop.vikings.com/en/minnesota-vikings/t-47267040+z-9997303-2329085382?_s=gppc&utm_campaign=NFL+-+Minnesota+Vikings+-+Brand+-+US+-+EN|16726709255&utm_medium=ppc&ks_id=6248_kw49762789&utm_term=vikings%20team%20store&matchtype=e&utm_source=g&target=kwd-378011627914&pcrid=590230914159&adposition=">Team Store</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 27%;"><a href ="SkolGameSelect.php">Buy</a></p>';


//Body Images
echo '<img src="Kirk.jpg" style="width:21%; height:60%; position: fixed; Right:9%; bottom:10%;">';
echo '<img src="mascott.jpg" style="width:21%; height:60%; position: fixed; Right:72%; bottom:10%;">';

//Form Fields
echo '<center><form action="SkolPayment.php" method="get"><fieldset>
<legend>Purchase Confirmed</legend>
<label for="games" id="gamelabel">Game:</label>
<label for="thankyou" id= "thankyou">Thank you for your purchase!</label>
<label for="content" id= "content">A confirmation email with the details of your <br> purchase has been sent to the email provided.</label>
<button type="submit" id="home" formaction="SkolSeatsHomepage1.php">Return To Homepage</button>
</fieldset>
</form> 
</center>';


echo '<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;></a></center>';
echo '<br>';
?>