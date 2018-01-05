<?php

require '../../conn.php';
require '../../menus/menu.php';
$menus = new menu;

$menus->deleteP($conn,"products where id_product='".$_GET['id_product']."' ");
echo "

<script>

alert('ลบเรียบร้อยแล้ว');
window.location.href='../list-product.php';
</script>

";


?>