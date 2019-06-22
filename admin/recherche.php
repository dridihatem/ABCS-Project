<?php
$matricule = $_GET['id_client'];
$mois = $_GET['mois'];
$annee = $_GET['annee'];
header("location:index.php?pg=adminFilterFiche&matricule=".$matricule."&mois=".$mois."&annee=".$annee."");
 ?>