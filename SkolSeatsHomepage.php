<?php

session_start();

?>

<!--Header and links-->
<head>
<center><a href="SkolSeatsHomepage.php"><img src="SKOLSEATS1.JPG"><center></a><br>
<link rel="stylesheet" href="style.php" media="screen">

<style>
fieldset {
    background-color: #7F00FF;
    position: fixed;
    width: 25%;
    height: 57%;
    bottom: 12%;
    left: 3%;
	}
</style>

</head>


<!--Header and links-->
<?php
echo'<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:8%;"><a href ="SkolSeatsHomepage.php">Home</a></p>';
if(isset($_SESSION["userid"])) {
	echo '<p align="left"; style="display:inline-block; font-family: Arial Black; color:purple; position: fixed; left:16%;"><a href ="SkolSignOut.php">Sign Out</a></p>';
}
else{
	echo '<p align="left"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:16%;"><a href ="SkolSignIn.php">Sign In</a></p>';
}
?>

<body bgcolor="#FFFF00"><p style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; left:24%;"><a href ="SkolAccount.php">My Account</a></p>
<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 12%;"><a href ="SkolHelp.php">Help</a></p>
<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 18%;"><a href ="https://shop.vikings.com/en/minnesota-vikings/t-47267040+z-9997303-2329085382?_s=gppc&utm_campaign=NFL+-+Minnesota+Vikings+-+Brand+-+US+-+EN|16726709255&utm_medium=ppc&ks_id=6248_kw49762789&utm_term=vikings%20team%20store&matchtype=e&utm_source=g&target=kwd-378011627914&pcrid=590230914159&adposition=">Team Store</a></p>
<p align="right"; style="display:inline-block; font-family:Arial Black; color:purple; position: fixed; right: 27%;"><a href ="SkolGameSelect.php">Buy</a></p>

<fieldset>
<legend>Latest News</legend>
<a href="https://www.vikings.com/news/injury-report-commanders-week-9";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:62%;"><b>Vikings vs. Commmanders Final Week 9 Injury Report</b></p>
<a href="https://www.vikings.com/news/how-to-watch-stream-listen-commanders-week-9";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:57%;"><b>Watch, Stream & Listen to Vikings vs. Commanders</b></p>
<a href="https://www.vikings.com/news/special-teams-preps-new-challenges-offense-pressure-defense-void";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:52%;"><b>Experts: Vikings Favored by Most Against Commanders</b></p>
<a href="https://www.vikings.com/news/cbs-sports-previews-vikings-commanders-offenses-week-8";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:47%;"><b>CBS Sports Previews Vikings & Commanders Offenses</b></p>
<a href="https://www.vikings.com/news/zadarius-smith-nfc-defensive-player-month-october-2022";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:42%;"><b>ZaDarius Smith Wins NFC Player of Month for October</b></p>
<a href="https://www.vikings.com/news/commanders-storylines-cousins-returning-washington-first-time";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:37%;"><b>Cousins Returning to Washington for 1st Time</b></p>
<a href="https://www.vikings.com/news/adam-zimmer-nfl-coach-mourn-loss";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:32%;"><b>Vkings Mourn Loss of Adam Zimmmer</b></p>
<a href="https://www.vikings.com/news/tj-hockenson-tight-end-trade-lions";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:27%;"><b>Vkings Acquire TD T.J. Hockenson; Place Smith on IR</b></p>
<a href="https://www.vikings.com/news/lewis-cine-injury-update";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:22%;"><b>Minnesota Vikings Update on Lewis Cine</b></p>
<a href="https://www.vikings.com/news/blake-proehl-activated-myles-dorn-waived-roster-moves-2022";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:17%;"><b>Vikings Activate WR Blake Proehl; Waive S Myles Dorn</b></p>
<a href="https://www.vikings.com/news/theo-jackson-ty-chandler-ir-roster-moves-2022";><p style="font-family:Arial; color: yellow; font-size: 13px; position: fixed; left:4%; bottom:12%;"><b>Vikings Sign S Theo Jackson; Place Ty Chandler on IR</b></p>
<h4 style="font-family:Arial Black; color:purple; position: fixed; left:13%; bottom:3%;"><a href="https://www.vikings.com/news/";>More News</a></h4>
</fieldset>
<!--Center Body images-->

<br>
<img src="Specialoffer.jpg" style="width:17%; height:30%; position: fixed; Right:9%; bottom:45%;">
<img src="usbank.jpg" style="width:17%; height:30%; position: fixed; Right:9%; bottom:12%;">
<a href="https://www.vikings.com/schedule/"><img src="schedule2.png" style="Bottom:50%;"></a>
<br>
<br>


<center><a href="https://www.amazon.com/Nope-Daniel-Kaluuya/dp/B0B75YBMDK/ref=asc_df_B0B75YBMDK/?tag=hyprod-20&linkCode=df0&hvadid=598270499740&hvpos=&hvnetw=g&hvrand=11545977362221648762&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9019697&hvtargid=pla-1712922598227&psc=1"><img src="ad.jpg" style="width:350px; height:75px;"></a></center>
<br>

<!--Social Media Logos-->
<center><a href="https://www.facebook.com/minnesotavikings/"><img src="facebook.png" style="width:50px; height:40px; width:40px; position: fixed; Left:73%; Bottom:3%;"></a></center>
<center><a href="https://www.instagram.com/vikings/?hl=en"><img src="instagram.png" style="width:50px; height:40px; width:40px; position: fixed; Left:77%; Bottom:3%;"></a></center>
<center><a href="https://twitter.com/Vikings?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="Twitter.png" style="height:40px; width:40px; position: fixed; Left:81%; Bottom:3%;"></a></center>
<center><a href="https://www.snapchat.com/add/vikings"><img src="Snapchat.png" style="width:50px; height:40px; width:40px; position: fixed; Left:85%; Bottom:3%;"></a></center>
<center><a href="https://www.youtube.com/c/vikings/videos"><img src="Youtube.png" style="width:40px; height:40px; position: fixed; Left:89%; bottom:3%;"></a></center>
</body>
