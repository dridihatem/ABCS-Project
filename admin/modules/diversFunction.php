<?php

$mod="";
$url = $_SERVER['REQUEST_URI'];

if(isset($_GET['m']))
{
$mod = $_GET['m'];	
	if(!is_numeric($mod)){$p = 'includes/Main/home'.$_SESSION['lng'].'.php';}
		else{
		$row = mysql_fetch_object(mysql_query(sprintf("select * from ".$_SESSION['pfx']."_module where id = %d",mysql_real_escape_string($mod))));
			if(file_exists("includes/".$row->type."/ContentFormat".$_SESSION['lng'].".php")){ $p = "includes/".$row->type."/ContentFormat".$_SESSION['lng'].".php";} else { $p = 'includes/Main/home'.$_SESSION['lng'].'.php';}
		}
		}else{$p = 'includes/Main/home'.$_SESSION['lng'].'.php';}
/////////////////////////////
function getNomDeDomaine($url) {
    
    $hostname = parse_url($url, PHP_URL_HOST);
    $hostParts = explode('.', $hostname);
    $numberParts = sizeof($hostParts);
    $domain='';
    
    if(1 === $numberParts) {
        $domain = current($hostParts);
    }
    elseif($numberParts>=2) {
        $hostParts = array_reverse($hostParts);
        $domain = $hostParts[2] .'.'. $hostParts[1] .'.'.$hostParts[0];
    }
    return $domain;
}
////////////////////////////
function urlRewrite($pg,$m,$sm,$ssm,$sssm){
if(isset($sssm)&&$sssm!=NULL)	$newUrl = "index.php?pg=".renameTitre($pg)."&m=".$m."&sm=".$sm."&ssm=".$ssm."&sssm=".$sssm;
else if(isset($ssm)&&$ssm!=NULL)	$newUrl = "index.php?pg=".renameTitre($pg)."&m=".$m."&sm=".$sm."&ssm=".$ssm;
	else if(isset($sm)&&$sm!=NULL)	$newUrl = "index.php?pg=".renameTitre($pg)."&m=".$m."&sm=".$sm;
		else $newUrl = "index.php?pg=".renameTitre($pg)."&m=".$m;
	//else $newUrl = renameTitre($pg);
	//$newUrl = $pg.",".$m.",".$sm."html";
		
return $newUrl;
}

////////////////////////////
function extraireTxt($txt,$max){
return (strlen($txt) > $max ? substr(substr($txt,0,$max),0,strrpos(substr($txt,0,$max)," "))."&hellip;" : $txt);
}

////////////////////////////
function extraireAct($txt,$max,$url,$style){
	if (strlen($txt)>$max) {$newTxt = substr($txt, 0, $max );
	$newTxt .= '&hellip; ';
	$newTxt .= '  <a href="'.$url.'" class="'.$style.'" title="Lire la suite" >Lire la suite&raquo;</a>';	
	}
	else {$newTxt = $txt;}
return $newTxt;
}

////////////////////////////
function extraireActEn($txt,$max,$url,$style){
	if (strlen($txt)>$max) {$newTxt = substr($txt, 0, $max );
	$newTxt .= '&hellip; ';
	$newTxt .= '  <a href="'.$url.'" class="'.$style.'">Read more</a>';	
	}
	else {$newTxt = $txt;}
return $newTxt;
}

////////////////////////////
function extraireEv($txt,$max){
	if (strlen($txt)>$max) {$newTxt = substr($txt, 0, $max );
	$newTxt .= '&hellip; ';
	}
	else {$newTxt = $txt;}
return $newTxt;
}

////////////////////////////
function extraireEvEn($txt,$max,$url,$style){
	if (strlen($txt)>$max) {$newTxt = substr($txt, 0, $max );
	$newTxt .= '&hellip; ';
	}
	else {$newTxt = $txt;}
return $newTxt;
}

////////////////////////////
function extraireActAr($txt,$max,$url,$style){
	if (strlen($txt)>$max) {$newTxt = substr($txt, 0, $max );
	$newTxt .= '&hellip; ';
	$newTxt .= '  <a href="'.$url.'" class="'.$style.'">&#1605;&#1586;&#1610;&#1583; &#1605;&#1606; &#1575;&#1604;&#1578;&#1601;&#1575;&#1589;&#1610;&#1604;</a>';	
	}
	else {$newTxt = $txt;}
return $newTxt;
}


////////////////////////////
function extraireArt($txt,$max){
	if (strlen($txt)>$max) {$newTxt = substr($txt, 4, $max);}
	else {$newTxt = $txt;}
return $newTxt;
}

////////////////////////////
function showTxt($txt,$min){
	$newTxt = substr($txt, $min);
return $newTxt;
}
////////////////////////////
function extraireTitle($title){
	if (strlen($title)>70) {$newTitle = substr($title, 0, 70);	$newTitle .= "&hellip;";}
	else {$newTitle = $title;}
return $newTitle;
}


///////////////////////////
function datefr($date) { 
	$split = split(" ",$date);
	$dte = $split[0];
	$split = split("-",$dte);
	$annee = $split[0];
	$mois = $split[1];
	$jour = $split[2];
return $jour."/".$mois."/".$annee; 
}

///////////////////////////
function dateEn($date) { 
	$split = split(" ",$date);
	$dte = $split[0];
	$split = split("-",$dte);
	$annee = $split[0];
	$mois = $split[2];
	$jour = $split[1];
return $jour."-".$mois."-".$annee; 
}
///////////////////////////
function dateAr($date) { 
	$split = split(" ",$date);
	$dte = $split[0];
	$split = split("-",$dte);
	$annee = $split[0];
	$mois = $split[1];
	$jour = $split[2];
return $jour."-".$mois."-".$annee; 
}

///////////////////
function sendMail($mail,$titre,$body){
mail ($mail,$titre,$body);
return $mail;
}
////////////////////////////////

function VerifierAdresseMail($adresse)
{
   $Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#';
   if(preg_match($Syntaxe,$adresse))
      return true;
   else
     return false;
}
////////////////////////
//////////////////
function renameTitre($str, $charset='utf-8')
{
    $str = htmlentities($str, ENT_NOQUOTES, $charset);
    $str = preg_replace('#\&([A-za-z])(?:acute|cedil|circ|grave|ring|tilde|uml)\;#', '\1', $str);
    $str = preg_replace('#\&([A-za-z]{2})(?:lig)\;#', '\1', $str);
    $str = preg_replace('#\&[^;]+\;#', '', $str);
	$str = preg_replace('#[^a-zA-Z0-9\-\._]#', '-', $str);
    return strtolower($str);
}

/////////////////
function tailleFichier($fichier)
{
	$taille_fichier = filesize($fichier);

	if ($taille_fichier >= 1073741824) {$taille_fichier = round($taille_fichier / 1073741824 * 100) / 100 . " Go";}
	elseif ($taille_fichier >= 1048576){ $taille_fichier = round($taille_fichier / 1048576 * 100) / 100 . " Mo";}
	elseif ($taille_fichier >= 1024) {$taille_fichier = round($taille_fichier / 1024 * 100) / 100 . " Ko";}
	else {$taille_fichier = $taille_fichier . " o";} 
	return $taille_fichier;
}
///////////////////////////////
function extraireDate($dte,$min,$max){
	$dte = substr($dte, $min, $max);
return $dte;
}
////////////////////////
/////////////////////////////

function formatedTxt($txt){
 $txtFormated = ereg_replace("<[^>]*>", "", trim(strip_tags($txt))); 
 return $txtFormated;
}
////////////////////////////
///////////////////////

function formatDate($date) { 
	$split = split(" ",$date);
	$dte = $split[0];
	$split = split("-",$dte);
	$annee = $split[0];
	$mois = $split[1];
	$jour = $split[2];
return $annee.$mois.$jour; 
}

function formatInverseDate($date) { 
	$date = extraireDate($date,0,4)."-".extraireDate($date,4,2)."-".extraireDate($date,6,2);
	return $date;
}
////////////////////////////
function deleteLastChar($str) { 

$newStr=array();
for ($i=0;$i<(strlen($str)-1);$i++) {
$newStr[$i]=$str[$i];
}
$newChaine = NULL;
for ($i=0;$i<count($newStr);$i++) {
$newChaine .= $newStr[$i];
}
return $newChaine;
}

/////////////////////////////
 function youtubeId($url){
	$parsed_url = parse_url($url);	
	if (strpos($parsed_url['query'], "v=") === false) {
		$query = $parsed_url[path]; 
		$debut = strpos($query, "v/")+2; 
		$temp = substr($query, $debut, strlen($query));
		$pos = strpos($temp, "/");
		$fin = ($pos === false)?strlen($query):$pos; 
		$youtubeId = substr($query, $debut, $fin);
	} else {
		$query = $parsed_url[query];
		parse_str($query, $output);
		$youtubeId =  $output['v'];
	}
	return $youtubeId;
}



//////////////////////add date month////////
function add_date($date_str, $months)
{
    $date = new DateTime($date_str);
    $start_day = $date->format('j');

    $date->modify("+{$months} month");
    $end_day = $date->format('j');

    if ($start_day != $end_day)
        $date->modify('last day of last month');

    return $date;
}
////////// la partie numeric
function keepOnlyNumeric($text){ 
   $validChars = "0123456789"; 
   $strOnlyNumeric = ""; 
   $longueurtext = strlen($text); 
   for($i=0;$i<$longueurtext;$i++) { 
      $lettre = substr($text,$i,1); 
      $pos = strpos($validChars, $lettre); 
      if($pos !== FALSE) { 
          $strOnlyNumeric .= $lettre; 
      } 
   } 
 return $strOnlyNumeric; 
} 
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>
