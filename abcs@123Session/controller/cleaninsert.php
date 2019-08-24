<?php 

session_start();
error_reporting(0);

$_SESSION['pfx'] = "abc";
date_default_timezone_set('Africa/Tunis');
/*date_default_timezone_set('Europe/Paris');*/
setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
require_once("../modules/Connection.class.php");
$db = new DB();
$conn = $db->connect();

    require_once("../modules/Accounts.class.php");
    require_once("../modules/Fiche.class.php"); 
    $co = $conn->query("DELETE t1 FROM ".$_SESSION['pfx']."_fiche t1 INNER JOIN  ".$_SESSION['pfx']."_fiche t2 WHERE  t1.id > t2.id AND t1.pdf = t2.pdf;");
    if($co){
    	echo 'Database Clean';
    }


?>