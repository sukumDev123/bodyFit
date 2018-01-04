<?php

require '../../conn.php';
require '../../menus/menu.php';

$menus = new menu;
$id = $_POST['id_pro'];
$show = $menus->select($conn,'products where id_product="'.$id.'"  ');
$photoOld = mysqli_fetch_array($show);
$file = "../img/".$photoOld['photo_product'];
$filUp = $_POST['fileName'];
$name = $_POST['name_pro'];
$de = $_POST['detail_pro'];
$price = $_POST['price_pro'];
$id_type = $_POST['type_pro'];
$sT = $_POST['subType_pro'];


  
    if($photoOld['photo_product'] == null ){
        up();
    }
    if($photoOld['photo_product'] != $filUp) 
    {
            if(!unlink($file)){
                echo 'error';
            }else{
                echo 'suscess';    
                up();
            }  
    }
   
    header('location:../list-product.php');


function up(){
    if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"../img/".$_FILES["filUpload"]["name"]))
            {
             echo "Copy/Upload Complete<br>";
            }else{
            echo "Not";
             }   
}
$menus->update($conn,'products set name_product="'.$name.'",detail_product="'.$de.'",price_product="'.$price.'",id_type="'.$id_type.'",id_subType="'.$sT.'",photo_product="'.$_POST['fileName'].'" where id_product="'.$id.'" ');
?>