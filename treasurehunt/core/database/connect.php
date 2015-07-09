<?php
$connect = mysql_connect('localhost','root','gohonzon97');
			if(!$connect)
				die('Could not connect to the database. Error: '.mysql_error());
			$db = mysql_select_db('treasurehunt');
			if(!$db)
				die('Could not connect to the database. Error: '.mysql_error());
?>