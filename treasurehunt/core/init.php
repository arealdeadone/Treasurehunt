<?php
session_start();
//error_reporting(0);
require('database/connect.php');
require('functions/general.php');
require('functions/users.php');
if (logged_in())
{
	$session_serial = $_SESSION['serial'];
	$user_data = user_data($session_serial, 'serial', 'name', 'email', 'user_name', 'password', 'school','level');
	if(!user_active($user_data['user_name']))
	{
		session_destroy();
		header("Location: index.php");
	}
}


$errors = array();
?>