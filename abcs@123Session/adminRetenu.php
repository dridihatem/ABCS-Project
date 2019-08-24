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
                         <?php require("msg.php");?>
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
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $account = $conn->query("SELECT * FROM ".$_SESSION['pfx']."_certificat WHERE type = 2 ORDER BY mois  DESC");
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
                        <td><a href="certificat/<?php echo $account_client->getMatricule(); ?>/<?php echo $res_account['pdf']; ?>" target="_blank"><img src="assets/images/pdf.png" /></a></td>
                        <td><?php echo date("d-m-Y",strtotime($res_account['date_creation'])); ?></td>
                        <td> <a class="btn btn-info" href="index.php?pg=formRetenu&id=<?php echo $res_account["id"];?>" title="Modifier"><i class="fa fa-pencil"></i></a>
                                    <?php if($_SESSION['type']==1){ ?> <a class="btn btn-danger" href="controller/certificat_save.php?idMod=<?php echo $res_account["id"];?>&op=3&pg=<?php echo $_GET['pg']; ?>"><i class="fa fa-trash-o"></i> </a> <?php } ?></td>
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