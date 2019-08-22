<?php
$matricule = $_GET['id_client'];
$annee = $_GET['annee'];
header("location:index.php?pg=adminFilterRetenu&matricule=".$matricule."&annee=".$annee."");
 ?>
