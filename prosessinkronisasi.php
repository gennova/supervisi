<?php
session_start();
	if (isset($_SESSION['username'])==false) {          
        header('Location: logout.php');
}
include('koneksi.php');
$thnajaran = $_POST['tahunajaran'];
$semester = $_POST['semesternya'];
$data = $_POST['jsondata1'];
$data2 = $_POST['jsondata2'];
//echo "{\"tblinsertrincian\":" . $data2 . "}";	
$arr = json_decode($data, true);
$arrlength = count($arr);
echo '<br />';
for($i=0;$i<$arrlength;$i++){
	$array = $arr[$i];	
	//echo '<br />';
	$id = $array['indexuser'].' ';
	$rinci = $array['rinciansub'].' ';
	$bab = $array['bab'].' ';
	$nomor = $array['nomor'].' ';
	$nilai = $array['nilai'].' ';
	$rand= $array['idsuprandom'].' ';
	mysql_query("INSERT INTO tblinsertrincian (indexuser,rinciansub,bab,nomor,nilai,idsuprandom,tahunajaran,semester) VALUES('$id','$rinci','$bab','$nomor','$nilai','$rand','$thnajaran','$semester')") or die(mysql_error());
}
$arr2 = json_decode($data2, true);
$arrlength2 = count($arr2);
//echo '<br />';
for($i=0;$i<$arrlength2;$i++){
	$array = $arr2[$i];		
	$no = $array["no"];
    $baba = $array["baba"];
	$babb = $array["babb"];
	$babc = $array["babc"];
	$babd = $array["babd"];
	$babe = $array["babe"];
	$babf = $array["babf"];
    $sem =  $array["semester"]; 
    $thn = $array["tahunajaran"]; 
    $dins = $array["dateinsert"];
	$supervisor = $array["supervisor"];
	$komen = $array["komen"];
	$idrand = $array["idsuprandom"];  
	mysql_query("INSERT INTO tblrincianisian(no,baba,babb,babc,babd,babe,babf,semester,tahunajaran,dateinsert,supervisor,komen,idsuprandom) VALUES('$no','$baba','$babb','$babc','$babd','$babe','$babf','$sem','$thn','$dins','$supervisor','$komen','$idrand')") or die(mysql_error());
echo 'Terimakasih, Data sudah disinkronkan dengan database pusat YPII';
}
?>