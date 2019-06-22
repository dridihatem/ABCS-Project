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
            <h3 class="no-padding" style="margin-top: 0px;">Payslip Portal</h3>

            
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
                <span class="username"><?php echo $_SESSION['matricule']; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="index.php?pg=formClient&id=<?= $_SESSION['idClient']; ?>"><i class=" fa fa-suitcase"></i>Profile</a></li>
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
                    <a href="javascript:;"   <?php if($_GET['pg']=="adminFiche" || $_GET['pg']=="formFiche" || $_GET['pg']=="adminFilterFiche"){echo 'class="active"';} ?>>
                        <i class="fa fa-book"></i>
                        <span>Payslip</span>
                    </a>
                    <ul class="sub">
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
                        <li><a href="index.php?pg=adminRetenu">All Whithholding</a></li>
                        <li><a href="index.php?pg=adminFilterRetenu">Search</a></li>

                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;"   <?php if($_GET['pg']=="formClient" || $_GET['pg']=="formClient"){echo 'class="active"';} ?>>
                        <i class="fa fa-cogs"></i>
                        <span>Configuration</span>
                    </a>
                    <ul class="sub">
                        <li><a href="index.php?pg=formClient&id=<?php echo $_SESSION['idClient']; ?>">Change password</a></li>
                        
                    </ul>
                </li>
                 <li>
                    <a href="index.php?pg=adminSecurity" <?php if($_GET['pg']=="adminSecurite"){echo 'class="active"';} ?>>
                        <i class="fa fa-unlock-alt"></i>
                        <span>Security</span>
                    </a>
                    
                </li>
                
               
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>