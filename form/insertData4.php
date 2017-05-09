<?php


include ('../function/database.php');
$indexuser= $_GET['indexvariable'];
$bab1=$_GET['bab1'];
$bab2=$_GET['bab2'];
$bab3=$_GET['bab3'];
$oddeven=$_GET['ganjilgenap'];




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


echo $no1;
/*--------------- */












$tahunajaran=$_GET['tahun'];
$waktudatenow=$_GET['waktusekarang'];



$limabelasI= $_GET['limabelasI'];

$limabelasII= $_GET['limabelasII'];

$enambelas= $_GET['enambelas'];

$count = $limabelasI * 0.5;

$count1 = $limabelasII * 0.5;

$sumtotal= $count+ $count1 +$enambelas;


if ($sumtotal)
{
	header("refresh: 0; url='../kd/insertAep5.php?kode=$indexuser && no1=$no1 && no2a=$no2a && no2b=$no2b && no3=$no3 && no4=$no4 && no5a=$no5a && no5b=$no5b && no6=$no6 && no7=$no7 && no8a=$no8a && no8b= $no8b && no9a=$no9a && no9b=$no9b && no10a=$no10a && no10b=$no10b && no10c=$no10c && no11= $no11 && no12=$no12 && no13= $no13 && no14a=$no14a && no14b=$no14b && no14c=$no14c && no14d=$no14d && no15a=$count && no15b=$count1 && no16=$enambelas && bab1=$bab1 && bab2=$bab2 && bab3=$bab3 && bab4=$sumtotal && ganjilgenap=$oddeven && tahun=$tahunajaran && waktusekarang=$waktudatenow'");
}



//$query= insertSql4 ($index,$sumtotal);
?>
