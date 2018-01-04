<!--Double navigation-->
<header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed mdb-sidenav">
            <ul class="custom-scrollbar list-unstyled" style="max-height:100vh;">
                <!-- Logo -->
                <!--/. Logo -->
                <!--Social-->
                <li>
                    <ul class="social">
                        <li><a href="../index.php" class="icons-sm fb-ic"><i class="fa fa-home"> Home Page</i></a></li>
                        
                    </ul>
                </li>
                <!--/Social-->
                <!--Search Form-->
                <li>
                    <form class="search-form" role="search">
                        <div class="form-group waves-light">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </li>
                <!--/.Search Form-->
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                       
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i> ตัวเลือก<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="list-product.php" class="waves-effect">รายการสินค้า</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">รายชื่อ User</a>
                                    </li>
                                    <li><a href="coreAdmin.php" class="waves-effect">เพิ่มข้อมูลสินค้า</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                       
                        
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>Admin : <?php echo $_SESSION['user'] ; ?></p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block"> <?php echo $_SESSION['user'] ; ?></span></a>
                </li>
               
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->
<!--/.Double navigation-->