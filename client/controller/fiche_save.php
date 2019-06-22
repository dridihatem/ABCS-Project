<?php
session_start();
set_time_limit(0);
error_reporting(0);
if(isset($_SESSION["idClient"])){
    include("../modules/Connection.class.php");
    include("../modules/Fiche.class.php");
    include("../modules/Accounts.class.php");
    $db = new DB();
    $conn = $db->connect();

    if((!$_REQUEST['op'])||($_REQUEST['op']>70))	{header("Location: ../index.php?pg=tableau-de-bord");}
    else{

        if($_GET['op']==3){
            $annonce = new Fiche();
            if($annonce->deleteFromDB($_GET["idMod"])){$et = "done";}else{$et = "err";}
            header("location:../index.php?pg=".$_GET['pg']."=&info=".$et);
        }

        
        else if($_GET['op']==5){
            $produitt = new Fiche();
            if($produitt->deleteFichierFromDB($_GET["idMod"])){$et = "done";}else{$et = "err";}
            header("location:../index.php?pg=".$_GET['pg']."&id=".$_GET['idMod']."&info=".$et);
        }
       

        else if($_REQUEST['op']==1){


            $fiche = new Fiche();

            $client = new Accounts();
            $client->getFromDB($_REQUEST["id_client"]);
            if (!file_exists('../documents/'.$client->getMatricule().'')) {
                mkdir('../documents/'.$client->getMatricule().'', 0777, true);
            }
            $dest_dossier = "../documents/".$client->getMatricule()."/";
            chmod($dest_dossier,0777);
            include("_uploadPhoto.php");
            if($fichier == "d41d8cd98f00b204e9800998ecf8427e."){$fichier = NULL;}


            $fiche->setFiche(NULL,$_REQUEST["id_client"], $_REQUEST["mois"], $_REQUEST["annee"], $fichier,date("Y-m-d H:i:s"),$_REQUEST["type"]);

            
            if($fiche->saveToDB()){$et = "done";}else{$et = "err";}

            header("location:../index.php?pg=".$_GET['pg']."&info=".$et);
        }
        else if($_REQUEST['op']==2){
            $fiche = new Fiche();

           $client = new Accounts();
            $client->getFromDB($_REQUEST["id_client"]);
            if (!file_exists('../documents/'.$client->getMatricule().'')) {
                mkdir('../documents/'.$client->getMatricule().'', 0777, true);
            }
            $dest_dossier = "../documents/".$client->getMatricule()."/";
            chmod($dest_dossier,0777);
            include("_uploadPhoto.php");


            if(isset($fichier)&&($fichier!="d41d8cd98f00b204e9800998ecf8427e.")){$image = $fichier;} else {$image = $_REQUEST["pdf"];}

            $fiche->setFiche($_REQUEST["id"], $_REQUEST["id_client"], $_REQUEST["mois"], $_REQUEST["annee"], $image,$_REQUEST['date_creation'],$_REQUEST["type"]);
            if($fiche->updateToDB()){$et = "done";}else{$et = "err";}
            header("location:../index.php?pg=".$_GET['pg']."&id=".$_REQUEST['id']."&info=".$et);
        }
    }}else{header("Location: ../index.php?pg=tableau-de-bord");}
?>
