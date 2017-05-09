<?php
	include '../function/session.php';
	include '../function/database.php';

	$user=$_POST['user'];
	$pass=$_POST['pass'];
	
	if ($user==null || $pass==null)
	{
		loginError();
	}
	else
	{
		if ($res=loginchecker($user, $pass))
		{
			$_SESSION['u23r']=before('^',$res);
			$_SESSION['t1p3']=after('^',$res);

			header('Location: ../kd/index.php');
		}
		else loginError();
	}
?>
