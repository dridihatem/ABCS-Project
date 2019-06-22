<section id="main-content">
<section class="wrapper">

<!--mini statistics start-->
<div class="row">
    <div class="col-md-3">
        <section class="panel" style="background-color: #fff;">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <div class="gauge-canvas">
                        <h4 class="widget-h" style="margin-bottom: 1px; color:#373736;">Number of clients</h4>
                        <span style="font-size: 40px;margin-top: 65px; color: #373736;"><?php $client = new Accounts();$client->getCount(); ?></span>    
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-3">
        <section class="panel" style="background-color: #32323a;">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <div class="gauge-canvas">
                        <h4 class="widget-h" style="margin-bottom: 1px;color: #fff;">Number of file</h4>
                        <span style="font-size: 40px;margin-top: 65px;color: #fff;"><?php $fichier = new Fiche();$fichier->getCount(); ?></span>    
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-3">
        <section class="panel" style="background-color: #fff;">
            <div class="panel-body">
                 <div class="top-stats-panel">
                    <div class="gauge-canvas">
                 <h4 class="widget-h" style="margin-bottom: 1px;color: #373736;">Number of messages</h4>
                        <span style="font-size: 40px;margin-top: 65px;color: #373736;"><?php $message = new Message();$message->getCount(); ?></span>  
            </div>
        </div>
            </div>
        </section>
    </div>
    <div class="col-md-3">
        <section class="panel" style="background-color: #32323a;">
            <div class="panel-body">
                <div class="top-stats-panel">
                   <div class="gauge-canvas">
                     <h4 class="widget-h" style="margin-bottom: 1px;color: #fff;">Number of users</h4>
                        <span style="font-size: 40px;margin-top: 65px;color: #fff;"><?php $admin = new Administrator();$admin->getCount(); ?></span>  
                </div>
            </div>
            </div>
        </section>
    </div>
    <div class="col-md-6">
                        <section class="panel weather-box">
                            <div class="symbol purple-bg" style="background: #ea434d;">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="value">
                                <i class="fa fa-plus-square"></i>
                                <p><a href="index.php?pg=formClient&id=0">Add new User</a></p>
                                
                            </div>
                        </section>
    </div>
    <div class="col-md-6">
                        <section class="panel weather-box">
                            <div class="user-heading symbol red-bg">
                                <i class="fa fa-book" style="color:#FFF;"></i>
                            </div>
                            <div class="value" style="color: #fa8564;">
                                <i class="fa fa-plus-square"></i>
                                <p><a href="index.php?pg=formFiche&id=0">Add new Payslip</a></p>
                                
                            </div>
                        </section>
    </div>
     <div class="col-md-6">
                        <section class="panel weather-box">
                            <div class="user-heading symbol terques-bg">
                                <i class="fa fa-bullhorn" style="color:#FFF;"></i>
                            </div>
                            <div class="value" style="color: #1fb5ad;">
                                <i class="fa fa-plus-square"></i>
                                <p><a href="index.php?pg=formWithholding&id=0">Add new Whithholding</a></p>
                                
                            </div>
                        </section>
    </div>
    <div class="col-md-6">
                        <section class="panel weather-box">
                            <div class="user-heading symbol red-bg" style="background:#32323a;">
                                <i class="fa fa-cogs" style="color:#FFF;"></i>
                            </div>
                            <div class="value" style="color: #32323a;">
                                <i class="fa fa-plus-square"></i>
                                <p><a href="index.php?pg=formUser&id=<?php echo $_SESSION['authentification']; ?>">My profile</a></p>
                                
                            </div>
                        </section>
    </div>
</div>


<!--mini statistics end-->



</section>
</section>