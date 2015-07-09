<?php
function activate($email, $email_code)
{
	$email = sanitize($email);
	$email_code = sanitize($email_code);
	
	if(mysql_result(mysql_query("SELECT COUNT(`serial`) FROM `users` WHERE `email` = '$email' AND `email_code` = '$email_code' AND `active` = 0"),0) == 1)
	{
		mysql_query("UPDATE `users` SET `active` = 1 WHERE `email` = '$email'");
		return true;		
	}

	else
		return false;
}

function register_user($register_data)
{
	array_walk($register_data, 'array_sanitize');
	$register_data['password'] = md5($register_data['password']);
	
	$fields = '`'.implode('`, `', array_keys($register_data)).'`';
	$data = '\''.implode('\', \'', $register_data).'\'';
	mysql_query("INSERT INTO `users` ($fields) VALUES ($data)");
	/*$body = "
				Hello ".$register_data['name']",\n\n
				You need to activate your account before you can use it.\n\n
				Paste the url below in the address bar of your browser and press enter!!\n\n
				http://www.playitmyway.net16.net/activate.php?email=".$register_data['email']."&email_code=".$register_data['email_code']."
				-Zenith'15 Team
			";
	$subject = "Activation code for the username ".$register_data['user_name'];
	email($register_data['email'],$subject,$body);		*/
}
function user_data($serial)
{
	$data = array();
	$serial = (int)$serial;
	
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();
	
	if ($func_num_args > 1)
	{
		unset($func_get_args[0]);
	}
    $fields = '`'.implode('`, `', $func_get_args).'`';
	$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `users` WHERE `serial` = $serial"));
	return $data;
	
}
function user_exists($username)
{
	$username = sanitize($username);
	$query = mysql_query("SELECT * FROM `users` WHERE `user_name` = '$username'");
	$row = mysql_fetch_array($query, MYSQL_BOTH);
	return ($row["user_name"]== $username)?true:false;
}

function email_exists($email)
{
	$email = sanitize($email);
	$query = mysql_query("SELECT * FROM `users` WHERE `email` = '$email'");
	$row = mysql_fetch_array($query, MYSQL_BOTH);
	return ($row["email"]== $email)?true:false;
}

function user_active($username)
{
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(`serial`) FROM `users` WHERE `user_name` = '$username' AND `active` = 1"),0)==1)?true:false;
}

function logged_in()
{
	return (isset($_SESSION['serial']))?true:false;
}

function serial_from_user_name($username)
{
	$username = sanitize($username);
	$query = mysql_query("SELECT `serial` FROM `users` WHERE `user_name` = '$username'");
	return (mysql_result($query,0,'serial'));
}

function login($username, $password)
{
	$username = sanitize($username);
	$password = sanitize($password);
	$user_id =  serial_from_user_name($username);
	return (mysql_result(mysql_query("SELECT COUNT(`users`.`serial`) FROM `users` WHERE `user_name` = '$username' AND `password` = '$password'"),0)== 1)?$user_id:false;
}
?>