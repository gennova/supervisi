<?php
include ('../koneksi.php');
echo "<h3><center> Data Sementara Input Evaluasi Guru </center></h3>";
$idrandom= $_GET['idg'];
$indexuser;
$oddeven;
$tahunajaran;
$waktudatenow;
$duapuluhX='20';
$bab6=$duapuluhX;
$supervisor;
$komennya;
$result = mysqli_query($con,"SELECT * from tblinsertrincian join tblrincianisian on tblinsertrincian.idsuprandom=tblrincianisian.idsuprandom where tblinsertrincian.idsuprandom='$idrandom'");
$nilai =array();
$items = array();
$i=0;
while($row = mysqli_fetch_array($result)) {
	$items[$i] = $row['nomor'];	
	$nilai[$i] = $row['nilai'];
	$indexuser = $row['indexuser'];
	$waktudatenow = $row['dateinsert'];
	$supervisor = $row['supervisor'];
	$komennya = $row['komen'];
	$oddeven = $row['semester'];
	$tahunajaran = $row['tahunajaran'];

	$i++;
}
/* send value satusatu*/

$no1=$nilai[0];
$no2a=$nilai[1];
$no2b=$nilai[2];
$value3=$nilai[3];
$value4=$nilai[4];
$limasuba=$nilai[5];
$limasubb=$nilai[6];
$enam=$nilai[7];
$tujuh=$nilai[8];
$delapana=$nilai[9];
$delapanb=$nilai[10];
$sembilana=$nilai[11];
$sembilanb=$nilai[12];
$sepuluha=$nilai[13];
$sepuluhb=$nilai[14];
$sepuluhc=$nilai[15];
$sebelas=$nilai[16];
$duabelas=$nilai[17];
$tigabelas=$nilai[18];
$empatbelasa=$nilai[19];
$empatbelasb=$nilai[20];
$empatbelasc=$nilai[21];
$empatbelasd=$nilai[22];
$limabelasI=$nilai[23];
$limabelasII=$nilai[24];
$enambelas=$nilai[25];
$tujuhbelasI=$nilai[26];
$delapanbelasI=$nilai[27];
$sembilanbelasI=$nilai[28];
$duapuluhX=$nilai[29];


$variabeltemp= $limasuba + $limasubb;
//echo "<h2>" . $variabeltemp."</h2>"; 
$bab1 = $no1 + $no2a + $no2b;
$bab2 = $value3 + $value4;
$bab3 = $limasuba + $limasubb + $enam + $tujuh + $delapana + $delapanb +$sembilana +$sembilanb + $sepuluha + $sepuluhb + $sepuluhc + $sebelas+ $duabelas + $tigabelas + $empatbelasa + $empatbelasb + $empatbelasc + $empatbelasd;
$bab4 = ($limabelasI*0.5) + ($limabelasII*0.5) + $enambelas;
$bab5 = $tujuhbelasI + $delapanbelasI + $sembilanbelasI;
$bab6 = $duapuluhX;

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
			if ($bab5 <= 9 and $bab5 >= 6)
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
 	<input type="hidden" name="no3" value="<?php echo $value3; ?>"></input>
 	<input type="hidden" name="no4" value="<?php echo $value4; ?>"></input>
 	<input type="hidden" name="no5a" value="<?php echo $limasuba; ?>"></input>
 	<input type="hidden" name="no5b" value="<?php echo $limasubb; ?>"></input>
 	<input type="hidden" name="no6" value="<?php echo $enam; ?>"></input>
 	<input type="hidden" name="no7" value="<?php echo $tujuh; ?>"></input>
 	<input type="hidden" name="no8a" value="<?php echo $$delapana; ?>"></input>
 	<input type="hidden" name="no8b" value="<?php echo $$delapanb; ?>"></input>
 	<input type="hidden" name="no9a" value="<?php echo $sembilana; ?>"></input>
 	<input type="hidden" name="no9b" value="<?php echo $sembilanb; ?>"></input>
 	<input type="hidden" name="no10a" value="<?php echo $sepuluha; ?>"></input>
 	<input type="hidden" name="no10b" value="<?php echo $sepuluhb; ?>"></input>
 	<input type="hidden" name="no10c" value="<?php echo $sepuluhc; ?>"></input>
 	<input type="hidden" name="no11" value="<?php echo $sebelas; ?>"></input>
 	<input type="hidden" name="no12" value="<?php echo $duabelas; ?>"></input>
 	<input type="hidden" name="no13" value="<?php echo $tigabelas; ?>"></input>
 	<input type="hidden" name="no14a" value="<?php echo $empatbelasa; ?>"></input>
 	<input type="hidden" name="no14b" value="<?php echo $empatbelasb; ?>"></input>
 	<input type="hidden" name="no14c" value="<?php echo $empatbelasc; ?>"></input>
 	<input type="hidden" name="no14d" value="<?php echo $empatbelasd; ?>"></input>
 	<input type="hidden" name="no15a" value="<?php echo $limabelasI; ?>"></input>
 	<input type="hidden" name="no15b" value="<?php echo $limabelasII; ?>"></input>
 	<input type="hidden" name="no16" value="<?php echo $enambelas; ?>"></input>
 	<input type="hidden" name="no17" value="<?php echo $tujuhbelasI; ?>"></input>
 	<input type="hidden" name="no18" value="<?php echo $delapanbelasI; ?>"></input>
 	<input type="hidden" name="no19" value="<?php echo $sembilanbelasI; ?>"></input>
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
	
		</tbody>
		</table>
	
	<br />
<table border=1>
<tr>
	<th bgcolor="#BCF5A9" >Detail Nilai </th>

</tr> 
<?php 

echo"<td>"."<a href='./cekdata/detailnilaiprint.php?kode=$indexuser && && no1=$no1 && no2a=$no2a && no2b=$no2b && no3=$value3 && no4=$value4 && no5a=$limasuba && no5b=$limasubb && no6=$enam && no7=$tujuh && no8a=$delapana && no8b= $delapanb && no9a=$sembilana && no9b=$sembilanb && no10a=$sepuluha && no10b=$sepuluhb && no10c=$sepuluhc && no11= $sebelas && no12= $duabelas && no13= $tigabelas && no14a=$empatbelasa && no14b=$empatbelasb && no14c=$empatbelasc && no14d=$empatbelasd && no15a=$limabelasI && no15b=$limabelasII && no16=$enambelas && no17=$tujuhbelasI && no18=$delapanbelasI && no19=$sembilanbelasI && no20=$duapuluhX && bab1=$bab1 && bab2=$bab2 && bab3=$bab3 && bab4=$bab4 && bab5=$bab5 && bab6=$bab6 && ganjilgenap=$oddeven && tahun=$tahunajaran && waktusekarang=$waktudatenow && komennya=$komennya && supervisornya=$supervisor'>Detail Penilaian</a></td>";

?>
</table>


</div>
	</form>
<?php

/* proses penyimpanan boleh dikomen
*/
//$new = insertSql6($indexuser, $duapuluhX);
?>
