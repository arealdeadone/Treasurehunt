	<?php
	    
		include 'core/init.php';
		include 'includes/overall/overallhead.php';
		include 'includes/menu.php';
		$uname = $_REQUEST['uname'];
		$pass = $_REQUEST['pass'];
		$hid = $_REQUEST['hid'];
		$pass = md5($pass);
		if(!empty($_POST))
		{	
			if((empty($uname))||(empty($pass)))
			{
				$errors[] = 'You need to enter a user name and a password!<br />';
			}
			else if(!(user_exists($uname)))
			{
				$errors[] = 'Sorry user not found!<br />';
			}
			else if(!(user_active($uname)))
			{
				$errors[] = 'Have you activated your Account?<br />Account Not Active!';
			}
			else
			{
				
				$login = login($uname,$pass);
				if(!$login)
				{
					$errors[] = 'That username/password combination is incorrect<br />';
				}
				else
				{
					$_SESSION['serial'] = $login;
					header("Location: index.php");
					exit();
				}
			}
			
			echo "<div class='user_entry'>";
				$errors = output_errors($errors);
				echo "Could not log in because $errors";
			echo"</div>";
		}
		
		include 'includes/overall/overallfoot.php';
	?>