
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
        
        <div class="container">
            <div style='margin:auto;' class="col-12 col-lg-6 col-sm-4">

                <form action="server/uploadImg.php" method='post' enctype="multipart/form-data" >
                
                    <p class="h5 text-center mb-4">เพิ่มรายการสินค้า</p>

                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" name='name_pro' id="form3" class="form-control">
                        <label for="form3">Your name</label>
                    </div>

                   
                    <div class="md-form">
                        <i class="fa fa-tag prefix grey-text"></i>
                        <input type="text" id="form32" name='price_pro' class="form-control">
                        <label for="form34">ราคา</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-pencil prefix grey-text"></i>
                        <textarea type="text" id="form8" name='detail_pro' class="md-textarea" style="height: 100px"></textarea>
                        <label for="form8">Your message</label>
                    </div>
                    
                    <div class="md-form" id='seShow' >
                        <select class="mdb-select" name='type_pro' id='showSe' >
                            <option value="" disabled selected>Choose your option</option>
                            <?php
                                $ss = $menu->select($conn,"subtype INNER JOIN type ON subtype.id_type = type.id_type");
                                while($row = $ss->fetch_array()){       
                                $keep = $row['id_type'];
                                   
                            ?>
                                <option value="<?php echo $row['id_subType'] ?>"><?php echo $row['type_name'] .' - '. $row['name_subType']; ?></option>
                            <?php
                                
                                }
                            ?>
                        </select>
                    <label>อุปกรณ์คือ</label>
                    </div>
                    
                   <div class="md-form">
                   <div class="file-field">
        <div class="btn btn-primary btn-sm">
            <span>Choose file</span>
            <input type="file" name='filUpload'>
        </div>
        <div class="file-path-wrapper">
           <input class="file-path validate" type="text" placeholder="Upload your file">
        </div>
    </div>
                   </div>

                    <div class="text-center">
                        <button class="btn btn-unique">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                    </div>
                
                
                </form>


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


     
     
    </script>
     
</body>
 
   
</html>