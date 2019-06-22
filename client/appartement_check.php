<?php
session_start();
error_reporting(0);
$_SESSION['pfx'] = "abc";

require_once("modules/Connection.class.php");
$db = new DB();
$conn = $db->connect();
if(isset($_POST['matricule']))
{
$matricule=mysqli_real_escape_string($conn,$_POST['matricule']);
$query=$conn->query("select * from ".$_SESSION['pfx']."_accounts where matricule='".$matricule."'");
$row=$query->num_rows;
if($row==0)
{
echo "<span style='color:green;'>Reference available to insert</span>";
}
else
{
echo "<span style='color:red;'>Reference exists</span>";
}
}
?>
