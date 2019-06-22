<?php  
session_start();
set_time_limit(0);

if(isset($_SESSION["idClient"])){
	include("../modules/Connection.class.php");
	include("../modules/Accounts.class.php");
    $db = new DB();
    $conn = $db->connect();

if((!$_REQUEST['op'])||($_REQUEST['op']>5))	{header("Location: ../index.php?pg=tableau-de-bord");}
else{
if($_REQUEST['op']==1){
	
	$Administrator = new Accounts();
	$Administrator->setAdministrator("",$_REQUEST["matricule"],$_REQUEST["password"],md5($_REQUEST["password"]),$_REQUEST['nom'],$_REQUEST['prenom'],$_REQUEST['email'],$_REQUEST['active']);
	if($Administrator->saveToDB()){$et = "done";}else{$et = "err";}
	header("location:../index.php?pg=adminUser&info=".$et);
	}
else if($_REQUEST['op']==2){
	
	$Administrator = new Accounts();
	
	$Administrator->setAccounts($_REQUEST["id"],$_REQUEST["matricule"],$_REQUEST["password"],md5($_REQUEST["password"]),$_REQUEST['nom'],$_REQUEST['prenom'],$_REQUEST['email'],$_REQUEST['active']);
	if($Administrator->updateToDB()){$et = "done";}else{$et = "err";}
	header("location:../index.php?pg=".$_GET['pg']."&id=".$_REQUEST['id']."&info=".$et);
	}
else if($_REQUEST['op']==4){		
	$Administrator = new Accounts();
	if($Administrator->publishToDB($_GET["id"],$_GET["pub"])){$et = "done";}else{$et = "err";}
	header("location:../index.php?pg=adminUser&info=".$et);
	}	
else if($_GET['op']==3){		
	$Administrator = new Accounts();
	if($Administrator->deleteFromDB($_GET["idMod"])){$et = "done";}else{$et = "err";}
	header("location:../index.php?pg=adminUser&info=".$et);
	}	
}}else{header("Location: ../index.php?pg=tableau-de-bord");}
?>