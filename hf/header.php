




<!--Navbar-->
<nav class="navbar navbar-expand-lg special-color-dark

 navbar-dark indigo fixed-top scrolling-navbar " >

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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Weight Training</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">ดัมเบล</a>
                    <a class="dropdown-item" href="#">บอดีเวท</a>
                    <a class="dropdown-item" href="#">บาร์เบล</a>
                    <a class="dropdown-item" href="#">ลูกบอลน้ำหนัก</a>
                    
                    <a class="dropdown-item" href="#">เชือก Battle Ropes </a>
                    
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> อุปกรณ์โยคะ</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">ดัมเบล</a>
                    <a class="dropdown-item" href="#">บอดีเวท</a>
                    <a class="dropdown-item" href="#">บาร์เบล</a>
                    <a class="dropdown-item" href="#">ลูกบอลน้ำหนัก</a>
                    
                    <a class="dropdown-item" href="#">เชือก Battle Ropes </a>
                    
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cardio</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">ลู่วิ่งไฟฟ้า / Treadmill</a>
                    <a class="dropdown-item" href="#">เครื่องย่ำสลับเท้า / Steppers</a>
                    <a class="dropdown-item" href="#">อุปกรณ์ ต่างๆ</a>
                </div>
            </li>

            


            
            <li class="nav-item ">
                <a class="nav-link" href="#">วีดีโอแนะนำ <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <!-- Links -->
       
        <!-- Search form -->
       <ul class='navbar-nav ml-auto nav-flex-icons'>
        

        


        <?php 
     
        if(!isset($_SESSION['user']) ){
            echo "<li class='nav-item'><a href='signin.php' class='nav-link waves-effect waves-light'><i class='fa fa-lock'></i></a></li>";
        }else{
           

            $user = $_SESSION['user'];
            echo "<li class='nav-item'><a href='#' class='nav-link waves-effect waves-light'>Hello Sr. $user </a></li>
            <li class='nav-item'><a href='forForm/logout.php' class='nav-link waves-effect waves-light'>Logout </a></li>";
        }
            
        
        ?>





       </ul>
    </div>
    <!-- Collapsible content -->
   </div>

</nav>
<!--/.Navbar-->
                