<?php

if(!isset($_GET['id_product'])){
    header('location:coreAdmin.php');
}

session_start();

require '../conn.php';
require '../menus/menu.php';

$menus = new menu;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
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
</head>
<body  class="fixed-sn pink-skin">
<?PHP
   require_once './nav.php';
   ?>

    <main>
    
    
    <div class="container">
    
    <?php
    
        $show = $menus->select($conn,'products where id_product= "'.$_GET['id_product'].'" ');
        while($row = mysqli_fetch_array($show)){

        
    ?>
    
    <form action="server/editUp.php" method='post' enctype="multipart/form-data" >
                
                <p class="h5 text-center mb-4">เพิ่มรายการสินค้า</p>

                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" name='name_pro' id="form3" value='<?php echo $row['name_product'] ?>' class="form-control">
                    <input type="hidden" name='id_pro' id="form3" value='<?php echo $row['id_product'] ?>' class="form-control">
                    
                    <label for="form3">Your name</label>
                </div>

               
                <div class="md-form">
                    <i class="fa fa-tag prefix grey-text"></i>
                    <input type="text" id="form32" name='price_pro' value='<?php echo $row['price_product'] ?>' class="form-control">
                    <label for="form34">ราคา</label>
                </div>
                <div class="md-form">
                    <i class="fa fa-pencil prefix grey-text"></i>
                    <textarea type="text" id="form8" name='detail_pro' class="md-textarea" style="height: 100px"><?php echo $row['detail_product'] ?></textarea>
                    <label for="form8">Your message</label>
                </div>
                
                <div class="md-form" id='seShow' >
                    <select class="mdb-select" value="<?php echo $row['id_type'] ?>"  name='type_pro' id='showSe' >
                        

                        <?php
                        $type = $menus->select($conn,'type');
                        while($row1 = mysqli_fetch_array($type)){

                        
                        ?>
                        <option value="<?php echo $row1['id_type'];?>"><?php echo $row1['type_name'];?></option>
                        <?php
                        }
                        ?>        
                    </select>
                <label>อุปกรณ์คือ</label>
                </div>
                <div class="md-form" id='seShow' >
                    <select class="mdb-select" name='subType_pro'  value="<?php echo $row['id_subType'] ?>" id='showSe' >
                        

                        <?php
                        $type = $menus->select($conn,'subtype');
                        while($row2 = mysqli_fetch_array($type)){

                        
                        ?>
                        <option value="<?php echo $row2['id_subType'];?>"><?php echo $row2['name_subType'];?></option>
                        <?php
                        }
                        ?>        
                    </select>
                <label>อุปกรณ์คือ</label>
                </div>
                <div class="md-form">
                    <img style='width:150px;height:150px;' src="./img/<?php echo $row['photo_product'] ?>" alt="">
                
                </div>
               <div class="md-form">
               <div class="file-field">
                    <div class="btn btn-primary btn-sm">
                        <span>Choose file</span>
                        <input type="file"   name='filUpload'>
                    </div>
                    <div class="file-path-wrapper">
                    <input class="file-path validate" name='fileName' value='<?php echo $row['photo_product'] ?>' type="text" placeholder="Upload your file">
                    </div>
                </div>
               </div>

                <div class="text-center">
                    <button class="btn btn-unique">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                </div>
            
            
            </form>




    <?php
    
        }
    ?>
    </div>
    
    </main>



  <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../link/compiled.min/compiled.min.js"></script>
    <script type="text/javascript" src="../link/mdboot/mdboot/js/popper.min.js"></script>
    
    <script>
       

         new WOW().init();
        $(".button-collapse").sideNav();
        $('.mdb-select').material_select();


     
    </script>
</body>
</html>