<?php 
include "koneksi.php";
$idguru   = $_GET['idg'];
mysqli_query($con,"delete from tblinsertrincian where idsuprandom='$idguru'") or die(mysql_error());
mysqli_query($con,"delete from tblrincianisian where idsuprandom='$idguru'") or die(mysql_error());
echo "<meta http-equiv=\"refresh\" content=\"5;url=logout.php/>";
header('location:logout.php');
?>