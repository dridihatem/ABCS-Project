 <?php

session_start();
//error_reporting(0);

$_SESSION['pfx'] = "abc";
date_default_timezone_set('Africa/Tunis');
/*date_default_timezone_set('Europe/Paris');*/
setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
require_once("../modules/Connection.class.php");
$db = new DB();
$conn = $db->connect();

    require_once("../modules/Accounts.class.php");
    require_once("../modules/Fiche.class.php"); 
 $list = $conn->query("SELECT * FROM ".$_SESSION['pfx']."_fiche GROUP BY id_client");
                                while($res_list = $list->fetch_assoc()){
                                    $matricule= $res_list['id_client'];
                                    $client = new Accounts();
                                    $client->getFromDB($matricule);
                                    



                                    if ($handle = opendir('../documents/'.$client->getMatricule().'/')) {
                                    
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
                                echo $rs;
                                ?>