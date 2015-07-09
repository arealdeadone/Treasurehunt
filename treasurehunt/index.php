<?php include'core/init.php'?>

<?php include 'includes/overall/overallhead.php'?>

<?php
	if(logged_in())
	{
		include'includes/loggedin_menu.php';
		include'includes/questions.php';
	}
	else{
			include'includes/menu.php'; 
			include'includes/login_form.php';	
	}
	
 
?> 
<?php include'includes/countdown.php';?>
<script>
alert('Kindly use Google  Chrome/ Firefox to\n view this site. It cannot be viewed using IE ');
</script>
<?php include'includes/overall/overallfoot.php';?>