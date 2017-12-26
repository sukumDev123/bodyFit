
<?php
    require '../menus/menu.php';
    require '../conn.php';
    session_start();
    if( !isset($_SESSION['user']) ){
        $user = 'null';
    }else{
        $user = $_SESSION['user'];
    }
    $menu = new menu;
    
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
        
     <div class="container-fluid">
       
            <div class="">
                <!--Table-->
<!--Table-->
<table class="table table-sm">

<!--Table head-->
<thead class="mdb-color darken-3">
    <tr class="text-white">
        <th>#</th>
        <th>ชื่อ</th>
        <th>ประเภท</th>
        <th>ชนิด</th>
        <th>ราคา</th>
   
        <th>วันที่</th>
        
    </tr>
</thead>
<!--Table head-->

<!--Table body-->
<tbody>
    <?php 
    $show = $menu->selectA($conn,'product INNER JOIN sub_type ON product.id_subType = sub_type.id_subType INNER JOIN type t ON product.id_type = t.id_type','product.id_detail,product.name_pro,product.photoFile,sub_type.sub_Type,t.name_type,product.price,product.date_now');
    while($row = $show->fetch_array()){

    
    ?>
    <tr>
        <th scope="row"><?php echo $row['id_detail']; ?></th>
        <th ><?php echo $row['name_pro']; ?></> </th>
       
        <th ><?php echo $row['name_type']; ?></th>
        <th ><?php echo $row['sub_Type']; ?></th>
        <th ><?php echo $row['price']; ?></th>
        <th ><?php echo $row['date_now']; ?></th>
        <th ><?php echo 'แก้ไข'; ?></th>
        
    </tr>
   <?php
    }
   ?>
</tbody>
<!--Table body-->
</table>
<!--Table-->
            </div>
       
     </div>
     

    </main>
    <!--Main Layout-->
    
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../link/compiled.min/compiled.min.js"></script>
    <script type="text/javascript" src="../link/mdboot/mdboot/js/popper.min.js"></script>
    
    <script>
       

         new WOW().init();
        // SideNav Initialization
        $(".button-collapse").sideNav();
        $('.mdb-select').material_select();


        var showEle = (add)=>{
            $.each(items, function (i, item) {
            $('#mySelect').append($('<option>', { 
                value: item.value,
                text : item.text 
                 }));
            });
        };
     
    </script>
     
</body>
 
   
</html>