<?php
include ('../koneksi.php');
echo "<h3><center> Data Sementara Input Evaluasi Guru </center></h3>";
$indexuser= $_GET['idguru'];
$oddeven=$_GET['semesternya'];
$tahunajaran=$_GET['ajarannya'];
$waktudatenow=$_GET['waktusekarang'];
$duapuluhX='20';
$bab6=$duapuluhX;


/* send value satusatu*/

$no1=$_GET['satu'];
$no2a=$_GET['duasub1'];
$no2b=$_GET['duasub2'];
$value3=$_GET['tiga'];
$value4=$_GET['empat'];
$limasuba=$_GET['limaI'];
$limasubb=$_GET['limaII'];
$enam=$_GET['enam'];
$tujuh=$_GET['tujuh'];
$delapana=$_GET['delapanI'];

$delapanb=$_GET['delapanII'];
$sembilana=$_GET['sembilanI'];
$sembilanb=$_GET['sembilanII'];
$sepuluha=$_GET['sepuluhI'];
$sepuluhb=$_GET['sepuluhII'];
$sepuluhc=$_GET['sepuluhIII'];
$sebelas=$_GET['sebelas'];
$duabelas=$_GET['duabelas'];
$tigabelas=$_GET['tigabelas'];

$empatbelasa=$_GET['empatbelasI'];
$empatbelasb=$_GET['empatbelasII'];
$empatbelasc=$_GET['empatbelasIII'];
$empatbelasd=$_GET['empatbelasIV'];



$limabelasI=$_GET['limabelasI'];
$limabelasII=$_GET['limabelasII'];
$enambelas=$_GET['enambelas'];
$tujuhbelasI=$_GET['tujuhbelas'];
$delapanbelasI=$_GET['delapanbelas'];
$sembilanbelasI=$_GET['sembilanbelas'];
$duapuluhX=$_GET['duapuluh'];
$supervisor=$_GET['supervisornya'];
$komennya=$_GET['txtArea'];
$semesternya = $_GET['semesternya'];
$bab5temp="";


/*--------------- */

/* 1 - 2 */
if ($no1 == "")
{
	$value1 = 0;
}
global $bobot;
foreach ($no1 as $key => $valuev)
{
	$bobot = $valuev * 1;
}
$no1=$bobot;
$last = $no1+ $no2a + $no2b;
$bab1=$last;

/*3 - 4*/

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
	if (in_array('1',$value3,true))
	{
		if (in_array('2',$value3,true))
		{		
			if (in_array('3',$value3,true))
			{		
				$x='4';
				break;
			}
		}
	}	
	if (in_array('1',$value3,true))
	{
		if (in_array('3',$value3,true))
		{		
			$x='2';
			break;
		}
	}
	if (in_array('1',$value3,true))
	{
		if (in_array('2',$value3,true))
		{		
			$x='3';
			break;
		}
	}
	if (in_array('2',$value3,true))
	{
		if (in_array('3',$value3,true))
		{		
			$x='2';
			break;
		}
	}
	if (in_array('1',$value3,true))
	{		
		$x='1';
		break;
	}
	if (in_array('2',$value3,true))
	{		
		$x='1';
		break;
	}

	if (in_array('3',$value3,true))
	{		
		$x='1';
		break;
	}
}
//echo "<pre>".print_r($value3,true)."</pre>";
//echo "Atas ".$x ."<br />";


/*echo "<h3>" . $x ."</h3>";*/
foreach ($value4 as $value4k => $value4v)
{
	if (in_array('1',$value4,true))
	{
		if (in_array('2',$value4,true))
		{		
			if (in_array('3',$value4,true))
			{		
				$x2='4';
				break;
			}
		}
	}	
	if (in_array('1',$value4,true))
	{
		if (in_array('2',$value4,true))
		{		
			$x2='3';
			break;
		}
	}
	if (in_array('2',$value4,true))
	{
		if (in_array('3',$value4,true))
		{		
			$x2='2';
			break;
		}
	}
	
	if (in_array('1',$value4,true))
	{
		if (in_array('3',$value4,true))
		{		
			$x2='2';
			break;
		}
	}

	if (in_array('3',$value4,true))
	{		
		$x2='1';
		break;
	}

	if (in_array('2',$value4,true))
	{		
		$x2='1';
		break;
	}
	if (in_array('1',$value4,true))
	{		
		$x2='1';
		break;
	}
	/* cek suster kd*/
	
}

//echo "<pre>".print_r( $value4,true)."</pre>";
//echo "Bawah" .$x2;

$count = $x + $x2;
$bab2=$count;

/*5 - 14*/


if (empty($enam))
{
	$enamx=0;
}

foreach ($enam as $enamk => $enamv)
{

	if (in_array('1',$enam,true))
	{
		if (in_array('2',$enam,true))
		{		
			if (in_array('3',$enam,true))
			{		
				$enamx='4';
				break;
			}
		}
	}	

	
	if (in_array('1',$enam,true))
	{
		if (in_array('2',$enam,true))
		{		
			$enamx='3';
			break;
		}
	}

	
	if (in_array('1',$enam,true))
	{
		if (in_array('3',$enam,true))
		{		
			$enamx='2';
			break;
		}
	}

	
	if (in_array('2',$enam,true))
	{
		if (in_array('3',$enam,true))
		{		
			$enamx='2';
			break;
		}
	}
	if (in_array('1',$enam,true))
	{		
		$enamx='1';
		break;
	}


	if (in_array('2',$enam,true))
	{		
		$enamx='1';
		break;
	}

	if (in_array('3',$enam,true))
	{		
		$enamx='1';
		break;
	}

}
/*
echo "<pre>". print_r($enam,true)."</pre>";
echo $enamx;
*/

if (empty($sebelas))
{
	$sebelas='1';
}

foreach ($sebelas as $sebelask => $sebelasv)
{
	if (in_array('1',$sebelas,true))
	{
		if (in_array('2',$sebelas,true))
		{		
			$sebelas='4';
			break;
		}
	}

	if (in_array('1',$sebelas,true))
	{		
		$sebelas='3';
		break;
	}

	
	if (in_array('2',$sebelas,true))
	{		
		$sebelas='2';
		break;
	}	
	
}

//echo "<pre>".print_r($sebelas,true)."</pre>";
//echo $delapana;

foreach ($tigabelas as $tigabelask => $tigabelasv)
{
	if (in_array('1',$tigabelas,true))
	{
		if (in_array('2',$tigabelas,true))
		{		
			$tigabelas='4';
			break;
		}
	}
	if (in_array('1',$tigabelas,true))
	{		
		$tigabelas='3';
		break;
	}
	if (in_array('2',$tigabelas,true))
	{		
		$tigabelas='2';
		break;
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


$count = $limasuba + $limasubb + $enamx + $hasiltujuh + $hasildelapanI + $hasildelapanII + $hasilsembilanI + $hasilsembilanII + $hasilsepuluhI + $sepuluhb + $sepuluhc + $hasilsebelas + $duabelas + $hasiltigabelas + $hasilempatbelasI + $hasilempatbelasII + $hasilempatbelasIII + $hasilempatbelasIV ;
$bab3=$count;

/* 15 - 16 */


$limabelasI= $_GET['limabelasI'];

$limabelasII= $_GET['limabelasII'];

$enambelas= $_GET['enambelas'];

$count = $limabelasI * 0.5;

$count1 = $limabelasII * 0.5;

$sumtotal= $count+ $count1 +$enambelas;


$bab4=$sumtotal;

/* 17 - 19 */
$tujuhbelasI =$_GET['tujuhbelas'];

$delapanbelasI =$_GET['delapanbelas'];

$sembilanbelasI =$_GET['sembilanbelas'];

$tujuhbelasnew;
$ukuran17array = sizeof($tujuhbelasI);

if($ukuran17array==0){
	$tujuhbelasnew= 1;
}else if($ukuran17array==1){
	$tujuhbelasnew= 2;
}else if($ukuran17array==2){
	$tujuhbelasnew= 3;
}else if($ukuran17array==3){
	$tujuhbelasnew= 4;
}
//echo 'Nilai 17 adalah : '.$tujuhbelasnew;
/*
echo 'Ukuran Array : '.sizeof($tujuhbelasI);
echo '<br />';
echo 'lihat nilai 17 : '.$tujuhbelasI;
echo '<br />';
foreach ($tujuhbelasI as $key => $valuev)
{
	echo 'lihat nilai array: '.$valuev;
	echo '<br />';
	$tujuhbelasnew = $valuev * 1;
	echo '<br />';
}
*/


foreach ($delapanbelasI as $key => $valuev)
{
	$delapanbelasnew = $valuev * 0.5;
}


if (empty($sembilanbelasI))
{
	$sembilanbelasnew=1;
}

foreach ($sembilanbelasI as $key => $valuev)
{
	
	if (in_array('1',$sembilanbelasI,true))
	{
		if (in_array('2',$sembilanbelasI,true))
		{		
			$sembilanbelasnew='4';
			break;
		}
	}

	if (in_array('2',$sembilanbelasI,true))
	{		
		$sembilanbelasnew='2';
		break;
	}

	
	if (in_array('1',$sembilanbelasI,true))
	{		
		$sembilanbelasnew='3';
		break;
	}

}
//echo "<h2>test".$sembilanbelasnew."</h2>";
$sumtotal5 = $tujuhbelasnew + $delapanbelasnew + $sembilanbelasnew;
$bab5=$sumtotal5;
$bab6=$duapuluhX;

?>
    <form method ="GET" action ="../function/tampungData.php">
   
            <div class="table-responsive" >
                <table class="table table-hover" border="3"  bgcolor="#99999">
                    <thead>
                        <tr>                            
				<th bgcolor="#BCF5A9">Nomor</th>
				<th bgcolor="#BCF5A9">Nama Guru</th>
				<th bgcolor="#BCF5A9" colspan=2 >Persiapan Pembelajaran <br /> BAB A </th>
				<th bgcolor="#BCF5A9"colspan=2>Kegiatan Pembuka <br /> BAB B</th>
				<th bgcolor="#BCF5A9"colspan=2>Kegiatan Inti <br /> BAB C</th>
				<th bgcolor="#BCF5A9"colspan=2>Kegiatan Penutup <br /> BAB D</th>				
				<th bgcolor="#BCF5A9" colspan=2>Performa Guru <br /> BAB E</th>				
				<th bgcolor="#BCF5A9" colspan=2>Lain - Lain <br /> BAB F</th>
				<th bgcolor="#BCF5A9" >Total Nilai</th>				
				<th bgcolor="#BCF5A9" >Semester</th>
				<th bgcolor="#BCF5A9" >Tahun Ajaran</th>
				<th bgcolor="#BCF5A9">Tanggal Insert Data</th>				
                        </tr>
                    </thead>
                    <tbody>
			<tr>
			<?php
			if ($bab1 <= 12 and $bab1 >= 7)
			{
				$bab1temp="Baik ";
			}
			else if ($bab1 >= 4 && $bab1 < 7)
			{
				$bab1temp="Sedang";
			}
			else if ($bab1 < 4)
			{
				$bab1temp="Kurang";
			}			

			if ($bab2 <= 8 and $bab2 >= 6)
			{
				$bab2temp="Baik ";
			}
			else if ($bab2 >= 2 && $bab2 < 6)
			{
				$bab2temp="Sedang";
			}
			else if ($bab2 < 2)
			{
				$bab2temp="Kurang";
			}		

			if ($bab3 <= 60 && $bab3 >= 40)
			{
				$bab3temp="Baik ";
			}
			else if ($bab3 >= 20 && $bab3 < 40)
			{
				$bab3temp="Sedang";
			}
			else if ($bab3 < 20)
			{
				$bab3temp="Kurang";
			}
			if ($bab4 <= 8 && $bab4 >= 5)
			{
				$bab4temp="Baik ";
			}
			else if ($bab4 >= 2 && $bab4 < 5)
			{
				$bab4temp="Sedang";
			}
			else if ($bab4 < 2)
			{
				$bab4temp="Kurang";
			}			
			if ($bab5 <= 10 and $bab5 >= 6)
			{
				$bab5temp="Baik ";
			}
			else if ($bab5 >= 2 && $bab5 < 6)
			{
				$bab5temp="Sedang";
			}
			else if ($bab5 < 2)
			{
				$bab5temp="Kurang";
			}				
			
			if ($bab6 <= 4 and $bab6 >= 3)
			{
				$bab6temp="Baik ";
			}
			else if ($bab6 >= 6 && $bab6 < 3)
			{
				$bab6temp="Sedang";
			}
			else if ($bab6 <=4)
			{
				$bab6temp="Kurang";
			}		
			
			
			if ($bab6 <= 4 and $bab6 >= 3)
			{
				$bab6temp="Baik ";
			}
			else if ($bab6 > 2 && $bab6 <= 3)
			{
				$bab6temp="Sedang";
			}
			else if ($bab6 < 2)
			{
				$bab6temp="Kurang";
			}

$fetchguru= mysqli_query($con,"SELECT * FROM guru JOIN unit ON guru.unit=unit.idunit where guru.id=$indexuser");
if ($fetchguru);
{
		while ($row = mysqli_fetch_array($fetchguru)) 
		{
			
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['namaguru']."</td>";
		}
}		//echo "<h3>laal".$row['nama']."</h3>";

			echo "<td>".$bab1."</td>";
			echo "<td>".$bab1temp."</td>";

			echo "<td>".$bab2."</td>";
			echo "<td>".$bab2temp."</td>";

			echo "<td>".$bab3."</td>";
			echo "<td>".$bab3temp."</td>";

			echo "<td>".$bab4."</td>";
			echo "<td>".$bab4temp."</td>";

			echo "<td>".$bab5."</td>";
			echo "<td>".$bab5temp."</td>";

			echo "<td>".$bab6."</td>";
			echo "<td>".$bab6temp."</td>";

			echo "<td>".($bab1+$bab2+$bab3+$bab4+$bab5+$bab6)." </td>";
			
			echo "<td>".$oddeven."</td>";
			echo "<td>".$tahunajaran."</td>";
			echo "<td>".$waktudatenow."</td>";
			//echo $enamx;
			//	echo "<td>".$."</td>";
			?>
			
	
 	<input type="hidden" name="no1" value="<?php echo $no1; ?>"></input>
 	<input type="hidden" name="no2" value="<?php echo $no2a; ?>"></input>
 	<input type="hidden" name="no2b" value="<?php echo $no2b; ?>"></input>
 	<input type="hidden" name="no3" value="<?php echo $x; ?>"></input>
 	<input type="hidden" name="no4" value="<?php echo $x2; ?>"></input>
 	<input type="hidden" name="no5a" value="<?php echo $limasuba; ?>"></input>
 	<input type="hidden" name="no5b" value="<?php echo $limasubb; ?>"></input>
 	<input type="hidden" name="no6" value="<?php echo $enamx; ?>"></input>
 	<input type="hidden" name="no7" value="<?php echo $hasiltujuh; ?>"></input>
 	<input type="hidden" name="no8a" value="<?php echo $hasildelapanI; ?>"></input>
 	<input type="hidden" name="no8b" value="<?php echo $hasildelapanII; ?>"></input>
 	<input type="hidden" name="no9a" value="<?php echo $hasilsembilanI; ?>"></input>
 	<input type="hidden" name="no9b" value="<?php echo $hasilsembilanII; ?>"></input>
 	<input type="hidden" name="no10a" value="<?php echo $hasilsepuluhI; ?>"></input>
 	<input type="hidden" name="no10b" value="<?php echo $sepuluhb; ?>"></input>
 	<input type="hidden" name="no10c" value="<?php echo $sepuluhc; ?>"></input>
 	<input type="hidden" name="no11" value="<?php echo $hasilsebelas; ?>"></input>
 	<input type="hidden" name="no12" value="<?php echo $duabelas; ?>"></input>
 	<input type="hidden" name="no13" value="<?php echo $hasiltigabelas; ?>"></input>
 	<input type="hidden" name="no14a" value="<?php echo $hasilempatbelasI; ?>"></input>
 	<input type="hidden" name="no14b" value="<?php echo $hasilempatbelasII; ?>"></input>
 	<input type="hidden" name="no14c" value="<?php echo $hasilempatbelasIII; ?>"></input>
 	<input type="hidden" name="no14d" value="<?php echo $hasilempatbelasIV; ?>"></input>
 	<input type="hidden" name="no15a" value="<?php echo $limabelasI; ?>"></input>
 	<input type="hidden" name="no15b" value="<?php echo $limabelasII; ?>"></input>
 	<input type="hidden" name="no16" value="<?php echo $enambelas; ?>"></input>
 	<input type="hidden" name="no17" value="<?php echo $tujuhbelasnew; ?>"></input>
 	<input type="hidden" name="no18" value="<?php echo $delapanbelasnew; ?>"></input>
 	<input type="hidden" name="no19" value="<?php echo $sembilanbelasnew; ?>"></input>
 	<input type="hidden" name="no20" value="<?php echo $duapuluhX; ?>"></input>

	
 	<input type="hidden" name="indexuser" value="<?php echo $indexuser; ?>"></input>
	 <input type="hidden" name="bab1" value="<?php echo $bab1; ?>"></input>
	 <input type="hidden" name="bab2" value="<?php echo $bab2; ?>"></input>
	 <input type="hidden" name="bab3" value="<?php echo $bab3; ?>"></input>
	 <input type="hidden" name="bab4" value="<?php echo $bab4; ?>"></input>
	 <input type="hidden" name="bab5" value="<?php echo $bab5; ?>"></input>
	 <input type="hidden" name="bab6" value="<?php echo $bab6; ?>"></input>
	 <input type="hidden" name="oddeven" value="<?php echo $oddeven; ?>"></input>
	 <input type="hidden" name="tahun" value="<?php echo $tahunajaran; ?>"></input>
	 <input type="hidden" name="waktudatenow" value="<?php echo $waktudatenow; ?>"></input>
	 <input type="hidden" name="supervisornya" value="<?php echo $supervisor; ?>"></input>
	 <input type="hidden" name="komennya" value="<?php echo $komennya; ?>"></input>
	 <input type="hidden" name="semesternya" value="<?php echo $semesternya; ?>"></input>
	
		</tbody>
		</table>
	
	<br />
<table border=1>
<tr>
	<th bgcolor="#BCF5A9" >Detail Nilai <?php echo $oddeven; ?></th>
	<th bgcolor="#BCF5A9" >Insert Nilai Ke Database </th>
	<th bgcolor="#BCF5A9" >Revisi Nilai</th>

</tr> 
<?php 

echo"<td>"."<a href='./cekdata/cek.php?kode=$indexuser && && no1=$no1 && no2a=$no2a && no2b=$no2b && no3=$x && no4=$x2 && no5a=$limasuba && no5b=$limasubb && no6=$enamx && no7=$hasiltujuh && no8a=$hasildelapanI && no8b= $hasildelapanII && no9a=$hasilsembilanI && no9b=$hasilsembilanII && no10a=$hasilsepuluhI && no10b=$sepuluhb && no10c=$sepuluhc && no11= $hasilsebelas && no12= $duabelas && no13= $hasiltigabelas && no14a=$hasilempatbelasI && no14b=$hasilempatbelasII && no14c=$hasilempatbelasIII && no14d=$hasilempatbelasIV && no15a=$limabelasI && no15b=$limabelasII && no16=$enambelas && no17=$tujuhbelasnew && no18=$delapanbelasnew && no19=$sembilanbelasnew && no20=$duapuluhX && bab1=$bab1 && bab2=$bab2 && bab3=$bab3 && bab4=$bab4 && bab5=$bab5 && bab6=$bab6 && ganjilgenap=$oddeven && tahun=$tahunajaran && waktusekarang=$waktudatenow && komennya=$komennya && supervisornya=$supervisor'>Detail Penilaian</a></td>";

?>

<td><button type="submit" onclick="return confirm('Apakah Data Ini Benar??')"><center>Simpan Data Evaluasi Guru</center> </button>

<?php
	 echo"<td>"."<a href='javascript:history.go(-1)'>Revisi Penilaian Guru</a></td>";?>
</table>


</div>
	</form>
<?php

/* proses penyimpanan boleh dikomen
*/
//$new = insertSql6($indexuser, $duapuluhX);
?>
