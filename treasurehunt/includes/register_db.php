<?php
include '../core/init.php';
$name = $_REQUEST['name'];
$uname = $_REQUEST['uname'];
$email = $_REQUEST["email"];
$password = $_REQUEST["pass"];
$conf_password = $_REQUEST["conf_pass"];
$school = $_REQUEST["school"];
$conf = $_REQUEST["conf"];
$school = sanitize($school);
if(empty($_REQUEST))
{
	$errors[] = 'Feilds marked with * are required';
}

if(user_exists($uname))
{
	$errors[] =  'User name already taken Please try again!';
}
if($password !== $conf_password)
{
	$errors[] = 'The entered passwords do not match.. Please try again';
}
if (preg_match("/\\s/",$uname)== true)
{
	$errors[] =  'Your user name must not contain any spaces Please try again!';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$errors[]= 'A valid E-mail id is required!';
}
if(email_exists($email))
{
	$errors[] =  'Email is already registered Please try again!';
}

	
	
else{	
	$password = md5($password);
	if(!empty($_REQUEST))
	{
		$t = 2147483647;

		$sql = "
				INSERT INTO`users`
				(`name`, `email`, `user_name`, `password`, `school`, `level`, `timestamp`)
				VALUES ('$name','$email','$uname','$password','$school',1,$t);
			";
		
			$result = mysql_query($sql); 
			if(!$result)
			{
				die(mysql_error());
			}
			echo "<h1>Successfully Registered</h1>";
			header("Location: ../index.php");
			exit();
	}

	
}
	$errors = '<li>'.implode('</li> <li>',$errors).'</li>';
	echo"<h1> We could not register you because of the following errors:-</h1>";
	echo"<ul>$errors</ul>";
	echo"<a href='../register.php'>Click here</a> to try again";
?>