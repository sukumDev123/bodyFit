<?php
    include_once('menus/menu.php');  
    session_start(); 
    require 'conn.php';

?>

<!DOCTYPE html>
<html lang="en" ng-add>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php require_once 'link/link.php' ?>

    <title>BodyFit Company</title>
</head>
<body >

<?php require_once 'hf/header.php' ?>


<div class="container p-3" ng-add='phonecatApp' >
    <div class="row" ng-controller='test'>
  
    
    <div class="col-12 col-lg-12 col-sm-12 ">
        <div class=" col-show-lg" style='margin:auto'>
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/photo10p.jpg"   alt="First slide">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <img class="d-block w-100"  src="img/photo13.jpg"  alt="Second slide">
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
            <img class="d-block w-100"  src="img/photo14.jpg"  alt="Third slide">
        </div>
        <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
        </div>
    </div>
    
    </div>

</div>


<div class="container">

<div class="container p-3" style='margin-top:2%;'>
<h2 class='p-3'>New Product</h2>
    <div class="row">
    
    <?php
        $se = $menus->select($conn,"products p INNER JOIN subtype st ON p.id_subType = st.id_subType INNER JOIN type t ON st.id_type = t.id_type ORDER BY id_product DESC LIMIT 3 ");
        while($row = $se->fetch_array()){

        
    ?>
       <div class="col-12 col-lg-4 col-sm-4">
            <!--Card Wider-->
<div class="card card-cascade wider">

<!--Card image-->
<div class="view overlay hm-white-slight">
    <img style='height:200px;margin:auto;width:auto;' src="admin/img/<?php echo $row['photo_product'] ?>" class="img-fluid">
    <a href="#!">
        <div class="mask"></div>
    </a>
</div>
<!--/Card image-->

<!--Card content-->
<div class="card-body text-center">
    <!--Title-->
    <h5 class="card-title"><strong><?php echo $row['name_product']; ?></strong> <span class="badge red">New</span></h5>
    <!--Linkedin-->
    <a class="icons-sm " style='color:#00C851 '><i class="fa fa-plus"> </i></a>

   

</div>
<!--/.Card content-->

</div>
<!--/.Card Wider-->


       </div>
        <?php
        
        }
        ?>
    
    </div>

</div>
</div>
</div>

<?php require_once 'hf/footer.php' ?>
<script>

new WOW().init();
$(".button-collapse").sideNav();
        $('.mdb-select').material_select();

var showSub = () =>{
    let showSub = document.getElementById('showSub');
    showSub.style.display = 'block'; 
}
</script>
<style>
.col-show-lg img{
    height:480px;
}

@media screen and (max-width: 880px){
    .col-show-lg img{
    height:260px;
}
}
@media screen and (max-width: 480px){
    .col-show-lg img{
    height:160px;
}
}
</style>
</body>
</html>