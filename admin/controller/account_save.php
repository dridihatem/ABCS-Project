<?php
session_start();
set_time_limit(0);
error_reporting(0);
if(isset($_SESSION["authentification"])){
    include("../modules/Connection.class.php");
    include("../modules/Accounts.class.php");
    $db = new DB();
    $conn = $db->connect();

    if((!$_REQUEST['op'])||($_REQUEST['op']>70))	{header("Location: ../index.php?pg=tableau-de-bord");}
    else{

        if($_GET['op']==3){
            $annonce = new Accounts();
            if($annonce->deleteFromDB($_GET["idMod"])){$et = "done";}else{$et = "err";}
            header("location:../index.php?pg=".$_GET['pg']."&info=".$et);
        }

        
        else if($_GET['op']==5){
            $produitt = new Accounts();
            if($produitt->deleteFichierFromDB($_GET["idMod"])){$et = "done";}else{$et = "err";}
            header("location:../index.php?pg=".$_GET['pg']."&id=".$_GET['idMod']."&info=".$et);
        }
       

        else if($_REQUEST['op']==1){
            $client = new Accounts();
            $client->setAccounts("",$_REQUEST['matricule'],$_REQUEST["password"],md5($_REQUEST["password"]),$_REQUEST["nom"],$_REQUEST["prenom"],$_REQUEST["email"],$_REQUEST["active"]);
            if($client->saveToDB()){$et = "done";}else{$et = "err";}

            header("location:../index.php?pg=".$_GET['pg']."&info=".$et);
        }
        else if($_REQUEST['op']==2){
            

           $client = new Accounts();
           
            $client->setAccounts($_REQUEST['id'],$_REQUEST['matricule'],$_REQUEST["password"],md5($_REQUEST["password"]),$_REQUEST["nom"],$_REQUEST["prenom"],$_REQUEST["email"],$_REQUEST["active"]);
            if($client->updateToDB()){$et = "done";}else{$et = "err";}
            header("location:../index.php?pg=".$_GET['pg']."&id=".$_REQUEST['id']."&info=".$et);
        }
    }}else{header("Location: ../index.php?pg=tableau-de-bord");}
?>
