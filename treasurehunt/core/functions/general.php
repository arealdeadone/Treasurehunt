<?php
function email($to, $subject, $body)
{
	mail($to, $subject, $body, 'From: admin@playitmyway.net16.net');
}
function array_sanitize(&$item)
{
	$item = mysql_real_escape_string($item);
}
function sanitize($data)
{
	return mysql_real_escape_string($data);
}

function output_errors($errors)
{
	return '<ul><li>'.implode('</li> <li>', $errors).'</li></ul>';
}

function level_update($level,$id)
{
	$t = time();
	$level++;
	$query = "UPDATE `users` SET `level` = $level WHERE `serial` = $id";
				mysql_query($query);
				$query = "UPDATE `users` SET `timestamp` = $t WHERE `serial` = $id";
				mysql_query($query);
				
}

function check_answer($answer, $level)
{
	$process = array();
	$file = fopen("../files/answers.txt","r") or die("We are facing problems on the server please try again later");
	$process[] = $level;
	$process[] = $answer;
	$check = implode(' ', $process);
	while(!feof($file))
	{
		if(!strcmp($check,trim(fgets($file))))
		{
			return true;
		}
	}
	return false;
}
function set_question_image($level)
{
	$image = array($level, '.jpg');
	$image = implode('',$image);
	return $image;
}
?>