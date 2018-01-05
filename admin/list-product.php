
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
    $end = 10;
    if(isset($_GET['pages']))
        $pages = $_GET['pages'];
    else 
        $pages = 1;
    $start = ($pages - 1) * $end;
    $show = $menu->select($conn,'products INNER JOIN subtype ON products.id_subType = subtype.id_subType INNER JOIN type t ON products.id_type = t.id_type order by id_product desc limit '.$start.','.$end.' ');
    while($row = $show->fetch_array()){

    
    ?>
    <tr>
        <th scope="row"><?php echo $row['id_product']; ?></th>
        <th ><?php echo $row['name_product']; ?></> </th>
       
        <th ><?php echo $row['type_name']; ?></th>
        <th ><?php echo $row['name_subType']; ?></th>
        <th ><?php echo $row['price_product']; ?></th>
        <th ><?php echo $row['created_at']; ?></th>
        <th > <a href="edit.php?id_product=<?php echo $row['id_product']; ?> "><?php echo 'แก้ไข'; ?></a> </th>
        <th > <a onclick='checkDelete("<?php echo $row['name_product']; ?>","<?php echo $row['id_product']; ?>")' ><?php echo 'ลบ'; ?></a> </th>
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
     <div class="container">
     <!--Pagination -->
     <?php
      $showa = $menu->select($conn,'products ');

      $tota_renum = mysqli_num_rows($showa);
      $total_page = ceil($tota_renum/$end);
     if($pages <= 1) $prene = 'disabled';
     else if($pages > 0) $prene = '';
     if($pages >= $total_page ) $nextPre = 'disabled';
     else $nextPre = '';
     if($pages == $total_page) $endpages = 'disabled';
     else if($total_page == 0) $endpages = 'disabled';
     ?>
<nav class="my-4" style='margin: 0 auto'>
 <ul class="pagination pagination-circle pg-blue mb-0">

     <!--First-->
     <li class="page-item <?php echo  $prene; ?>"><a class="page-link" href='?pages=<?php echo 1;  ?>'>First</a></li>

     <!--Arrow left-->
     <li class="page-item <?php echo  $prene; ?> ">
         <a class="page-link" aria-label="Previous"  href='?pages=<?php echo intval($_GET['pages'])-1 ?>'>
             <span aria-hidden="true">&laquo;</span>
             <span class="sr-only">Previous</span>
         </a>
     </li>

     <!--Numbers-->
     <?php
    
     for($i = 1 ; $i <= $total_page;$i++){     
     ?>
     <li class="page-item active"><a href='?pages=<?php echo $i ?>' class="page-link"><?php echo $i ?></a></li>
    <?php
     }
    ?>

     <!--Arrow right-->
     <li class="page-item  <?php echo $nextPre; ?>">
        
         <a class="page-link" aria-label="Next" href='?pages=<?php echo intval($_GET['pages'])+1 ?>' >
             <span aria-hidden="true">&raquo;</span>
             <span class="sr-only">Next</span>
         </a>
         
     </li>

     <!--First-->
     <li class="page-item <?php echo $endpages; ?>"><a class="page-link" href='?pages=<?php echo $total_page;  ?>'>Last</a></li>

 </ul>
</nav>
</div>
    </main>
    <!--Main Layout-->
    
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../link/compiled.min/compiled.min.js"></script>
    <script type="text/javascript" src="../link/mdboot/mdboot/js/popper.min.js"></script>
    
    <script>
       var checkDelete = ($ech,$id_P)=>{
           if( confirm('ต้องการลบ ' + $ech + ' ใช่หรื่อไม่') )
                window.location.href='./server/delete.php?id_product='+$id_P;
        
       }

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