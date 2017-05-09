<?php
include ('../function/database.php');

$kode=$_GET['kode'];
$value1= $_GET['bab1'];
$oddeven=$_GET['ganjilgenap'];
$tahunajaran=$_GET['tahun'];
$waktudatenow=$_GET['waktusekarang'];

$no1=$_GET['no1'];
$no2a=$_GET['no2a'];
$no2b=$_GET['no2b'];


$value3=$_GET['tiga'];
$value4= $_GET['empat'];


if (empty($value4))
{
	$x2=1;
}

if (empty($value3))
{
	$x=1;
}

foreach ($value3 as $value3k => $value3v)
{
	if ($value3[0]==1 and $value3[1]==2 and $value3[2]==3)
	{
		$x=4;
	}

	
	else if ($value3[0]==1 and $value3[1] == 2)
	{
		$x=3;
	}
	else if ($value3[0]==1 and $value3[1] == 3)
	{
		$x=2;
	}
	
	/* cek suster kd*/
	else if ($value3[0]==2 and $value3[1]==3)
	{
		$x=2;
	}	


	else if ($value3[0]== 1)
	{
		$x=1;
	}
	else if ($value3[0]== 2)
	{
		$x=1;
	}
	else if ($value3[0]== 3)
	{
		$x=1;
	}

}
echo "Atas".$x ."<br />";

/*echo "<h3>" . $x ."</h3>";*/



foreach ($value4 as $value4k => $value4v)
{

	if ($value4[0] ==1 and $value4[1] ==2 and $value4[2] ==3)
	{
		$x2=4;
	}
	else if ($value4[0] ==1 and $value4[1] == 2)
	{
		$x2=3;
	}
	else if ($value4[0] ==2 and $value4[1] == 3)
	{
		$x2=2;
	}
	else if ($value4[0] ==1 and $value4[1] == 3)
	{
		$x2=2;
	}
	
	else if  ($value4[0] == 3 )
	{
		$x2=1;	
	}
	else if  ($value4[0] == 2 )
	{
		$x2=1;	
	}

	else if  ($value4[0] == 1 )
	{
		$x2=1;	
	}

	

	/* cek suster kd*/
	
}
echo "Bawah" .$x2;

$count = $x + $x2;
//echo $count;


$new = ($kode && $count);
if ($value3 && $kode && $count)
{
header("refresh: 0; url='../kd/insertAep3.php?kode=$kode && no1=$no1 && no2a=$no2a && no2b=$no2b && no3=$x && no4=$x2 && bab1=$value1 && bab2=$count && ganjilgenap=$oddeven && tahun=$tahunajaran && waktusekarang=$waktudatenow'");
}
else
{
	echo "<script type='text/javascript'> alert('Data ada yang belum di-isi! - Mohon Dicek data nya yaaa');</script>";
	header("refresh: 0; url='../kd/insertAep2.php?kode=$kode && no1=$no1 && no2a=$no2a && no2b=$no2b && no3=$x && no4=$x2 && bab1=$value1 && bab2=$count && ganjilgenap=$oddeven && tahun=$tahunajaran && waktusekarang=$waktudatenow'");
	
}


/*$new = insertSql2 ( $indexuser,$count);*/


?>
