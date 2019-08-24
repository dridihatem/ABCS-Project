  <?php
        $admin= new Administrator();
        $admin->getFromDB($_GET['id']);
?>

<section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
<div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li class="active">Add or Update account</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           My profile
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                           <?php require("msg.php");?>
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" action="controller/user_save.php?op=<?php if($_GET["id"]== 0){echo "1";}else{echo "2";}?>&pg=formUser" method="post" enctype="multipart/form-data">
                                    <input type="hidden" value="<?php if($_GET['id']!=0){echo $admin->getId();} ?>" name="id">
                                     <input type="hidden" value="<?php if($_GET['id']!=0){echo $admin->getType();} else {echo "1";} ?>" name="type">
                                     <input type="hidden" value="<?php if($_GET['id']!=0){echo $admin->getEtat();} else {echo "1";} ?>" name="etat">


                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Login</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="login" minlength="2" type="text" required value="<?php if($_GET['id']!=0){echo $admin->getLogin();} ?>"/>
                                        </div>
                                    </div>

                                    <div class="form-group ">


                                        <label for="pass" class="control-label col-lg-3">Password</label>
                                        <div class="col-lg-6">
                                    <div class="input-group m-bot15">
                                <input class=" form-control" id="pass" name="pass" minlength="2" type="password" required  value="<?php if($_GET['id']!=0){echo $admin->getPass();} ?>"/>
                                <span toggle="#pass" class="input-group-addon btn-danger toggle-password"><i class="fa fa-fw fa-eye"></i></span>
                            </div>

                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group ">
                                       
                                        <div class="col-lg-12 text-center">
                                           <button type="submit" class="btn btn-primary">Save/Update</button>
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