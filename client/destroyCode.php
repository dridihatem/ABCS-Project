<?php
unset($_SESSION['idClient']);
session_destroy();
header("location:index.php");
?>
