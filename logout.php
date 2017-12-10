<?php 
	session_start();
	session_destroy();
	header('location:http://loaclhost/Login_process/login.php');
?>