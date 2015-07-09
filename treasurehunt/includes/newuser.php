<?php
@$name = $_REQUEST['name'];
@$uname = $_REQUEST['uname'];
@$email = $_REQUEST["email"];
@$password = $_REQUEST["pass"];
@$school = $_REQUEST["school"];
@$conf = $_REQUEST["conf"];

if($conf)
{
	$connect = mysql_connect('localhost','root','gohonzon97');
	if(!$connect)
	{
		die(mysql_error());
	}
	$sql = "
			INSERT INTO`users`
			(`name`, `email`, `user_name`, `password`, `school`, `level`)
			VALUES ('$name','$email','$uname','$password','$school',1)
		   ";
	$db = mysql_select_db("treasurehunt",$connect);
	if(!$db)
	{
		die(mysql_error());
	}
	
		$result = mysql_query($sql); 
		if(!$result)
		{
			die(mysql_error());
		}
		echo "<h1>Successfully Registered</h1>";
		for($i=0; $i<5000000; $i++);
		header("Location: index.php");
}

?>