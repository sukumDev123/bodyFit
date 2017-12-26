<?php

require '../../conn.php';

require '../../menus/menu.php';

$menu = new menu;

if(isset($_POST['type_pro'])){
    $show = $menu->select($conn, "sub_type WHERE id_subType=".intval($_POST['type_pro']) );
    $row = $show->fetch_array();
    $id_type = $row['id_type'];
    $name = $_POST['name_pro'];
    $de = $_POST['detail_pro'];
    $price = $_POST['price_pro'];
    $sub_T = $_POST['type_pro'];

    if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"../img/".$_FILES["filUpload"]["name"]))
    {
        echo "Copy/Upload Complete<br>";
        $file = $_FILES['filUpload']['name'];
        $s = $menu->insert($conn,"product(name_pro,detail,photoFile,id_type,id_subType,price,date_now)VALUES( '$name' , '$de' , '$file' , '$id_type' ,'$sub_T','$price',NOW() )");   
        if($s){
            echo "uploads...";
        }
        header('location:../list-product.php');
    }else{
        echo "Not";
    }

}


?>