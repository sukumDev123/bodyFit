<?php
if(isset($_GET['id_type']) && isset($_GET['id_subType']) ){


session_start();
require 'menus/menu.php';
require 'conn.php';
$menus = new menu;

$end =8;
if(isset($_GET['pages']))
    $pages = $_GET['pages'];
else 
   $pages = 1;

$start = ($pages - 1) * $end;
$showTy = $menus->select($conn,"subtype s inner join type t on s.id_type = t.id_type WHERE s.id_type ='".$_GET['id_type']."' and s.id_subType ='".$_GET['id_subType']."' ");
$row_a = $showTy->fetch_array();

$showPro = $menus->select($conn,"products p inner join subtype s on p.id_subtype = s.id_subType where p.id_type='".$_GET['id_type']."' and p.id_subType='".$_GET['id_subType']."' order by id_product desc limit ".$start.",".$end." ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Product </title>
    <?php require 'link/link.php'; ?>
    <style>
    .backShow{
        background:rgba(0,0,0,0.5);
        position:fixed;
        top:0;
        height:100%;
        width:100%;
        z-index:10;
       
    }
    .descri{
        position:relative;
        top:20px;
        background:white;
        box-shadow:0 0 5px 5px rgba(0,0,0,0.1);
        border-radius: 6px;
        padding:10px;
        overflow: scroll;
        height:700px;
        overflow-x: hidden;
    }
   
    </style>
</head>
<body>
    <?php require 'hf/header.php'; ?>

   <?php
    if(isset($_GET['id_product'])){
        require 'hf/showProduct.php';
    }

   ?>

    <div class="container">
        <div class="col-12 col-md-4 col-lg-6 col-sm-4" style='margin:0 auto;position:relative;top:10px; padding:10px;'>
        <ul class="list-group">
        <?php
            if(mysqli_num_rows($showTy) > 0 ){
                $typeN = $row_a['type_name'];
                $subT = $row_a['name_subType'];
            }else{
                $typeN = 'Not Found';
                $subT = 'Not Found';
                
            }
        ?>
        <li class="list-group-item"><?php echo $typeN; ?> </li>
        <li class="list-group-item">
        <?php 
        echo $subT; 
        
        ?>
        
         </li>
       
        <li class="list-group-item"> 
        <?php
        $type = $menus->select($conn,'type');
        while($row = mysqli_fetch_array($type)){


        
        ?>
       
        <a href="viewType.php?pages=1&id_type=<?php echo $row['id_type'] ?> "> <?php echo $row['type_name'] ?> </a>
        
        <?php
        }
        ?>
        
         </li>

      
        </ul>
        </div>
        <div class="row">
           
            <?php
                
                while($row = $showPro->fetch_array()){

                
            ?>

            <div class="col-12 col-md-4 col-lg-3 col-sm-6 p-3">
           

<!--Card-->
<div class="card align-items-center" >

    <!--Card image-->
    <div class="view overlay hm-white-slight">
        <img style='height:100px;position:relative;top:10px' src="admin/img/<?php echo $row['photo_product']; ?>" class="img-fluid" alt="">
        <a>
            <div class="mask"></div>
        </a>
    </div>
    <!--Card image-->

    <!--Card content-->
    <div class="card-body text-center">
        <!--Category & Title-->
      
       
     
        <a href="" class="grey-text">
            <h5 ><?php echo $row['name_subType'] ?></h5>
        </a>
        
        <p style='height:50px;'>
            <strong>
                <a href="?pages=<?php echo $_GET['pages'];?>&id_type=<?php echo $_GET['id_type']; ?>&id_subType=<?php echo $_GET['id_subType']; ?>&id_product=<?php echo $row['id_product'] ?>" class="dark-grey-text"><?php echo $row['name_product'] ?>
                   <!-- <span class="badge badge-pill danger-color">NEW</span>-->
                </a>
            </strong>
        </p>
        
        <h4 class="font-bold blue-text">
            <strong><?php echo $row['price_product']; ?>  Bath.</strong>
        </h4>
        <a class="btn btn-green btn-rounded btn-md" href='?pages=<?php echo $pages ?>&id_type=<?php echo $row['id_type'] ?>&id_subType=<?php echo $row['id_subType'] ?>&id_product_Buy=<?php echo $row['id_product'] ?>' >เพิ่มรายการ</a>
    </div>
    <!--Card content-->

</div>
<!--Card-->

            </div>
        
            <?php 
                }
            ?>
        </div>
     <div class="container">
        <!--Pagination -->
        <?php
         $showa = $menus->select($conn,'products where id_type="'.$_GET['id_type'].'" and id_subType="'.$_GET['id_subType'].'" ');

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
        <li class="page-item <?php echo  $prene; ?>"><a class="page-link" href='?pages=<?php echo 1;  ?>&id_type=<?php echo $_GET['id_type']; ?>&id_subType=<?php echo $_GET['id_subType']; ?>'>First</a></li>

        <!--Arrow left-->
        <li class="page-item <?php echo  $prene; ?> ">
            <a class="page-link" aria-label="Previous"  href='?pages=<?php echo intval($_GET['pages'])-1 ?>&id_type=<?php echo $_GET['id_type']; ?>&id_subType=<?php echo $_GET['id_subType']; ?>'>
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>

        <!--Numbers-->
        <?php
       
        for($i = 1 ; $i <= $total_page;$i++){     
        ?>
        <li class="page-item active"><a href='?pages=<?php echo $i ?>&id_type=<?php echo $_GET['id_type']; ?>&id_subType=<?php echo $_GET['id_subType']; ?>' class="page-link"><?php echo $i ?></a></li>
       <?php
        }
       ?>

        <!--Arrow right-->
        <li class="page-item  <?php echo $nextPre; ?>">
           
            <a class="page-link" aria-label="Next" href='?pages=<?php echo intval($_GET['pages'])+1 ?>&id_type=<?php echo $_GET['id_type']; ?>&id_subType=<?php echo $_GET['id_subType']; ?>' >
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            
        </li>

        <!--First-->
        <li class="page-item <?php echo $endpages; ?>"><a class="page-link" href='?pages=<?php echo $total_page;  ?>&id_type=<?php echo $_GET['id_type']; ?>&id_subType=<?php echo $_GET['id_subType']; ?>'>Last</a></li>

    </ul>
</nav>
     
     </div>
    </div>
                </div>
    <?php require 'hf/footer.php'; ?>
</body>
</html>
<?php
}
else header('location:index.php');
?>