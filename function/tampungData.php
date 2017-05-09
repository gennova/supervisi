<?php

include('./database.php');
$index=$_GET['indexuser'];

$bab1=$_GET['bab1'];
$bab2=$_GET['bab2'];
$bab3=$_GET['bab3'];
$bab4=$_GET['bab4'];
$bab5=$_GET['bab5'];
$bab6=$_GET['bab6'];

$no1=$_GET['no1'];
$no2=$_GET['no2'];
$no2b=$_GET['no2b'];
$no3=$_GET['no3'];
$no4=$_GET['no4'];
$no5a=$_GET['no5a'];
$no5b=$_GET['no5b'];
$no6=$_GET['no6'];
$no7=$_GET['no7'];
$no8=$_GET['no8a'];
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
$no17=$_GET['no17'];
$no18=$_GET['no18'];
$no19=$_GET['no19'];
$no20=$_GET['no20'];
$waktudatenow=$_GET['waktudatenow'];
$supervisor=$_GET['supervisornya'];
$komennya=$_GET['komennya'];
$oddeven=$_GET['oddeven'];
$tahun=$_GET['tahun'];
echo 'seee value of data : '.$tahun;

$a=array();
$a = array( "1"=> $no1 ,"2A" => $no2, "2B" =>$no2b , 3 => $no3, 4 =>$no4, "5A" => $no5a, "5B" => $no5b,6 =>$no6,7 => $no7,"8A" => $no8,"8B" => $no8b,"9A" =>$no9a,"9B"=> $no9b,"10A" => $no10a, "10B" => $no10b,"10C" => $no10c, "11"=> $no11, "12" => $no12,"13" => $no13, "14A"=> $no14a,"14B" => $no14b,"14C"=>$no14c,"14D"=>$no14d,"15A"=>$no15a,"15B"=> $no15b,"16" => $no16, "17"=> $no17,"18"=>$no18,"19" => $no19,"20" => $no20);

echo "<pre>".print_r($a,true)."</pre>";
echo "<br />";
echo 'BAB 1 '.$bab1;
echo "<br />";
echo 'BAB 2 '.$bab2;
echo "<br />";
echo 'BAB 3 '.$bab3;
echo "<br />";
echo 'BAB 4 '.$bab4;
echo "<br />";
echo 'BAB 5 '.$bab5;
echo "<br />";
echo 'BAB 6 '.$bab6;
echo "<br />";
echo 'Index User '.$index;
echo "<br />";
echo 'Tanggal '.$waktudatenow;
$new=insertAllData($index,$bab1,$bab2,$bab3,$bab4,$bab5,$bab6,$oddeven,$tahun,$waktudatenow ,$a,$supervisor,$komennya);

?>