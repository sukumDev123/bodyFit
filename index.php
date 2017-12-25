<?php
    include_once('menus/menu.php');  
    session_start(); 
    require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require_once 'link/link.php' ?>

    <title>BodyFit Company</title>
</head>
<body>

<?php require_once 'hf/header.php' ?>
<div class="container p-3 bkk">
<div class="col-12 col-lg-4 col-sm-6" style='margin:auto;' >
<div class="md-form" >
    <i class="fa fa-search prefix"></i>
    <input type="text" id="form-search" class="form-control">
    <label for="form-search">Search...</label>
</div>
</div>
</div>

<div class="container p-3 bkk">
    <div class="row">
    
    <div class="col-4" >
        <div class="col-10" >
            <div class="infor" style='box-shadow:0 5px 5px 1px rgba(0,0,0,0.1); '>
                
            <ul class="list-group">
                <li class="list-group-item">  
                <h6 class="mb-2 mt-2 ml-4">
                    <i class="fa fa-bars ">  </i>  
                    <strong>   รายการเสริม</strong>
                </h6>
                <li class="list-group-item"> <a href="">สินค้าใหม่</a> </li>
                <li class="list-group-item"> <a href="">สินค้าลดราคา</a> </li>
                <li class="list-group-item"> <a class='text-while' href="">สินค้าแนะนำ</a> </li>
          </ul>

                <!---->
                
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-8 col-sm-8 ">
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
            <img class="d-block w-100" src="img/photo10p.jpg" height='380'  alt="First slide">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <img class="d-block w-100"  src="img/photo13.jpg" height='380' alt="Second slide">
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
            <img class="d-block w-100"  src="img/photo14.jpg" height='380' alt="Third slide">
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

<div class="container p-3" style='margin-top:2%;'>
    <div class="row">
        <div class="col-12 col-lg-4 col-sm-6">
        <div class="card">
    <h3 class="card-header primary-color white-text">หลากหลายแบรณ์</h3>
    <div class="card-body">
        <h4 class="card-title">รวบรวมสิ่งที่ดีที่สุด</h4>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a class="btn btn-primary">Go view prodect</a>
    </div>
</div>
</div>
<div class="col-12 col-lg-8 col-sm-6 col-centered">

            <div class="row text-center " >
            <div class="col-4 ">
                <img src="img/photo4.jpg" class='mw-100' alt="">
            </div>
            <div class="col-4">
                <img src="img/photo5.jpg" class='mw-100'   alt="">
            </div>
            <div class="col-4">
                <img src="img/photo7.jpg" class='mw-100'  alt="">
            </div>
        
            </div>
        </div>
    </div>

</div>
<div class="container">
<select style='border-style:none; padding:10px; '>
    <option value="" disabled selected>Choose your option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
</select>
<label>Example label</label>
</div>
<div class="container p-3" style='margin-top:2%;'>

    <div class="row">
        <div class="col-12 col-lg-4 col-sm-6">
        for Item
        </div>
        <div class="col-12 col-lg-4 col-sm-6">
        for Item
        </div><div class="col-12 col-lg-4 col-sm-6">
        for Item
        </div>
    </div>

</div>
<?php require_once 'hf/footer.php' ?>


<script>

new WOW().init();

var showSub = () =>{
    let showSub = document.getElementById('showSub');
    showSub.style.display = 'block'; 
}
</script>
</body>
</html>