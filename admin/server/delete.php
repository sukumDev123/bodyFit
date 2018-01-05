<?php

require '../../conn.php';
require '../../menus/menu.php';
$menus = new menu;

$selec = $menus->selectA($conn,'products where id_product="'.$_GET['id_product'].'" ','photo_product');

$row = $selec->fetch_array();

$file = '../img/'.$row['photo_product'];

if(!unlink($file)){
    echo 'not move';
}
else{
    $menus->deleteP($conn,"products where id_product='".$_GET['id_product']."' ");
    echo "
    
    <script>
    
    alert('ลบเรียบร้อยแล้ว');
    window.location.href='../list-product.php';
    </script>
    
    ";
}



?>