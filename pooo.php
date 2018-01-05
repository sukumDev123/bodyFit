<?php
    $i = 0;
         
             if(isset($_GET["id_product_Buy"]))  
             {  
                $show = $menus->select($conn,'products where id_product= "'.$_GET["id_product_Buy"].'" ');
                $row = mysqli_fetch_array($show);
                  if(isset($_SESSION["shopping_cart"]))  
                  {  
                      $count = count($_SESSION['shopping_cart']);
                    $item_array = array(  
                        'item_id'               => $row['id_product'] ,  
                        'item_name'               =>     $row['name_product'],  
                        'item_price'          =>    $row['price_product'],  
                        'item_quantity'          =>     1  
                   );  
                   $_SESSION["shopping_cart"][$count] = $item_array;  
                  }  
                  else  
                  {  
                       $item_array = array(  
                            'item_id'               => $row['id_product'] ,  
                            'item_name'               =>     $row['name_product'],  
                            'item_price'          =>    $row['price_product'],  
                            'item_quantity'          =>     1  
                       );  
                       $_SESSION["shopping_cart"][0] = $item_array;  
                  }  
             }  
//unset($_SESSION["shopping_cart"]);
if(isset($_GET['action'])){
    if($_GET["action"] == "delete")  
    {  
         foreach($_SESSION["shopping_cart"] as $keys => $values)  
         {  
              if($values["item_id"] == $_GET["id_delete"])  
              {  
                   unset($_SESSION["shopping_cart"][$keys]);  
                   echo '<script>alert("Item Removed")</script>';  
                   echo '<script>window.location="index.php"</script>';  
              }  
         }  
    }  
}
?>
