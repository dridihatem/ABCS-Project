<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
        <img src="assets/images/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu" style="width: 65%;">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <h3 class="no-padding" style="margin-top: 0px;">Pay Portal</h3>

            
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        
       
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
       
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="assets/images/avatar1_small.jpg">
                <span class="username">Admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="index.php?pg=formUser&id=<?= $_SESSION['authentification']; ?>"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="index.php?disconnect"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"  <?php if($_GET['pg']=="adminClient" || $_GET['pg']=="formClient"){echo 'class="active"';} ?>>
                        <i class="fa fa-user"></i>
                        <span>Clients</span>
                    </a>
                    <ul class="sub">
                        <li><a href="index.php?pg=formClient&id=0" <?php if($_GET['pg']=="formClient"){echo 'class="active"';} ?>>Add new Client</a></li>
                        <li><a href="index.php?pg=adminClient" <?php if($_GET['pg']=="adminClient"){echo 'class="active"';} ?>>All clients</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"   <?php if($_GET['pg']=="adminFiche" || $_GET['pg']=="formFiche" || $_GET['pg']=="adminFilterFiche"){echo 'class="active"';} ?>>
                        <i class="fa fa-book"></i>
                        <span>Payslip</span>
                    </a>
                    <ul class="sub">
                        <li><a href="index.php?pg=formFiche&id=0">Add new</a></li>
                        <li><a href="index.php?pg=adminFiche">All Payslip</a></li>
                        <li><a href="index.php?pg=adminFilterFiche">Search</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" <?php if($_GET['pg']=="adminRetenu" || $_GET['pg']=="formRetenu" || $_GET['pg']=="adminFilterRetenu"){echo 'class="active"';} ?>>
                        <i class="fa fa-bullhorn"></i>
                        <span>Withholding Tax Certificate</span>
                    </a>
                    <ul class="sub">
                        <li><a href="index.php?pg=formRetenu&id=0">Add new</a></li>
                        <li><a href="index.php?pg=adminRetenu">All Certificates</a></li>
                        <li><a href="index.php?pg=adminFilterRetenu">Search</a></li>

                    </ul>
                </li>
                 <li>
                    <a href="index.php?pg=adminfichier" <?php if($_GET['pg']=="adminfichier"){echo 'class="active"';} ?>>
                        <i class="fa  fa-folder-open-o"></i>
                        <span>All files</span>
                    </a>
                </li>
                 <li>
                    <a href="index.php?pg=formUpdate" <?php if($_GET['pg']=="formUpdate"){echo 'class="active"';} ?>>
                        <i class="fa  fa fa-hdd-o"></i>
                        <span>Insert Files</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"   <?php if($_GET['pg']=="formUser" || $_GET['pg']=="adminUser"){echo 'class="active"';} ?>>
                        <i class="fa fa-th"></i>
                        <span>Configuration</span>
                    </a>
                    <ul class="sub">
                        <li><a href="index.php?pg=formUser&id=<?php echo $_SESSION['authentification']; ?>">Change password</a></li>
                         <li><a href="index.php?pg=adminUser">List session</a></li>
                        <li><a href="index.php?pg=formUser&id=0">Create session</a></li>
                        
                    </ul>
                </li>
                
               
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>