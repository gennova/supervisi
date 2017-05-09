<?php
	include './database.php';
	echo $_GET['k'];
	echo array_sum($_POST['01']);
	echo $_POST['02a'];
	echo $_POST['02b'];
	echo array_sum($_POST['03'])+1;
	echo array_sum($_POST['04'])+1;
$a=array_sum($_POST['01'])+$_POST['02a']+$_POST['02b']+array_sum($_POST['03'])+1+array_sum($_POST['04'])+1;
	$res = isiaep($_GET['s'],$_GET['k'],$a);
	if($res) header('Location: ..');
?>