<?php 
$fiche = new Fiche();
$fiche->getFromDB($_GET['id']);

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
                        <li class="active">Add or Update Whithholding</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Payslip
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <?php require("msg.php");?>
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" action="controller/certificat_save.php?op=<?php if($_GET["id"]== 0){echo "1&pg=adminRetenu";}else{echo "2&pg=formRetenu";}?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" value="<?php if($_GET['id']!=0){echo $fiche->getId();} ?>" name="id">
                                    <input name="pdf" type="hidden" id="id" value="<?php if ($_GET["id"]!= 0){echo $fiche->getPdf();}?>"/>
                                    <input name="mois" type="hidden" id="id" value="0"/>
                                    
                                    <input name="date_creation" type="hidden" id="id" value="<?php if ($_GET["id"]!= 0){echo $fiche->getDate_creation();}?>"/>
                                     <input name="type" type="hidden" id="id" value="2"/>

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Client</label>
                                        <div class="col-lg-6">
                                            <select id="e2" style="width:300px" class="populate " name="id_client" required="">
                                                <option value=""></option>
                                                <?php
                                                $accont = $conn->query("SELECT * FROM ".$_SESSION['pfx']."_accounts ORDER BY nom");
                                                while($res_acount = $accont->fetch_assoc()){
                                                    if($_GET['id']!=0){
                                                        if($fiche->getId_client() == $res_acount['id']){$sl = "selected";} else {$sl = NULL;}
                                                    }
                                                    echo '<option value="'.$res_acount['id'].'" '.$sl.'>'.$res_acount['matricule'].'-'.$res_acount['nom'].'-'.$res_acount['prenom'].'</option>';
                                                }
                                                 ?>
                                                
                                            </select>
                                        </div>
                                    </div>

                                   
                                    <div class="form-group ">
                                        <label for="year" class="control-label col-lg-3">Year</label>
                                        <div class="col-lg-6">
                                            <select id="e3" style="width:300px" class="populate " name="annee" required="">
                                                <?php
                                                for($i=2010; $i <= date('Y'); $i++){
                                                    if($_GET['id']!=0){
                                                        if($fiche->getAnnee() == $i){
                                                            $ssl = "selected";
                                                        }
                                                        else {$ssl = NULL;}
                                                    }
                                                    echo '<option value="'.$i.'" '.$ssl.'>'.$i.'</option>';
                                                }
                                                 ?>
                                                

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="prenom" class="control-label col-lg-3">File Pay</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="prenom" name="fichier" minlength="2" type="file" />
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <div class="col-lg-12 text-center">
                                    <?php
                                    if($_GET['id']!=0)
                                    {
                                        $filee = $fiche->getPdf();

                                        if(isset($filee) && !empty($filee)){
                                            $client = new Accounts();
                                            $client->getFromDB($fiche->getId_client());

                                            echo '
                                            <div class="gallery-item" style="background: #415160;border-radius: 10px;padding: 8px;width: 108px;margin: 0 auto;">
                                            <a href="documents/'.$client->getMatricule().'/'.$filee.'" target="_blank"><img src="assets/images/pdf2.png" style="width: 50px;"/></a>';
                                            echo ' <a href="controller/certificat_save.php?idMod='.$_GET['id'].'&op=5&pg=formRetenu" style="color:#FFF;"><i class="fa fa-trash"></i> Supprimer</a>';
                                            echo '<div>';
                                        }
                                    }
                                     ?>
                                 </div>
                                    </div>
                                    <p>
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
        
