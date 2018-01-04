<div class="backShow" id='backShow_a'>
        <div class="container descri " >
          <?php
          $showProduct = $menus->select($conn,"products where id_product='".$_GET['id_product']."'");
          while($row = mysqli_fetch_array($showProduct)){

          
          ?>
        <div class="row p-3" style='margin:0 auto'>
             <!--Grid column-->
    <div class="col-lg-6 col-md-12 mb-r dd" style='margin:0 auto'>
        <!--Featured image-->
        <div class="view overlay hm-white-slight rounded z-depth-2 mb-2">
        <img style='margin:0 auto;padding:10px;' src="admin/img/<?php echo $row['photo_product'] ?>" class="img-fluid" alt="First sample image">
        <a>
            <div class="mask"></div>
        </a>
        </div>

        <!--Excerpt-->
        <a href="" class="pink-text">
        <h6 class="mb-3 mt-4">
            <i class="fa fa-map "></i>
            <strong> Adventure</strong>
        </h6>
        </a>
        <h4 class="mb-3 font-bold dark-grey-text">
        <strong><?php echo $row['name_product'] ?></strong>
        </h4>
      
        <div style='width: 100%; height: 150px;overflow: scroll;overflow-x: hidden;'><?php echo $row['detail_product'] ?></div>
        <p>
        <a class="font-bold dark-grey-text">ลงวันที่ : </a><?php echo date('D d M y h:i a.', strtotime($row['created_at']) ) ?></p>
        <div class="row">
        <a class="btn btn-pink btn-rounded btn-md">Read more</a>
        <a class="btn btn-red btn-rounded btn-md" onclick='document.getElementById("backShow_a").style.display="none" '>Exit</a>
        </div>
    </div>
    <!--Grid column-->
        </div>

          <?php
          }
          ?>
        </div>
    </div>