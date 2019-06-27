<section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                      Certificates List
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span>
                    </header>
                    <div class="panel-body">

                       <form class="cmxform " id="commentForm" method="get" action="rechercheRetenu.php">
                       
                           <div class="col-md-8" style="background: #f1f1f1;border-radius: 10px 0px 0px 10px;padding: 10px;height: 148px;">

                           <div class="form-group col-md-12">
                                        <label for="cname" class="control-label">Personal number</label>
                                        <br />
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
                           
                            <div class="form-group col-md-6">
                                        <label for="y" class="control-label">Year</label>
                                        <br />
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
                        <div class="col-md-3"  style="background: #f1f1f1;border-radius: 0px 10px 10px 0px;padding: 57px;height: 100%;">

                                     <div class="form-group ">
                                       
                                        <div class="col-lg-12 text-center">
                                           <button type="submit" class="btn btn-primary" name="search">Search</button>
                                        </div>
                                    </div>
                         </div>      
                             

                       </form>
                       <?php 

                       ?>
                    </div>
                    <div class="panel-body">
                       
                    <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Personal number</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Year</th>
                        <th>File</th>
                        <th>Inserted date</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                        $query = "";
                        if(isset($_GET['matricule']) && !empty($_GET['matricule'])  && isset($_GET['annee']) && !empty($_GET['annee'])){
                            $query = "AND id_client = ".$_GET['matricule']."  && annee = ".$_GET['annee']."";

                        }
                         
                        $account = $conn->query("SELECT * FROM ".$_SESSION['pfx']."_fiche WHERE type=2 ".$query."  ORDER BY mois  DESC");
                        
                       $i=0;
                        while($res_account = $account->fetch_assoc()){
                            $i++;
                            $account_client = new Accounts();
                            $account_client->getFromDB($res_account['id_client']);
                            
                             ?>
                         <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $account_client->getMatricule(); ?></td>
                        <td><?php echo $account_client->getNom(); ?></td>
                        <td><?php echo $account_client->getPrenom(); ?></td>
                        <td><?php echo $res_account['annee']; ?></td>
                        <td><a href="documents/<?php echo $account_client->getMatricule(); ?>/<?php echo $res_account['pdf']; ?>" target="_blank"><img src="assets/images/pdf.png" /></a></td>
                        <td><?php echo date("d-m-Y",strtotime($res_account['date_creation'])); ?></td>
                        
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
</div>
</section>
</section>