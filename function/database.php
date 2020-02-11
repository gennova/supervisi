<?php
include ('../koneksi.php');
	ini_set('max_execution_time', 0);	
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
   
	

	function loginError()
	{
		echo"<h1>PLEASE USE VALID LOGIN ACCOUNT</h1>";
		header('refresh:2, ../');
		
	}	
	
	function insertAllData($index,$bab1,$bab2,$bab3,$bab4,$bab5,$bab6,$oddeven,$tahun,$waktudatenow,$a,$spv,$komet)
	{
		include ('../koneksi.php');
		/* $sqltgl="insert into tblTanggalMatkul(no,ganjil,tahunpembelajaran,tanggalinsert) values ('$index','$oddeven','$tahun','$waktudatenow') "; */
		$uniksupervisor = generateRandStr(10);
		
		$sql1="insert into tblscorei (no,bobot) values ('$index', '$bab2')";
		
		$sql2="insert into tblscoreii (no,bobot) values ('$index', '$bab2')";
		
		$sql3="insert into tblscoreiii (no,bobot3) values ('$index', '$bab3')";
			
		$sql4="insert into tblscoreiv (no,bobot4) values ('$index', '$bab4')";
			
		$sql5="insert into tblscorev (no,bobot5) values ('$index', '$bab5')";
			
		$sql6="insert into tblscorevi (no,bobot6) values ('$index', '$bab6')";
		
		$insertuser= "insert into tblrincianisian (no,baba,babb,babc,babd,babe,babf,semester,tahunajaran,dateinsert,supervisor,komen,idsuprandom) values ('$index' ,'$bab1','$bab2','$bab3' ,'$bab4','$bab5','$bab6','$oddeven','$tahun','$waktudatenow','$spv','$komet','$uniksupervisor')";
		mysqli_query($con,$sql1) or die(mysql_error());
		mysqli_query($con,$sql2) or die(mysql_error());
		mysqli_query($con,$sql3) or die(mysql_error());
		mysqli_query($con,$sql4) or die(mysql_error());
		mysqli_query($con,$sql5) or die(mysql_error());
		mysqli_query($con,$sql6) or die(mysql_error());		
		mysqli_query($con,$insertuser) or die(mysql_error());
		$result = mysqli_query($con, "select max(norincian) as 'data' from tblrincianisian") or die(mysql_error());			
		$idrincian=0;		
		while($row = mysqli_fetch_array($result)) {
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
				$queryx=mysqli_query($con,$sql);	
				
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