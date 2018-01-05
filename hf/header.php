
<?php
    
     $menus = new menu;
 
  

?>

<style>
h1,h2,p,strong,a,h5,h6,button{
    font-family: 'Kanit', sans-serif;
}
#shop_add{
    height:200px;
    overflow:auto;
    overflow-x : none;
}
#button_a{
    border-style:none;
    width:100%;
    background:#ff4444;
}
#shopProduct {
    border-bottom: 1px solid rgba(0,0,0,0.1);
    padding:10px;    
}
#manu_asdd{
    position:fixed;
    width:40%;
    right:0px;
    top:10%;
    z-index:10;
    background: #ffffff;
    box-shadow:0 0 3px 5px rgba(0,0,0,0.1);
    padding:10px;
}
</style>
<!--Navbar-->


<nav class="navbar navbar-expand-lg special-color-dark

 navbar-dark indigo  scrolling-navbar " >

   <div class="container">
     <!-- Navbar brand -->
     <a class="navbar-brand" href="#">BodyFit</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <!-- Dropdown -->
           
                <?php
                    $sel = $menus->select($conn,"type");
                    while($row = $sel->fetch_array()){      
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false"> <?php echo $row['type_name']; ?>  </a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <?php
                            $sel2 = $menus->select($conn,"subtype WHERE id_type=".$row['id_type']);
                            while($row2 = $sel2->fetch_array()){     
                        ?>
                        <a class="dropdown-item" href="viewShow.php?pages=1&id_type=<?php echo $row['id_type']; ?>&id_subType=<?php echo $row2['id_subType'] ?>  "> <?php echo $row2['name_subType'] ?> </a>
                            <?php } ?>
                        </div>
                    </li>   
             <?php           
                    }
             ?>
            <li class="nav-item ">
                <a class="nav-link" href="#">วีดีโอแนะนำ <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <!-- Links -->
       
        <!-- Search form -->
       <div class='navbar-nav ml-auto nav-flex-icons'>
        

        


        <?php 
     
        if(!isset($_SESSION['user']) ){
            echo "<li class='nav-item'><a href='signin.php' class='nav-link waves-effect waves-light'><i class='fa fa-lock'></i></a></li>";
        }else{
            if($_SESSION['state'] == "admin"){
                $status = "Admin";
                $href = 'admin/coreAdmin.php';
            }else{
                $status = "User";
                $href = 'null';
            }
            $user = $_SESSION['user'];
            echo "<li class='nav-item '><a href=' ".$href." ' class='nav-link waves-effect waves-light'>Hello Sr. $user : $status </a></li>
            <li class='nav-item '><a href='forForm/logout.php' class='nav-link waves-effect waves-light danger-color ' style='font-weight:bold;'>Logout </a></li>";
        }  
        ?>
         <li class="nav-item dropdown" onclick='showShop()' >
         <a class="nav-link "  aria-haspopup="true" aria-expanded="false"> <i class="fa fa-shopping-basket" aria-hidden="true"></i> </a>
        
     </li>

       </div>
    </div>
    <!-- Collapsible content -->
   </div>

</nav>
<!--/.Navbar-->
                
<?php require 'shop.php'; ?>

<script>

 var el = ($id) => {
    return document.getElementById($id);
 };

 var showShop = () =>{

     if(el('manu_asdd').style.display === 'none' ){
        el('manu_asdd').style.display = 'block';
     }else{
        el('manu_asdd').style.display = 'none';
         
     }
 }

</script>