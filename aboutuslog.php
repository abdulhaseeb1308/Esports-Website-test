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
    <title>About Us</title>



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
        <a href="http://192.168.43.5/phpmyadmin/db_structure.php?

server=1&db=esports" target="_blank">Logged in as - <?php echo 

$_SESSION['user']; ?> </a>
            <a href="logout.php">Logout</a>
    </div>
    </div>
    <div class="row">
    <div class="leftcolumn">
    <div class="card">
        <h1>About Us</h1>
    This website was made as a project for the subject- "Software Lab".<br>
        It was made by -<br>
        <ul>
            <li>Abdul Haseeb<br>(17-DPCE-166)</li><hr style="width: 20%;float:left"><br>
            <li>Mohd Arsalan Khan<br> (17-DPCE-167)</li><hr style="width: 20%;float:left"><br>
            <li>Ahad Wasim<br>(17-DPCE-178)</li><hr style="width: 20%;float:left"><br>
            <li>Hasan Ali<br>(17-DPCE-181)</li><hr style="width: 20%;float:left"><br>
        </ul>
    
        </div>
    
    </div>
    <div class="rightcolumn">
   
    <div class="card">
      <h3>Sub-Directories</h3>
     <div class="link"><a href="aboutlog.php">About eSports</a></div><br>
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
