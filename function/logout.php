<?php
	include '../function/session.php';
	session_destroy();
	header('Location: ..');
?>