<?php
    
    session_start();
    require '../conn.php';

    $mail = mysqli_escape_string($conn,$_POST['email']);
    $pass = mysqli_escape_string($conn,$_POST['pass']);

    $select = "SELECT name,email,state FROM users WHERE email='".$mail."' && password='".$pass."' ";
    $req = mysqli_query($conn,$select);
    
    if($req->num_rows > 0 ){
         $row = $req->fetch_assoc();
         $_SESSION['user'] =  $row['name'];
         $_SESSION['state'] = $row['state'];
         header('location:../index.php');
    }else{
       
        header('location: ../signin.php');
    }

?>