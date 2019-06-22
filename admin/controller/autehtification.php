<?php

header("Content-Type: text/plain ; charset=utf-8");
header("Cache-Control: no-cache , private");
header("Pragma: no-cache");

session_start();
//error_reporting(0);
require_once("../modules/Connection.class.php");
require_once("../modules/Administrator.class.php");
$db = new DB();
$conn = $db->connect();


if ( isset($_POST['login']) && $_POST['login'] != "" && isset($_POST['pass']) && $_POST['pass'] != "" )
{
	$login = trim(addslashes($_POST['login']));
	$pass = trim(addslashes(md5($_POST['pass'])));
	
$result = $conn->query("SELECT * FROM ".$_SESSION['pfx']."_administrator WHERE login='".mysqli_real_escape_string($conn,$login)."' && passMD5='".mysqli_real_escape_string($conn,$pass)."' ");

$row = $result->num_rows;

	if($row ==1){
$res = $result->fetch_assoc();
		$_SESSION['authentification'] = $res['id'];
		$_SESSION['login'] = $res['login'];
		$_SESSION['type'] = $res['type'];
		$admin = new Administrator();
		$admin->updateEtatFromDB($_SESSION['authentification']);
		header("location:../index.php?pg=tableau-de-bord");
	}else{
		header("location:../index.php?error=pwd");
	}
	
}else{
		header("location:../index.php");
}
?>