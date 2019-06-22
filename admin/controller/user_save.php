<?php  
session_start();
set_time_limit(0);

if(isset($_SESSION["authentification"])){
	include("../modules/Connection.class.php");
	include("../modules/Administrator.class.php");
    $db = new DB();
    $conn = $db->connect();

if((!$_REQUEST['op'])||($_REQUEST['op']>5))	{header("Location: ../index.php?pg=tableau-de-bord");}
else{
if($_REQUEST['op']==1){
	
	$Administrator = new Administrator();
	$dest_dossier = "../assets/images/";
	chmod($dest_dossier,0777);
	include("_uploadPhoto.php");
	if($fichier == "d41d8cd98f00b204e9800998ecf8427e."){$fichier = NULL;}
	
	$Administrator->setAdministrator("",$_REQUEST["login"],$_REQUEST["pass"],md5($_REQUEST["pass"]),$_REQUEST['type'],$_REQUEST['etat']);
	if($Administrator->saveToDB()){$et = "done";}else{$et = "err";}
	header("location:../index.php?pg=adminUser&info=".$et);
	}
else if($_REQUEST['op']==2){
	
	$Administrator = new Administrator();
	
	$dest_dossier = "../assets/images/";
	chmod($dest_dossier,0777);
	include("_uploadPhoto.php");
	if(isset($fichier)&&($fichier!="d41d8cd98f00b204e9800998ecf8427e.")){$image = $fichier;} else {$image = $_POST["avatar"];}
	
	
	$Administrator->setAdministrator($_REQUEST["id"],$_REQUEST["login"],$_REQUEST["pass"],md5($_REQUEST["pass"]),$_REQUEST['type'],$_REQUEST['etat']);
	if($Administrator->updateToDB()){$et = "done";}else{$et = "err";}
	header("location:../index.php?pg=".$_GET['pg']."&id=".$_REQUEST['id']."&info=".$et);
	}
else if($_REQUEST['op']==4){		
	$Administrator = new Administrator();
	if($Administrator->publishToDB($_GET["id"],$_GET["pub"])){$et = "done";}else{$et = "err";}
	header("location:../index.php?pg=adminUser&info=".$et);
	}	
else if($_GET['op']==3){		
	$Administrator = new Administrator();
	if($Administrator->deleteFromDB($_GET["idMod"])){$et = "done";}else{$et = "err";}
	header("location:../index.php?pg=adminUser&info=".$et);
	}	
}}else{header("Location: ../index.php?pg=tableau-de-bord");}
?>