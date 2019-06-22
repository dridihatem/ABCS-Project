<?php
        $account= new Accounts();
        $account->getFromDB($_GET["id"]);
        ?>
        
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
<div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">Client</a></li>
                        <li class="active">Add or Update account</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Client Area
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <?php require("msg.php");?>
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" action="controller/account_save.php?op=<?php if($_GET["id"]== 0){echo "1&pg=adminClient";}else{echo "2&pg=formClient";}?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" value="<?php if($_GET['id']!=0){echo $account->getId();} ?>" name="id">
                                    <input type="hidden" value="<?php if($_GET['id']!=0){echo $account->getActive();} ?>" name="avtive">

                                    <div class="form-group ">
                                        <label for="matricule" class="control-label col-lg-3">Registration number</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="matricule" readonly="" name="matricule" minlength="2" type="text" required value="<?php if($_GET['id']!=0){echo $account->getMatricule();} ?>"/>
                                            <span id="disp"></span>
                                        </div>
                                    </div>

                                    <div class="form-group ">


                                        <label for="pass" class="control-label col-lg-3">Password</label>
                                        <div class="col-lg-6">
                                    <div class="input-group">
                                <input  class=" form-control" id="pass" name="password" minlength="2" type="text" required  value="<?php if($_GET['id']!=0){echo $account->getPassword();} ?>"  data-character-set="a-z,A-Z,0-9,#" data-size="10"/>
                                <span toggle="#pass" class="input-group-addon btn-danger toggle-password"><i class="fa fa-fw fa-eye"></i></span>
                            
                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="nom" class="control-label col-lg-3">Name</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="nom" name="nom" minlength="2" type="text" required  value="<?php if($_GET['id']!=0){echo $account->getNom();} ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="prenom" class="control-label col-lg-3">Surname</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="prenom" name="prenom" minlength="2" type="text" required  value="<?php if($_GET['id']!=0){echo $account->getPrenom();} ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-3">E-mail</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="email" name="email" minlength="2" type="email" required  value="<?php if($_GET['id']!=0){echo $account->getEmail();} ?>"/>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group ">
                                       
                                        <div class="col-lg-12 text-center">
                                           <button type="submit" class="btn btn-primary" id="exi">Save/Update</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </section>
    </section>
        
