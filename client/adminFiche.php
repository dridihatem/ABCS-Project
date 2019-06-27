<section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                      PaySlips List
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
                        <th>Month</th>
                        <th>Year</th>
                        <th>File</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $account = $conn->query("SELECT * FROM ".$_SESSION['pfx']."_fiche WHERE type = 1 && id_client=".$_SESSION['idClient']." ORDER BY mois  DESC");
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
                        <td><a href="../admin/documents/<?php echo $account_client->getMatricule(); ?>/<?php echo $res_account['pdf']; ?>" target="_blank"><img src="assets/images/pdf.png" /></a></td>
                    
                       
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