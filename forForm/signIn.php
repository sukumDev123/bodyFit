<?php

    session_start();
    require '../conn.php';

    $mail = $_POST['email'];
    $pass = $_POST['pass'];

    $select = "SELECT name,email FROM user WHERE email='".$mail."' && pass='".$pass."' ";
    $req = mysqli_query($conn,$select);
    
    if($req->num_rows > 0 ){
         $row = $req->fetch_assoc();
         $_SESSION['user'] =  $row['name'];
         header('location:../index.php');
    }else{
        echo 'not pass';
    }

?>