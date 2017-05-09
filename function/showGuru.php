<?php
	ini_set('max_execution_time', 0);
	$dbname = 'aepkd';
	$dbhost = '127.0.0.1';
	$dbuser = 'root';
	$dbpass = '';
	$dbconn = mysql_connect ($dbhost, $dbuser, $dbpass) or die ('mysql connect failed. ' . mysql_error());
	mysql_select_db($dbname) or die('cannot select database. ' . mysql_error());


	function showGuru()
	{
		$sql= "select distinct no,nip,nama from tblGuru";
		$query=mysql_query($sql);
		return $query;

	}

	function tampilDetailNilai ($kode)
	{
		$sql="select distinct indexuser,nomor,nilai from tblinsertrincian where indexuser=$kode";
		$query=mysql_query($sql);
		return $query;
	}

	function tampilRincian($kode)
	{
		$sql="SELECT * FROM `tblinsertrincian` WHERE indexuser='$kode'";
		$query=mysql_query($sql);
		return $query;	
	}



	function showAEP()
	{
		$sql="SELECT tblguru.nip,tblguru.no,tblguru.nama,tblrincianisian.norincian,tblrincianisian.baba as 'bobot1',tblrincianisian.babb as 'bobot2',tblrincianisian.babc as 'bobot3',tblrincianisian.babd as 'bobot4',tblrincianisian.babe as 'bobot5',tblrincianisian.babf as 'bobot6' , (tblrincianisian.baba+tblrincianisian.babb+tblrincianisian.babc+tblrincianisian.babd+tblrincianisian.babe+tblrincianisian.babf) as 'sum', tblrincianisian.semester,tblrincianisian.tahunajaran,tblrincianisian.dateinsert as 'tanggalinsert' from tblguru,tblrincianisian where tblguru.no=tblrincianisian.no
 order by tblrincianisian.norincian asc
		";
		$query=mysql_query($sql);
		return $query;	
	}



	function showGuruUpdate($new)
	{
		$sql= "select no,nip,nama from tblGuru where no=$new";
		$new= mysql_query($sql);
		
		return $new;

	}

        
    
?>

