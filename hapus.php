<?php 
include "koneksi.php";
$idguru   = $_GET['idg'];
mysql_query("delete from tblinsertrincian where idsuprandom='$idguru'") or die(mysql_error());
mysql_query("delete from tblrincianisian where idsuprandom='$idguru'") or die(mysql_error());
echo "<meta http-equiv=\"refresh\" content=\"5;url=logout.php/>";
header('location:logout.php');
?>