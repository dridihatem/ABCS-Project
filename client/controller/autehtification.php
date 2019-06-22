<?php

header("Content-Type: text/plain ; charset=utf-8");
header("Cache-Control: no-cache , private");
header("Pragma: no-cache");

session_start();
error_reporting(0);
require_once("../modules/Connection.class.php");
require_once("../modules/Accounts.class.php");
$db = new DB();
$conn = $db->connect();


if ( isset($_POST['login']) && $_POST['login'] != "" && isset($_POST['pass']) && $_POST['pass'] != "" )
{
	$login = trim(addslashes($_POST['login']));
	$pass = trim(addslashes(md5($_POST['pass'])));
	
$result = $conn->query("SELECT * FROM ".$_SESSION['pfx']."_accounts WHERE matricule='".mysqli_real_escape_string($conn,$login)."' && passwordcrypt='".mysqli_real_escape_string($conn,$pass)."' && active = 1");

$row = $result->num_rows;

	if($row ==1){
$res = $result->fetch_assoc();
		$_SESSION['idClient'] = $res['id'];
		$_SESSION['matricule'] = $res['matricule'];
		
		header("location:../index.php?pg=tableau-de-bord");
	}else{
		header("location:../index.php?error=pwd");
	}
	
}else{
		header("location:../index.php");
}
?>