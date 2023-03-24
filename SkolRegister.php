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
   #register {
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
   input {
    font-family: Bahnschrift;
    color: #7F00FF;
    font-size: 14px;
    position: fixed;
    left: 50%;
   }
  ';
echo '</style>';
echo '</head>';

//Header options
echo '<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; left:8%;"><a href ="SkolSeatsHomepage.php">Home</a></p>';
echo '<p align="left"; style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; left:16%;"><a href ="SkolSignIn.php">Sign In</a></p>';
echo '<p style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; left:23%"><a href ="https://shop.vikings.com/en/minnesota-vikings/t-47267040+z-9997303-2329085382?_s=gppc&utm_campaign=NFL+-+Minnesota+Vikings+-+Brand+-+US+-+EN|16726709255&utm_medium=ppc&ks_id=6248_kw49762789&utm_term=vikings%20team%20store&matchtype=e&utm_source=g&target=kwd-378011627914&pcrid=590230914159&adposition=">Team Store</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; right: 12%;"><a href ="SkolSeasonTickets.php">Help</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; right: 20%;"><a href ="SkolSeasonTickets.php">Sell</a></p>';


//Body Images

echo '<p align="right"; style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; right: 27%;"><a href ="SkolSeasonTickets.php">Buy</a></p>';
echo '<img src="adam.jpg" style="width:21%; height:60%; position: fixed; Right:9%; bottom:10%;">';
echo '<img src="fans.jpg" style="width:21%; height:60%; position: fixed; Right:72%; bottom:10%;">';

//Form Field
echo '<center><form action="SkolRegister.inc.php" method="POST"><fieldset>
<legend>Registration Information</legend><br>
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

<label for="username">Username:</label>
<input type="text" id="username" name="username"><br><br><br>

<label for="password">Password:</label>
<input type="password" id="password" name="password"><br><br><br>

<label for="password2">Re-Enter Password:</label>
<input type="password" id="password2" name="password2"><br><br><br>

<button type="submit" name="submit" id="register">Register</button>
<button type="submit" id="previous" formaction="SkolSignIn.php">Previous Page</button>
</fieldset>
</form> 
</center>';


echo '<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;></a></center>';
echo '<br>';
?>