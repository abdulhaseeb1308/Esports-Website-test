<html>
<head><title>Sign Up</title>
   <link rel="stylesheet" href="sign%20style.css">

 <body>
   <div class="signupbox">
    <img src="123.png" alt="Avarat" class="avatar">
      <h1>Sign Up </h1>
      
       <form method="post" action="registration.php" >
           <p><b>Username</b></p>
         <input type="text" name="user">
           <p><b>Password</b></p>
         <input type="password" name="pw">
          <br>
         <input type="submit" name="submit" value="Sign Up" onClick="return checkMe()">
       </form>
     </div>
     <script language="javascript">
function checkMe() {
   
        alert("Your account has been registered. You will be redirected to the home page to login.");
   
}

    </body>
 </head>
</html>