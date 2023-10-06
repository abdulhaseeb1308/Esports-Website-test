<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo"Logged in successfully.";
}
else{
    echo" no connection";
}

mysqli_select_db($con, 'esports');

$name = $_POST['user'];
$hashed_password = hash('sha512', $_POST['pw']);
$q = " select * from signup where user = '$name' && pw = '$hashed_password' ";


$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    
    $_SESSION['user'] = $name;
    header('location:index.php');
    
}else{
    header('location:login.html');
}


?>