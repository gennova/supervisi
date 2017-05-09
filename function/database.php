<?php
	ini_set('max_execution_time', 0);
	$dbname = 'ypiisema_supervisi';
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';

	$dbconn = mysql_connect ($dbhost, $dbuser, $dbpass) or die ('mysql connect failed. ' . mysql_error());

	mysql_select_db($dbname) or die('cannot select database. ' . mysql_error());

	function generateRandStr($length){
      $randstr = "";
      for($i=0; $i<$length; $i++){
         $randnum = mt_rand(0,61);
         if($randnum < 10){
            $randstr .= chr($randnum+48);
         }else if($randnum < 36){
            $randstr .= chr($randnum+55);
         }else{
            $randstr .= chr($randnum+61);
         }
      }
      return $randstr;
   } 
   
	function after ($this, $inthat)
	{
	if (!is_bool(strpos($inthat, $this)))
	return substr($inthat, strpos($inthat,$this)+strlen($this));
	};

	function after_last ($this, $inthat)
	{
	if (!is_bool(strrevpos($inthat, $this)))
	return substr($inthat, strrevpos($inthat, $this)+strlen($this));
	};

	function before ($this, $inthat)
	{
	return substr($inthat, 0, strpos($inthat, $this));
	};

	function before_last ($this, $inthat)
	{
	return substr($inthat, 0, strrevpos($inthat, $this));
	};

	function between ($this, $that, $inthat)
	{
	return before ($that, after($this, $inthat));
	};

	function between_last ($this, $that, $inthat)
	{
	return after_last($this, before_last($that, $inthat));
	};

	function loginError()
	{
		echo"<h1>PLEASE USE VALID LOGIN ACCOUNT</h1>";
		header('refresh:2, ../');
		
	}	
	
	function insertAllData($index,$bab1,$bab2,$bab3,$bab4,$bab5,$bab6,$oddeven,$tahun,$waktudatenow,$a,$spv,$komet)
	{
		/* $sqltgl="insert into tblTanggalMatkul(no,ganjil,tahunpembelajaran,tanggalinsert) values ('$index','$oddeven','$tahun','$waktudatenow') "; */
		$uniksupervisor = generateRandStr(10);
		
		$sql1="insert into tblscorei (no,bobot) values ('$index', '$bab2')";
		
		$sql2="insert into tblscoreii (no,bobot) values ('$index', '$bab2')";
		
		$sql3="insert into tblscoreiii (no,bobot3) values ('$index', '$bab3')";
			
		$sql4="insert into tblscoreiv (no,bobot4) values ('$index', '$bab4')";
			
		$sql5="insert into tblscorev (no,bobot5) values ('$index', '$bab5')";
			
		$sql6="insert into tblscorevi (no,bobot6) values ('$index', '$bab6')";
		
		$insertuser= "insert into tblrincianisian (no,baba,babb,babc,babd,babe,babf,semester,tahunajaran,dateinsert,supervisor,komen,idsuprandom) values ('$index' ,'$bab1','$bab2','$bab3' ,'$bab4','$bab5','$bab6','$oddeven','$tahun','$waktudatenow','$spv','$komet','$uniksupervisor')";		
		
		mysql_query($sql1) or die(mysql_error());
		mysql_query($sql2) or die(mysql_error());
		mysql_query($sql3) or die(mysql_error());
		mysql_query($sql4) or die(mysql_error());
		mysql_query($sql5) or die(mysql_error());
		mysql_query($sql6) or die(mysql_error());		
		mysql_query($insertuser) or die(mysql_error());
		$result = mysql_query("select max(norincian) as 'data' from tblrincianisian") or die(mysql_error());			
		$idrincian=0;		
		while($row = mysql_fetch_array($result)) {
                        $idrincian = $row['data'];                        
                    }
		if (is_array($a))
		{
			foreach ($a as $row => $values)
			{
				$indexuser;
				$nomor=$row;
				$nilai=$values;
				$sql= "insert into tblinsertrincian (nourutanrincian,indexuser,nomor,nilai,idsuprandom,tahunajaran,semester) values ($idrincian,'$index','$row',$values,'$uniksupervisor','$tahun','$oddeven')";				
				$queryx=mysql_query($sql);	
				
				if ($queryx)
				{
					echo "Jalan ";
				}
				else
				{
					echo "BERHENTI";
				}
			}
			echo $sql;
		}	
		header('location:../nilai.php');	
	}
?>