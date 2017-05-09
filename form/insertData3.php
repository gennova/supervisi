<?php
include ('../function/database.php');

$indexuser=$_GET['kode'];
$bab1=$_GET['bab1'];
$bab2=$_GET['bab2'];
$oddeven=$_GET['ganjilgenap'];
$tahunajaran=$_GET['tahun'];
$waktudatenow=$_GET['waktusekarang'];
 
/* send value satusatu*/
$no1=$_GET['no1'];
$no2a=$_GET['no2a'];
$no2b=$_GET['no2b'];
$no3=$_GET['no3'];
$no4=$_GET['no4'];



/*--------------- */

$limasuba=$_GET['limaI'];
$limasubb= $_GET['limaII'];

$enam=$_GET['enam']; /*array */

$tujuh=$_GET['tujuh'];

$delapana=$_GET['delapanI'];
$delapanb=$_GET['delapanII'];

$sembilana=$_GET['sembilanI'];
$sembilanb=$_GET['sembilanII'];


$sepuluha=$_GET['sepuluhI'];
$sepuluhb=$_GET['sepuluhII'];
$sepuluhc=$_GET['sepuluhIII'];

$sebelas=$_GET['sebelas']; /* array */


$duabelas= $_GET['duabelas'];
$tigabelas=$_GET['tigabelas']; /* array*/

$empatbelasa=$_GET['empatbelasI'];
$empatbelasb=$_GET['empatbelasII'];
$empatbelasc=$_GET['empatbelasIII'];
$empatbelasd=$_GET['empatbelasIV'];




if (empty($enam))
{
	$enamx=0;
}

foreach ($enam as $enamk => $enamv)
{
	if ($enam[0] == 1 and $enam[1] == 2 and $enam[2] == 3)
	{
		$enamx=4;
	}
	else if ($enam[0] ==1 and $enam[1] == 2)
	{
		$enamx=3;
	}
	else if ($enam[0] ==1 and $enam[1] == 3)
	{
		$enamx=2;
	}
	
	/* cek suster kd*/
	else if ($enam[0] ==2 and $enam[1] == 3)
	{
		$enamx=2;
	}	

	else if  ($enam[0] ==3 )
	{
		$enamx=1;	
	}
	
	else if  ($enam[0] ==2 )
	{
		$enamx=1;	
	}
	
	else if  ($enam[0] ==1 )
	{
		$enamx=1;	
	}
	


}


if (empty($sebelas)) 
{
	$sebelas=1;
}


foreach ($sebelas as $sebelask => $sebelasv)
{
	if ($sebelas[0] ==1 and $sebelas[1] ==2 )
	{
		$sebelas=4;
	}
	else if ($sebelas[0] == 1) 
	{
		$sebelas=3;
	}
	
	else if ($sebelas[0] == 2) 
	{
		$sebelas=2;
	}
	
	
}



if (empty($sebelas)) 
{
	$sebelas=1;
}

foreach ($tigabelas as $tigabelask => $tigabelasv)
{
	if ($tigabelas[0] ==1 and $tigabelas[1] ==2 )
	{
		$tigabelas=4;
	}
	else if ($tigabelas[0] == 1) 
	{
		$tigabelas=3;
	}
	
	else if ($tigabelas[0] == 2) 
	{
		$tigabelas=2;
	}
	
}


$hasiltujuh = $tujuh * 1.5;
$hasildelapanI = $delapana * 0.5;
$hasildelapanII = $delapanb * 0.5;


$hasilsembilanI = $sembilana * 0.5;
$hasilsembilanII = $sembilanb * 0.5;


$hasilsepuluhI= $sepuluha * 1.5;


$hasilsebelas = $sebelas * 1.5;


$hasiltigabelas= $tigabelas * 1.5;

$hasilempatbelasI=$empatbelasa* 0.25;
$hasilempatbelasII=$empatbelasb* 0.25;
$hasilempatbelasIII=$empatbelasc* 0.25;
$hasilempatbelasIV=$empatbelasd* 0.25;

$variabeltemp= $limasuba + $limasubb;
//echo "<h2>" . $variabeltemp."</h2>"; 


$count = $limasuba + $limasubb + $enamx + $hasiltujuh + $hasildelapanI + $hasildelapanII + $hasilsembilanI + $hasilsembilanII + $hasilsepuluhI + $sepuluhb + $sepuluhc + $hasilsebelas + $duabelas + $hasiltigabelas+ $hasilempatbelasI + $hasilempatbelasII + $hasilempatbelasIII + $hasilempatbelasIV ;


echo "<h2>" . $indexuser."</h2>";

if ($count)
{
header("refresh: 0; url='../kd/insertAep4.php?kode=$indexuser && no1=$no1 && no2a=$no2a && no2b=$no2b && no3=$no3 && no4=$no4 && no5a=$limasuba && no5b=$limasubb && no6=$enamx && no7=$hasiltujuh && no8a= $hasildelapanI && no8b= $hasildelapanII && no9a=$hasilsembilanI && no9b=$hasilsembilanII && no10a=$hasilsepuluhI && no10b=$sepuluhb && no10c=$sepuluhc && no11= $hasilsebelas && no12= $duabelas && no13= $hasiltigabelas && no14a=$hasilempatbelasI && no14b=$hasilempatbelasII && no14c=$hasilempatbelasIII && no14d=$hasilempatbelasIV && bab1=$bab1 && bab2=$bab2 && bab3=$count && ganjilgenap=$oddeven && tahun=$tahunajaran && waktusekarang=$waktudatenow'");


}/*
$new = insertSql3 ($indexuser,$count);

*/
else
{
echo "<script type='text/javascript'> alert('Data ada yang belum di-isi! - Mohon Dicek data nya yaaa');</script>";
	header("refresh: 0; url='../kd/insertAep3.php?kode=$kode && no1=$no1 && no2a=$no2a && no2b=$no2b && no3=$x && no4=$x2 && bab1=$value1 && bab2=$count && ganjilgenap=$oddeven && tahun=$tahunajaran && waktusekarang=$waktudatenow'");
	

}




?>
