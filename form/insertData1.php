<?php
include ('../function/database.php');

$value1= $_GET['satu'];
$value2 = $_GET['duasub1'];
$value3= $_GET['duasub2'];
$indexuser=$_GET['variableuser'];
$oddeven=$_GET['ganjilgenap'];
$tahunajaran=$_GET['tahun'];
$waktudatenow=$_GET['waktusekarang'];

if ($value1 == null)
{
	$value1 = 0;
}

global $bobot;

foreach ($value1 as $key => $valuev)
{
	$bobot = $valuev * 1;
}
$last = $bobot+ $value2 + $value3;
if ($last && $bobot && $value2 && $value3)
{
	header("refresh: 0; url='../kd/insertAep2.php?kode=$indexuser && no1=$bobot && no2a=$value2 && no2b=$value3 && bab1=$last && bab2=$last && ganjilgenap=$oddeven && tahun=$tahunajaran && waktusekarang=$waktudatenow'");
}
else
{
	echo "<script type='text/javascript'> alert('Data ada yang belum di-isi! - Mohon Dicek data nya yaaa');</script>";
	header("refresh: 0; url='../kd/insertAep.php?ambilguru=$indexuser && ganjilgenap=$oddeven && years=$tahunajaran && waktusekarang=$waktudatenow");
}
//$new= insertSql1 ($indexuser,$last,$oddeven,$tahunajaran, $waktudatenow);

?>
