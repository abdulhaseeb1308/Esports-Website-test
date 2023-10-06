<?php

session_start();
header('location:index.html');

$con = mysqli_connect('localhost','root');
if($con){
    echo" connection successful";
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
    echo" duplicate data";
}else{
    $qy= " insert into signup (user  , pw) values ('$name'  , '$hashed_password') ";
    mysqli_query($con, $qy);
}


?>