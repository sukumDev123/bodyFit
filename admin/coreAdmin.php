
<?php
        session_start();
    if( !isset($_SESSION['user']) ){
        $user = 'null';
    }else{
        $user = $_SESSION['user'];
    }


?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--css-->
    
    <link rel="stylesheet" media="all" type="text/css" href="../link/mdboot/mdboot/css/bootstrap.css" >
    <link rel="stylesheet" media="all" type="text/css" href="../link/mdboot/mdboot/css/mdb.css" >
    <link rel="stylesheet" media="all" type="text/css" href="../link/mdboot/mdboot/css/compiled.min.css" >
    <link rel="stylesheet" media="all" type="text/css" href="../link/mdboot/mdboot/css/style.css" >
    <link rel="stylesheet" media="all" type="text/css" href="../link/font/css/font-awesome.css" >
    
    <!--Javascript-->
    
    <script type="text/javascript" src="../link/jquery/jquery.js"></script>
    <script type="text/javascript" src="../link/mdboot/mdboot/js/bootstrap.js"></script>
    <script type="text/javascript" src="../link/mdboot/mdboot/js/mdb.js"></script>
    
    
    <title></title>
  </head>
 <body class="fixed-sn pink-skin">

   <?PHP
   require_once './nav.php';
   ?>
    
    <!--Main Layout-->
    <main>
        <?php //require_once 'insertImg.php'; ?>    
    </main>
    <!--Main Layout-->
    
    <!-- SCRIPTS -->
    <!-- JQuery -->

    <script>
         new WOW().init();
        // SideNav Initialization
        $(".button-collapse").sideNav();

    </script>
     <script type="text/javascript" src="../link/compiled.min/compiled.min.js"></script>
    <script type="text/javascript" src="../link/mdboot/mdboot/js/popper.min.js"></script>
</body>
 
   
</html>