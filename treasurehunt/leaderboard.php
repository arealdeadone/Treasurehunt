<?php include'core/init.php'?>
<?php include 'includes/overall/overallhead.php';?>
<?php
	if(logged_in())
	{
		include'includes/loggedin_menu.php';
		include 'includes/generate_lb.php';
	}
	else{
			include'includes/menu.php'; 
			echo "<div class='user_entry'><h3><br><br>You Need To Login to See This Page...<br/>
					If you have not registered till now then <br /><a href='register.php' id='newreg'>click here</a></h3>
					</div>";
			include'includes/countdown.php';
	}
	
 
?>

<?php include 'includes/overall/overallfoot.php';?>