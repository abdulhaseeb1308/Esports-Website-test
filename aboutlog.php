<?php

session_start();
if(!isset($_SESSION['user'])){
header('location:login.html');
}
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <link rel="text/javascript" href="SCRIPT.JS">
    <link rel="shortcut icon" href="icon.ico">
    <title>About eSports</title>



</head>

<body>
 <div class="header">
        <p align="center"><img src="banner.gif"></p>
  
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="aboutuslog.php">About Us</a>
    <a href="feedbacklogged.php">Feedback</a>
     <div style="float: right">
        <a href="http://192.168.43.5/phpmyadmin/db_structure.php?server=1&db=esports" target="_blank">Logged in as - <?php echo $_SESSION['user']; ?> </a>
            <a href="logout.php">Logout</a>
    </div>
    </div>
    <div class="row">
    <div class="leftcolumn">
    <div class="card">
        <h1>About eSports</h1>
   Esports (also known as electronic sports, e-sports, or eSports) is a form of competition using video games. Most commonly, esports takes the form of organized, multiplayer video game competitions, particularly between professional players. Although organized online and offline competitions have long been a part of video game culture, these were largely between amateurs until the late 2000s, when participation by professional gamers and spectatorship in these events through live streaming saw a large surge in popularity. By the 2010s, esports was a significant factor in the video game industry, with many game developers actively designing toward a professional esports subculture.

The most common video game genres associated with esports are real-time strategy (RTS), first-person shooter (FPS), fighting and multiplayer online battle arena (MOBA). Popular games for esports include League of Legends, Dota 2, Counter-Strike: Global Offensive, Call of Duty, Hearthstone, Overwatch, Tom Clancy's Rainbow Six Siege, PlayerUnknown's Battlegrounds, Fortnite Battle Royale, and StarCraft II. Tournaments such as the League of Legends World Championship, Dota 2's The International, the fighting games-specific Evolution Championship Series, and the Intel Extreme Masters provide live broadcasts of the competition and prize money to competitors. Many competitions use a series of promotion and relegation play with sponsored teams, such as the League of Legends World Championship, but more recently, competitions structured similar to American professional sports, with salaried players and regular season and play-off series, have emerged, such as the Overwatch League. The legitimacy of esports as a sports competition remains in question; however, esports has been featured alongside traditional sports in multinational events, and the International Olympic Committee has explored incorporating them into future Olympic events.

By 2019, it is estimated that 427 million people worldwide will be watching some form of esports. The increasing availability of online streaming media platforms, particularly Panda.tv, YouTube and Twitch.tv, has become central to the growth and promotion of esports competitions. Demographically, Major League Gaming has reported viewership that is approximately 85% male and 15% female, with a majority of viewers between the ages of 18 and 34. Despite this, several female personalities within esports are hopeful about the increasing presence of female gamers. South Korea has several established esports organizations, which have licensed pro gamers since the year 2000. Recognition of esports competitions outside of South Korea has come somewhat slower. Along with South Korea, most competitions take place in Europe, North America and China. Despite its large video game market, esports in Japan is relatively underdeveloped, and this has been attributed largely to its broad anti-gambling laws which prohibit paid professional gaming tournaments.

The global esports market generated US$325 million of revenue in 2015 and was expected to make $493 million in 2016. The global esports audience in 2015 was 226 million people. According to a Newzoo report in April 2017, 42% of the gaming market belongs to the mobile industry, and mobile is projected to claim more than 50% the market by 2020. The esports industry is expanding beyond PC and console, as developer Super Evil Megacorp created Vainglory, the first mobile multiplayer online battle arena game, and companies like Skillz bring esports tournaments to mobile games.
        </div></div>
 <div class="rightcolumn">
   
    <div class="card">
      <h3>Sub-Directories</h3>
     <div class="link"><a href="aboutlog.php">About eSports</a></div><br>
        <div class="link"><a href="hislog.php">History</a></div><br>
        <div class="link"><a href="nameslog.php">Popular Names</a></div><br>
        <div class="link"><a href="leagueslog.php">Professional Leagues</a></div><br>
        <div class="link"><a href="genlog.php">Next Generation</a></div><br>
    </div>
    </div>
        </div>

<div class="footer">
This website was made as a project to test the skills of the developer.
</div>
        

</body>
    
</html>
