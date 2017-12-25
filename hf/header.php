
<?php
    
     $menus = new menu;
 
    $name_type = $menus->selectMenus($conn);

?>


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
            //Start Create Menus list
                for($i = 0 ; $i < count($name_type[0]) ; $i++ ){
                    echo 
                    '<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> '.$name_type[0][$i].' </a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">';
                             $sub_type = $menus->selectSub($name_type[1][$i],$conn);

                            for($j = 0; $j < count($sub_type); $j++ ){
                                 echo '<a class="dropdown-item" href="#">'.$sub_type[$j].'</a>';
                            }

                        echo "  

                        </div>
                    </li>";    
                }
            //End Create Manus List    
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
            if($_SESSION['status'] == "admin"){
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
         <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-shopping-basket" aria-hidden="true"></i> </a>
         <div class="dropdown-menu dropdown-primary primary-color special-color-dark" aria-labelledby="navbarDropdownMenuLink">
             
             
         </div>
     </li>

       </div>
    </div>
    <!-- Collapsible content -->
   </div>

</nav>
<!--/.Navbar-->
                