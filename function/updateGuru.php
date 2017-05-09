<?php
	include ('database.php');
	
	function updateGuru($no,$asli,$new,$new1)
	{
		$mysql= "UPDATE tblGuru set no='$no', nip='$new', nama='$new1' where no='$asli'";
		$querty= mysql_query($mysql);
		if ($querty)
		{
			header("refresh:0, ../update/updateGuru.php");
		}
		else
		{
			echo "data salah";
		}
	}

?>
