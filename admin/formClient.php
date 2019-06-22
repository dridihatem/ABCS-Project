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

                                    <div class="form-group ">
                                        <label for="matricule" class="control-label col-lg-3">Registration number</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="matricule" name="matricule" minlength="2" type="text" required value="<?php if($_GET['id']!=0){echo $account->getMatricule();} ?>"/>
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
                                        <label for="active" class="control-label col-lg-3">Active</label>
                                        <div class="col-lg-6">
                                           <select name="active"  class="form-control m-bot15">
                                               <option value="1" <?php if($_GET['id']!=0){if($account->getActive()==1){echo "Selected";} else echo NULL;} ?>>Yes</option>
                                               <option value="0" <?php if($_GET['id']!=0){if($account->getActive()==0){echo "Selected";} else echo NULL;} ?>>No</option>
                                           </select>
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

<?php
if($_GET['id']!=0){
 ?>
                 <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           List of Payslip
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                           <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Registration number</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>For month</th>
                        <th>For year</th>
                        <th>File</th>
                        <th>Inserted date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $account = $conn->query("SELECT * FROM ".$_SESSION['pfx']."_fiche WHERE type=1 && id_client=".mysqli_real_escape_string($conn,$_GET['id'])." ORDER BY mois  DESC");
                       $i=0;
                        while($res_account = $account->fetch_assoc()){
                            $i++;
                            $account_client = new Accounts();
                            $account_client->getFromDB($res_account['id_client']);
                            $month = $res_account['mois'];
                           switch ($month) {
    case 1:
        $month_select = "January";
        break;
    case 2:
        $month_select = "February";
        break;
    case 3:
        $month_select = "March";
        break;
         case 4:
        $month_select = "April";
        break;
         case 5:
        $month_select = "May";
        break;
         case 6:
        $month_select = "June";
        break;
         case 7:
        $month_select = "July";
        break;
         case 8:
        $month_select = "August";
        break;
         case 9:
        $month_select = "September";
        break;
         case 10:
        $month_select = "October";
        break;
         case 11:
        $month_select = "November";
        break;
         case 12:
        $month_select = "December";
        break;

}
                             ?>
                         <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $account_client->getMatricule(); ?></td>
                        <td><?php echo $account_client->getNom(); ?></td>
                        <td><?php echo $account_client->getPrenom(); ?></td>
                        <td><?php echo $month_select; ?></td>
                        <td><?php echo $res_account['annee']; ?></td>
                        <td><a href="documents/<?php echo $account_client->getMatricule(); ?>/<?php echo $res_account['pdf']; ?>" target="_blank"><img src="assets/images/pdf.png" /></a></td>
                        <td><?php echo date("d-m-Y",strtotime($res_account['date_creation'])); ?></td>
                        <td> <a class="btn btn-info" href="index.php?pg=formFiche&id=<?php echo $res_account["id"];?>" title="Modifier"><i class="fa fa-pencil"></i></a>
                                    <?php if($_SESSION['type']==1){ ?> <a class="btn btn-danger" href="controller/fiche_save.php?idMod=<?php echo $res_account["id"];?>&op=3&pg=<?php echo $_GET['pg']; ?>"><i class="fa fa-trash-o"></i> </a> <?php } ?></td>
                    </tr>
                    <?php 
                        }
                        ?>
                   
                </tbody>
            </table>
        </div>
                        </div>
                    </section>
                </div>
<?php } ?>                
            </div>
        </section>
    </section>
        
