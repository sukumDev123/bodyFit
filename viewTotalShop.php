<?php
session_start();
require 'conn.php';
require 'menus/menu.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php require 'link/link.php' ?>
</head>
<body>
<?php
        require 'hf/header.php';
    ?>
 <div class="container p-3">
 <h1>ยืนยันการซื้อ-ขาย</h1>
 <table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Name Product</th>
      <th>Price Product</th>
      <th>Num</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if(!empty($_SESSION['shopping_cart'])){

        foreach($_SESSION["shopping_cart"] as $keys => $values){

        
    ?>


    <tr>
      <th scope="row"><?php echo $values['item_id'] ?></th>
      <td><?php echo $values['item_name'] ?></td>
      <td><?php echo $values['item_price'] ?></td>
      <td><?php echo $values['item_quantity'] ?></td>
    </tr>


    <?php
        }
        ?>
     <tr>  
                    <td colspan="3" align="right">Total</td>  
                    <td align="right">฿ <?php echo number_format($total, 2); ?></td>  
                    <td>จำนวน : <?php echo count($_SESSION['shopping_cart']) ?> </td>  
                </tr>  
    <?php
    }
    ?>
  </tbody>
</table>
 </div>

</div>
    <?php require 'hf/footer.php' ?>
</body>
</html>