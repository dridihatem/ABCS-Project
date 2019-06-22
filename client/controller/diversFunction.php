<?php

////////////////////////////
function extraireTxt($txt, $max)
{

    return (strlen($txt) > $max ? substr(substr($txt, 0, $max), 0, strrpos(substr($txt, 0, $max), " ")) . "&hellip;" : $txt);

}


////////////////////////////
function extraireArt($txt,$max){
	if (strlen($txt)>$max) {$newTxt = substr($txt, 3, $max);}
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


function datefr($date)
{

    $split = explode(" ", $date);

    $dte = $split[0];

    $split = explode("-", $dte);

    $annee = $split[0];

    $mois = $split[1];

    $jour = $split[2];

    return $jour . "/" . $mois . "/" . $annee;

}


///////////////////////////

function dateEn($date)
{

    $split = explode(" ", $date);

    $dte = $split[0];

    $split = explode("-", $dte);

    $annee = $split[0];

    $mois = $split[2];

    $jour = $split[1];

    return $jour . "-" . $mois . "-" . $annee;

}

///////////////////////////

function dateAr($date)
{

    $split = explode(" ", $date);

    $dte = $split[0];

    $split = explode("-", $dte);

    $annee = $split[0];

    $mois = $split[1];

    $jour = $split[2];

    return $jour . "-" . $mois . "-" . $annee;

}

///////////////////
function sendMail($mail,$titre,$body){
mail ($mail,$titre,$body);
return $mail;
}

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

function formatedTxt($txt)
{

    $txtFormated = preg_replace(" /<[^>]*>/", "", trim(strip_tags($txt)));

    return $txtFormated;

}

////////////////////////////

///////////////////////


function formatDate($date)
{

    $split = split(" ", $date);

    $dte = $split[0];

    $split = split("-", $dte);

    $annee = $split[0];

    $mois = $split[1];

    $jour = $split[2];

    return $annee . $mois . $jour;

}


function formatInverseDate($date)
{

    $date = extraireDate($date, 0, 4) . "-" . extraireDate($date, 4, 2) . "-" . extraireDate($date, 6, 2);

    return $date;

}
////////////////////////////
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
?>
