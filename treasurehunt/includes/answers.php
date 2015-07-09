<?php
include '../core/init.php';
$answer = $_REQUEST["answer"];
if(!empty($_REQUEST))
{
	if(check_answer($answer,$user_data['level']))
		level_update($user_data['level'],$user_data['serial']);
	header("Location: ../index.php");
}
?>