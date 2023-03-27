<?php

session_start();

//Header and links
echo '<head>';
echo '<center><a href="SkolSeatsHomepage.php"><img src="SKOLSEATS1.JPG"><center></a><br>';
echo '<style>';
echo 'fieldset {
    background-color: #7F00FF;
    position: fixed;
    width: 25%;
    height: 57%;
    bottom: 12%;
    left: 3%;
  }
   legend {
    background-color: #FFFF00; 
    font-family: Arial;
    color: #7F00FF;
    font-size: 24px;
   }
   body {
    background-image: url("yellow.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
    position: fixed;
    width: 100%;
    height: 150%; 
   }
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}';
echo '</style>';
echo '</head>';


//Header and links
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

echo '<fieldset>';
echo '<legend>Latest News</legend>';
echo '<a href="https://www.vikings.com/news/injury-report-commanders-week-9";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:62%;"><b>Vikings vs. Commmanders Final Week 9 Injury Report</b></p>';
echo '<a href="https://www.vikings.com/news/how-to-watch-stream-listen-commanders-week-9";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:57%;"><b>Watch, Stream & Listen to Vikings vs. Commanders</b></p>';
echo '<a href="https://www.vikings.com/news/special-teams-preps-new-challenges-offense-pressure-defense-void";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:52%;"><b>Experts: Vikings Favored by Most Against Commanders</b></p>';
echo '<a href="https://www.vikings.com/news/cbs-sports-previews-vikings-commanders-offenses-week-8";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:47%;"><b>CBS Sports Previews Vikings & Commanders Offenses</b></p>';
echo '<a href="https://www.vikings.com/news/zadarius-smith-nfc-defensive-player-month-october-2022";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:42%;"><b>ZaDarius Smith Wins NFC Player of Month for October</b></p>';
echo '<a href="https://www.vikings.com/news/commanders-storylines-cousins-returning-washington-first-time";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:37%;"><b>Cousins Returning to Washington for 1st Time</b></p>';
echo '<a href="https://www.vikings.com/news/adam-zimmer-nfl-coach-mourn-loss";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:32%;"><b>Vkings Mourn Loss of Adam Zimmmer</b></p>';
echo '<a href="https://www.vikings.com/news/tj-hockenson-tight-end-trade-lions";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:27%;"><b>Vkings Acquire TD T.J. Hockenson; Place Smith on IR</b></p>';
echo '<a href="https://www.vikings.com/news/lewis-cine-injury-update";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:22%;"><b>Minnesota Vikings Update on Lewis Cine</b></p>';
echo '<a href="https://www.vikings.com/news/blake-proehl-activated-myles-dorn-waived-roster-moves-2022";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:17%;"><b>Vikings Activate WR Blake Proehl; Waive S Myles Dorn</b></p>';
echo '<a href="https://www.vikings.com/news/theo-jackson-ty-chandler-ir-roster-moves-2022";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:12%;"><b>Vikings Sign S Theo Jackson; Place Ty Chandler on IR</b></p>';
echo '<h4 style="font-family:Arial Black; color:purple; position: fixed; left:13%; bottom:3%;"><a href="https://www.vikings.com/news/";>More News</a></h4>';
echo '</fieldset>';
//Center Body images

echo '<br>';
echo '<img src="Specialoffer.jpg" style="width:17%; height:30%; position: fixed; Right:9%; bottom:45%;">';
echo '<img src="usbank.jpg" style="width:17%; height:30%; position: fixed; Right:9%; bottom:12%;">';
echo '<a href="https://www.vikings.com/schedule/"><img src="schedule2.png" style="Bottom:50%;"></a>';
echo '<br>';
echo '<br>';


echo '<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;></a></center>';
echo '<br>';

//Social Media Logos
echo '<center><a href="https://www.facebook.com/minnesotavikings/"><img src="facebook.png" style="width:50px; height:40px; width:40px; position: fixed; Left:73%; Bottom:3%;"></a></center>';
echo '<center><a href="https://www.instagram.com/vikings/?hl=en"><img src="instagram.png" style="width:50px; height:40px; width:40px; position: fixed; Left:77%; Bottom:3%;"></a></center>';
echo '<center><a href="https://twitter.com/Vikings?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="Twitter.png" style="height:40px; width:40px; position: fixed; Left:81%; Bottom:3%;"></a></center>';
echo '<center><a href="https://www.snapchat.com/add/vikings"><img src="Snapchat.png" style="width:50px; height:40px; width:40px; position: fixed; Left:85%; Bottom:3%;"></a></center>';
echo '<center><a href="https://www.youtube.com/c/vikings/videos"><img src="Youtube.png" style="width:40px; height:40px; position: fixed; Left:89%; bottom:3%;"></a></center>';
echo '</body>';




?>
