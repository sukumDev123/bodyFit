<?php

 session_start();

 require '../conn.php';
    
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$insert = "INSERT INTO users(name,email,password) VALUES ('".$name."','".$email."', '".$password."' ); ";

$s = mysqli_query($conn,$insert);

if(!$s){
   
}else{
    $selet = "SELECT name,state FROM users WHERE name = '".$name."' ";
    $show = mysqli_query($conn,$selet);
    $row = $show->fetch_assoc();
    $_SESSION['user'] =  $row['name'];
    $_SESSION['state'] = $row['state'];
    header('location:../index.php');
}

?>