
<section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
<div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">File Manager</a></li>
                        <li class="active">Add new File</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                          Files manager
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                           <?php require("msg.php");?>
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="upload_form" action="" method="post" enctype="multipart/form-data">
                                    


                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Choose a zip file to upload:</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="file1" required="required"  name="file1" type="file" required /> <i class="fa fa-info-circle"></i> Number max  to upload Folder : 50  
                                        </div>
                                    </div>

                                    
                                    <div class="form-group ">
                                       
                                        <div class="col-lg-12 text-center">
                                            <input type="button" value="Upload File" onclick="uploadFile()" class="btn btn-primary">
                                        
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </section>
                    <section class="panel">
                        <header class="panel-heading">
                          Porgress
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                          
                        <progress id="progressBar" value="0" max="100" style="width:100%;"></progress>
                        <h3 id="status"></h3>
                         <p id="loaded_n_total"></p>
                              </div>
                    </section>
                     <section class="panel">
                        <header class="panel-heading">
                          Update Database
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                          <?php 
                           /* if(isset($_POST['updatedatabase'])){

                                $list = $conn->query("SELECT * FROM ".$_SESSION['pfx']."_fiche GROUP BY id_client");
                                while($res_list = $list->fetch_assoc()){
                                    $matricule= $res_list['id_client'];
                                    $client = new Accounts();
                                    $client->getFromDB($matricule);
                                    



                                    if ($handle = opendir('documents/'.$client->getMatricule().'/')) {
                                    
                                    while (false !== ($entry = readdir($handle))) {
                                        if($entry !== $res_list['pdf']  ){

                                           
                                            
                                        if ($entry != "." && $entry != "..") {
                                        
                                           
                                               $dateentry = substr($entry, 0, 4);
                                                $monthentry = substr($entry, 4,2);

                                                $fiche = new Fiche();

                                                $fiche->setFiche(NULL, $matricule, $monthentry, $dateentry, $entry, date("Y-m-d H:i:s"), 1);
                                                if($fiche->saveToDB()){
                                                    

                                                    $rs = "<span>Database updated</span>";
                                                }
                                                
                                                   }


                                           
                                        }
                                    }

                                    closedir($handle);
                                }

                                }
                               
       }
   
                          echo $rs;*/
                          ?>
                          
                            <div class="col-md-6">
                        <form name="upadd" id="upd" method="post" class="cmxform form-horizontal " action="">
                            <a href="javascript: void(0);loadAjax();" id="updates" name="updatedatabase" class="btn btn-primary"> <i class="fa fa-spinner"></i> 1 . Update DataBase </a>
                           

                        </form>
                    </div>
                         <div class="col-md-6 text-right">
                            
                        <form name="upadd" id="clean" method="post" class="cmxform form-horizontal " action="">
                             <a href="javascript: void(0);loadAjaxA();" id="clean" name="clean" class="btn btn-warning"> <i class="fa fa-refresh"></i> 2 . Clean DataBase </a>
                           

                        </form>
                    </div>

                    </section>
                    <section class="panel">
                        <header class="panel-heading">
                          Porgress
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">

                           
                            <div id="results"><!-- Results are displayed here --></div>
        <div id="fade"></div>
        <div id="modal">
            <img id="loader" src="assets/images/loading.gif" />
        </div>
        <div id="fadeA"></div>
        <div id="modalA">
            <img id="loader" src="assets/images/loading.gif" />
        </div>
                                          </section>
                </div>
            </div>
        </section>
    </section>