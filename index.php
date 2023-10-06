<?php

session_start();
if(!isset($_SESSION['user'])){
header('location:login.html');
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" >
    <link rel="shortcut icon" href="icon.ico">
    <title>eSports</title>



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
        <h2>Definition of eSports</h2>
        Esports (also known as electronic sports, e-sports, eSports, or competitive/professional [video] gaming) is a form of competition using video games.Most commonly, esports takes the form of organized, multiplayer video game competitions, particularly between professional players. Although organized online and offline competitions have long been a part of video game culture, these were largely between amateurs until the late 2000s, when participation by professional gamers and spectatorship in these events through live streaming saw a large surge in popularity. By the 2010s,esports was a significant factor in the video game industry, with many game developers actively designing toward a professional esports subculture.
      </div>
      <div class="card">
      <h2>ESL Pro League Final</h2>
      <h5>Cloud9 vs. Fnatic</h5>
          <video style="width: 100%; height: auto; border-radius: 10px" src="Match.mp4" controls ></video>
          
      
    </div>
    <div class="card">
      <h2>IEM Katowice</h2>
      <h5>March 2–6, 2016</h5>
        <img style="width: 100%; height: auto; border-radius: 10px" src="img.jpg">
     
    </div>
      
  </div>
  <div class="rightcolumn">
   
    <div class="card">
      <h3>Sub-Directories</h3>
     <div class="link"><a href="aboutlog.php">About eSports</a></div><br>
        
        <div class="link"><a href="hislog.php">History</a></div><br>
        <div class="link"><a href="nameslog.php">Popular Names</a></div><br>
        <div class="link"><a href="leagueslog.php">Professional Leagues</a></div><br>
        <div class="link"><a href="genlog.php">Next Generation</a></div><br>
    </div>
      <div class="card">
          <h3>Headlines</h3>
<script type="text/javascript"> 

rssfeed_url = new Array(); 
rssfeed_url[0]="https://www.gameinformer.com/news.xml";  
rssfeed_frame_width="100%"; 
rssfeed_frame_height="200"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="4"; 
rssfeed_font_face="Arial";
rssfeed_target="_blank"; 
rssfeed_font_size="12";  
rssfeed_item_title_color="white"; 
rssfeed_item_bgcolor="black"; 
rssfeed_no_items="0"; 
rssfeed_cache = "c410db8de9606df231f0c9cc9910a6fd"; 

</script> 
<script type="text/javascript" src="feed.js"></script> 


  </div>
        <div class="card">
      <h3>Popular Games</h3>
     <div class="link"><a href="http://blog.counter-strike.net/">CS:GO</a></div><br>
        <div class="link"><a href="http://blog.dota2.com/">Dota 2</a></div><br>
        <div class="link"><a href="https://play.na.leagueoflegends.com/en_US">LoL</a></div><br>
        <div class="link"><a href="https://www.epicgames.com/fortnite/l">Fortnite</a></div><br> 
             <div class="link"><a href="https://starcraft2.com/en-us/">StarCraft II</a></div><br>
            
    </div>
</div>
    </div> 

<div class="footer">
This website was made as a project to test the skills of the developer.
</div>

</body>
    
</html>
