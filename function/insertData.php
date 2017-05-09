<?php
include ('../function/database.php');

$nipguru= $_POST['nipguru'];
$guru= $_POST['guru'];

$res= insertGuru ($nipguru, $guru);

if ($res) 
{
	echo "<script type='text/javascript'> alert('Data guru di update');</script>";
		header("../kd/insertGuru.php");
}

