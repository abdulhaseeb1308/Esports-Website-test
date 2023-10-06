<?php

session_start();
header('location:index.php');

$con = mysqli_connect('localhost','root');
if($con){
    echo" connection successful";
}
else{
    echo" no connection";
}

mysqli_select_db($con, 'esports');

$fname = $_POST['name'];
$feedback = $_POST ['feedback'];
$response = $_POST ['response'];




$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);


    $qy= " insert into feedback (name  , response , feedback) values ('$fname'  , '$response' , '$feedback') ";
    mysqli_query($con, $qy);



?>