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
   #games {
    font-family: Bahnschrift;
    font-size: 18px;
    color: #7F00FF;
    position: fixed;
    left: 44%;
   }
   #seats {
    font-family: Bahnschrift;
    font-size: 18px;
    color: #7F00FF;
    position: fixed;
    left: 44%;
   }
   #gamelabel {
    font-family: Bahnschrift;
    font-size: 24px;
    color: #FFFF00;
    position: fixed;
    left: 39%;
    bottom: 74%;
   }
   #seatslabel {
    font-family: Bahnschrift;
    color: #FFFF00;
    font-size: 24px;
    position: fixed;
    left: 39%;
   }
   button {
    font-family: Bahnschrift;
    color: #7F00FF;
    font-size: 24px;
    position: fixed;
    left: 31%;
    width: 36%;
    bottom: 5%
   }
  ';
echo '</style>';
echo '</head>';
//Header options
echo '<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; left:8%;"><a href ="SkolSeatsHomepage.php">Home</a></p>';
if(isset($_SESSION["userid"])) {
	echo '<p align="left"; style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; left:16%;"><a href ="SkolSignOut.php">Sign Out</a></p>';
}
else{
	echo '<p align="left"; style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; left:16%;"><a href ="SkolSignIn.php">Sign In</a></p>';
}
echo '<p style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; left:23%"><a href ="https://shop.vikings.com/en/minnesota-vikings/t-47267040+z-9997303-2329085382?_s=gppc&utm_campaign=NFL+-+Minnesota+Vikings+-+Brand+-+US+-+EN|16726709255&utm_medium=ppc&ks_id=6248_kw49762789&utm_term=vikings%20team%20store&matchtype=e&utm_source=g&target=kwd-378011627914&pcrid=590230914159&adposition=">Team Store</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; right: 12%;"><a href ="SkolSeasonTickets.php">Help</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; right: 20%;"><a href ="SkolSeasonTickets.php">Sell</a></p>';
echo '<p align="right"; style="display:inline-block; font-family:Bahnschrift; color:purple; position: fixed; right: 27%;"><a href ="SkolGameSelect.php">Buy</a></p>';