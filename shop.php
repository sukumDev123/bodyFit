<div class="container">
    <div clss='row'>
        <div class="col-12 col-md-4 col-sm-6 " id='manu_asdd'>
        <?php require 'pooo.php' ?>
            <h6>รายการซื้อ</h6>
            <div id='shop_add'>
            <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                            <div class='item_i' style='padding:0;border-bottom: 1px solid rgba(0,0,0,0.1);'>
                                <p><?php echo $values['item_id'] ?></p>
                                <p><?php echo $values['item_name'] ?></p>

                                <p><?php echo $values['item_price'] ?></p>
                                <p><?php echo $values['item_quantity'] ?></p>
                                <a href="?action=delete&id_delete=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a>
                                
                            
                            </div>
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          </div>
            <div id='shop_add_total'>
                 <tr>  
                    <td colspan="3" align="right">Total</td>  
                    <td align="right">฿ <?php echo number_format($total, 2); ?></td>  
                    <td>จำนวน : <?php echo count($_SESSION['shopping_cart']) ?> </td>  
                </tr>  
                <a href="viewTotalShop.php">ยืนยัน</a>
            </div>

                          <?php  
                          } else{
                              
                          
                          ?>  
           <div id='shop_add_total'>
                 <tr>  
                    <td colspan="3" align="right">ไม่เจอรายการ</td>  
                   
                    
                </tr>  
            </div>
        </div>
        <?php
                          }
        ?>
    </div>
</div>
<style>
.item_i p{
    padding:0px;
    margin:0;
}
#manu_asdd{
    display:none;
}
</style>