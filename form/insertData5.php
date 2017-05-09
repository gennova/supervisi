<?php
include ('../function/database.php');
$indexuser= $_GET['indexuser'];
$bab1=$_GET['bab1'];
$bab2=$_GET['bab2'];
$bab3=$_GET['bab3'];

$bab4=$_GET['bab4'];
$oddeven=$_GET['ganjilgenap'];

$tahunajaran=$_GET['tahun'];
$waktudatenow=$_GET['waktusekarang'];


/* send value satusatu*/

$no1=$_GET['no1'];
$no2a=$_GET['no2a'];
$no2b=$_GET['no2b'];
$no3=$_GET['no3'];
$no4=$_GET['no4'];
$no5a=$_GET['no5a'];
$no5b=$_GET['no5b'];
$no6=$_GET['no6'];
$no7=$_GET['no7'];
$no8a=$_GET['no8a'];
$no8b=$_GET['no8b'];
$no9a=$_GET['no9a'];
$no9b=$_GET['no9b'];
$no10a=$_GET['no10a'];
$no10b=$_GET['no10b'];
$no10c=$_GET['no10c'];
$no11=$_GET['no11'];
$no12=$_GET['no12'];
$no13=$_GET['no13'];
$no14a=$_GET['no14a'];
$no14b=$_GET['no14b'];
$no14c=$_GET['no14c'];
$no14d=$_GET['no14d'];

$no15a=$_GET['no15a'];
$no15b=$_GET['no15b'];
$no16=$_GET['no16'];
echo $no15a;
/*--------------- */


$tujuhbelasI =$_GET['tujuhbelas'];

$delapanbelasI =$_GET['delapanbelas'];

$sembilanbelasI =$_GET['delapanbelas'];


foreach ($tujuhbelasI as $key => $valuev)
{
	$bobot1 = $valuev * 0.5;
}


foreach ($delapanbelasI as $key => $valuev)
{
	$bobot2 = $valuev * 0.5;
}


if (empty($sembilanbelasI))
{
	$bobot3=1;
}

foreach ($sembilanbelasI as $key => $valuev)
{
	$bobot3 = $valuev * 1;
	if ($sembilanbelasI[0] == 1 and $sembilanbelasI[1] ==2 )
	{
		$bobot3=4;
	}
	else if ($sembilanbelasI[0] == 1) 
	{
		$bobot3=3;
	}
	
	else if ($sembilanbelasI[0] == 2) 
	{
		$bobot3=2;
	}


}
$sumtotal5 = $bobot1 + $bobot2 + $bobot3;

echo $no12;
if ($sumtotal5)
{

header("refresh: 0; url='../kd/insertAep6.php?kode=$indexuser && && no1=$no1 && no2a=$no2a && no2b=$no2b && no3=$no3 && no4=$no4 && no5a=$no5a && no5b=$no5b && no6=$no6 && no7=$no7 && no8a=$no8a && no8b= $no8b && no9a=$no9a && no9b=$no9b && no10a=$no10a && no10b=$no10b && no10c=$no10c && no11= $no11 && no12= $no12 && no13= $no13 && no14a=$no14a && no14b=$no14b && no14c=$no14c && no14d=$no14d && no15a=$no15a && no15b=$no15b && no16=$no16 && no17=$bobot1 && no18=$bobot2 && no19=$bobot3 && bab1=$bab1 && bab2=$bab2 && bab3=$bab3 && bab4=$bab4 && bab5=$sumtotal5 && ganjilgenap=$oddeven && tahun=$tahunajaran && waktusekarang=$waktudatenow'");


}
/*
$sql= insertSql5($indexuser,$sumtotal);
*/
?>




