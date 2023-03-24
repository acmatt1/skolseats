<?php

session_start();

//CSS
echo '<head>';
echo '<center><a href="SkolSeatsHomepage.php"><img src="SKOLSEATS.JPG"><center></a><br>';
echo '<style>';
echo '#f1 {
    background-color: #7F00FF;
    position: fixed;
    width: 36%;
    height: 34%;
    bottom: 47%;
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
  #f1 {
    background-color: #7F00FF;
    position: fixed;
    width: 36%;
    height: 78%;
    bottom: 2%;
    left: 30%;
  }
  legend {
    background-color: #FFFF00; 
    font-family: Bahnschrift;
    color: #7F00FF;
    font-size: 24px;
   }

   select {
    font-family: Bahnschrift;
    font-size: 18px;
    color: #7F00FF;
    position: fixed;
    left: 44%;
   }
   #cardnamelabel{
    font-family: Bahnschrift;
    color: #FFFF00;
    font-size: 32px;
    position: fixed;
    left: 32%;
    bottom: 55%;
   }
   #cardname {
    font-family: Bahnschrift;
    color: #7F00FF;
    font-size: 16px;
    position: fixed;
    left: 48%;
    bottom: 56%;
   }
   #cardnumlabel{
    font-family: Bahnschrift;
    color: #FFFF00;
    font-size: 32px;
    position: fixed;
    left: 32%;
    bottom: 42%;
   }
   #cardnum{
    font-family: Bahnschrift;
    color: #7F00FF;
    font-size: 16px;
    position: fixed;
    left: 47%;
    bottom: 43%;
   }
   #expirylabel{
    font-family: Bahnschrift;
    color: #FFFF00;
    font-size: 32px;
    position: fixed;
    left: 32%;
    bottom: 29%;
   }
   #expiry{
    font-family: Bahnschrift;
    color: #7F00FF;
    font-size: 16px;
    position: fixed;
    left: 44%;
    bottom: 30%;
   }
   #cvvlabel{
    font-family: Bahnschrift;
    color: #FFFF00;
    font-size: 32px;
    position: fixed;
    left: 52%;
    bottom: 29%;
   }
   #cvv{
    font-family: Bahnschrift;
    color: #7F00FF;
    font-size: 16px;
    position: fixed;
    left: 58%;
    bottom: 30%;
   }
   #visalabel{
    font-family: Bahnschrift;
    color: #FFFF00;
    font-size: 20px;
    position: fixed;
    left: 35%;
    bottom: 70%;
   }
   #visa{
    font-family: Bahnschrift;
    position: fixed;
    left: 38%;
    bottom: 71%;
   }
   #amexlabel{
    font-family: Bahnschrift;
    color: #FFFF00;
    font-size: 20px;
    position: fixed;
    left: 41%;
    bottom: 70%;
   }
   #amex{
    font-family: Bahnschrift;
    position: fixed;
    left: 45%;
    bottom: 71%;
   }
   #masterlabel{
    font-family: Bahnschrift;
    color: #FFFF00;
    font-size: 20px;
    position: fixed;
    left: 48%;
    bottom: 70%;
   }
   #master{
    font-family: Bahnschrift;
    position: fixed;
    left: 53%;
    bottom: 71%;
   }
   #discoverlabel{
    font-family: Bahnschrift;
    color: #FFFF00;
    font-size: 20px;
    position: fixed;
    left: 56%;
    bottom: 70%;
   }
   #discover{
    font-family: Bahnschrift;
    position: fixed;
    left:62%;
    bottom: 71%;
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
   #previous {
    font-family: Bahnschrift;
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

echo '<img src="Jefferson.jpg" style="width:21%; height:60%; position: fixed; Right:9%; bottom:10%;">';
echo '<img src="fan2.jpg" style="width:21%; height:60%; position: fixed; Right:72%; bottom:10%;">';

//Form Field
echo '<center><form action="SkolPayment.inc.php" method="POST">
<fieldset id="f1">
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
<input type="text" id="cvv" name="cvv" maxlength="4" size="4">

<button type="submit" id="submit" name="submit">Confirm Purchase</button>
<button type="submit" id="previous" formaction="SkolSeatsContactInfo.php">Previous Page</button>
</fieldset>
</form> 
</center>';


echo '<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;></a></center>';
echo '<br>';
?>