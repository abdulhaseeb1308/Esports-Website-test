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
    <title>Feedback</title>
      <style> 
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    background-color: #f8f8f8;
    border: 2px solid red;
    border-radius: 10px;
    font-size: 16px;
    font-family: sans-serif;
}
input[type=text]:focus {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    background-color: #f8f8f8;
    border: 2px solid blue;
    border-radius: 10px;
    font-size: 16px;
    font-family: sans-serif;
}
textarea:focus {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
    font-family: sans-serif;
     margin: 8px 0;
}

textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 10px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
    border: 2px solid red;
    font-family: sans-serif;
     margin: 8px 0;
}
    input[type=submit]{
    background-color: red;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 10px;
}
input[type=submit]:hover{
    background-color: blue;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 10px;
}
        input[type=select]
        {
            width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    background-color: #f8f8f8;
    border: 2px solid blue;
    border-radius: 10px;
    font-size: 16px;
    font-family: sans-serif;  
        }
        .container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 16px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: blue;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: red;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>



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
               <h1>Feedback</h1>
  <form action="feedbacklog.php" method="post">
  <label for="name"><strong>Name</strong></label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>
      <strong>Tell us how was your experience</strong><br><br>
      <label class="container">Awesome
  <input type="radio" checked="checked" name="response" value="Awesome" >
  <span class="checkmark"></span>
</label>
<label class="container">Good
  <input type="radio"  name="response" value="Good">
  <span class="checkmark"></span>
</label>
<label class="container">Average
  <input type="radio"  name="response" value="Average">
  <span class="checkmark"></span>
</label>
<label class="container">Poor
  <input type="radio"  name="response" value="Poor">
  <span class="checkmark"></span>
</label>
  
  <label for="feedback"><strong>Tell us how we can improve</strong></label>
      
  <textarea id="feedback" name="feedback" placeholder="Enter your feedback" required></textarea>
    
<input type="submit" value="Submit" >
    
</form>
    
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
    </div>
    </div>
    <div class="footer">
This website was made as a project to test the skills of the developer.
        </div>
    <script language="javascript">
function checkMe() {
   
        alert("Your feedback was submitted. Click OK to continue.");
   
}
</script>

</body>
    
</html>
