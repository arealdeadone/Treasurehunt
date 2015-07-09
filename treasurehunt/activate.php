<?php include'core/init.php'?>
<?php include 'includes/overall/overallhead.php';?>
<?php
	if(logged_in())
	{
		header("Location: index.php");
	}
	else{
			include'includes/menu.php';
			if(isset($_REQUEST['success'])&& empty($_REQUEST['success']))
			{
			?>
			<div class="user_entry">
				<h2>Thanks, We've activated your account and you can now login!</h2>
				<p><a href="index.php">Click here</a> to log in.</p>
			</div>
			<?php	
			}
			else if(isset($_REQUEST['email'],$_REQUEST['email_code']))
			{
				$email 	  	= trim($_REQUEST['email']);
				$email_code = trim($_REQUEST['email_code']);
				if(!email_exists)
				{
					$errors[] = 'Oops, something went wrong and we couldn\'t find that email address!.';
				}
				else if(!activate($email,$email_code))
				{
					$errors[] = 'Activation Failed!!<br />We could not activate your account as we are facing problems.';
				}
				
				if(!empty($errors))
				{
				?>
				<div class="user_entry">
				<h2>Oops..</h2>
				<?php
					echo output_errors();
				}
				else
				{
					header("Location: activate.php?success");
					exit();
				}
				?>
				</div>
			<?php	
			}
			else
			{
				header("Location: index.php");
			}
			include'includes/countdown.php';
	}
 
 
?>
				
 
<?php include 'includes/overall/overallfoot.php';?>