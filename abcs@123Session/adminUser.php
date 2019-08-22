<section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                      Sessions Lists
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
                        <th>Login</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $account = $conn->query("SELECT * FROM ".$_SESSION['pfx']."_administrator ORDER BY id  DESC");
                       $i=0;
                        while($res_account = $account->fetch_assoc()){
                            $i++; ?>
                         <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $res_account['login']; ?></td>
                        <td>Admin</td>
                        <td> <a class="btn btn-info" href="index.php?pg=formUser&id=<?php echo $res_account["id"];?>" title="Modifier"><i class="fa fa-pencil"></i></a>
                                    <?php if($_SESSION['type']==1){ ?> <a class="btn btn-danger" href="controller/user_save.php?idMod=<?php echo $res_account["id"];?>&op=3&pg=<?php echo $_GET['pg']; ?>"><i class="fa fa-trash-o"></i> </a> <?php } ?></td>
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