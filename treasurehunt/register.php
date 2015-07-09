<?php include 'core/init.php'?>
<?php include 'includes/overall/overallhead.php'?>
<?php include 'includes/menu.php'?>
	<div class="register">
<?php
		if(isset($_REQUEST['success']) && empty($_REQUEST["success"]))
		{
			echo "You've been successfully Registered!!<br />Please check your email to activate your account.";
		}
		else
		{
			if(empty($_REQUEST))
			{
				$errors[] = 'Feilds marked with * are required';
			}
			if(!empty($_REQUEST) and empty($errors))
			{
				if(user_exists($_REQUEST['uname']))
				{
					$errors[] =  'User name already taken Please try again!';
				}
				if($_REQUEST['pass'] !== $_REQUEST['conf_pass'])
				{
					$errors[] = 'The entered passwords do not match.. Please try again';
				}
				if (preg_match("/\\s/",$_REQUEST['uname'])== true)
				{
					$errors[] =  'Your user name must not contain any spaces Please try again!';
				}
				if (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL))
				{
					$errors[]= 'A valid E-mail id is required!';
				}
				if(email_exists($_REQUEST['email']))
				{
					$errors[] =  'Email is already registered Please try again!';
				}
			}
			if(!empty($_REQUEST)and empty($errors))
				{
					$register_data = array(
						'name' 			=> $_REQUEST['name'],
						'email' 		=> $_REQUEST['email'],
						'user_name' 	=> $_REQUEST['uname'],
						'password' 		=> $_REQUEST['pass'],
						'school' 		=> $_REQUEST['school'],
						'email_code'	=> md5($_REQUEST['uname']+microtime())
					);
					register_user($register_data);
					header("Location: register.php?success");
				}
				else if(!empty($errors))
				{
					echo output_errors($errors);
				}
?>
			<table width="600" height="400" border="0" align="left" cellpadding="2" cellspacing="2" id="play">
				<form action="register.php" method="POST">
				<tr>
					<td>Name*: </td>
					<td><input type="text" name="name" id="regtext"  required/></td>
				</tr>
				<tr>
					<td>Email*: </td>
					<td><input type="email" name="email" id="regtext"  required/></td>
				</tr>
				<tr>
					<td>User Name*: </td>
					<td><input type="text" name="uname" id="regtext"  required/></td>
				</tr>
				<tr>
					<td>Password*: </td>
					<td><input type="password" name="pass" id="regtext" required /></td>
				</tr>
				<tr>
					<td>Confirm Password*: </td>
					<td><input type="password" name="conf_pass" id="regtext" required /></td>
				</tr>
				<tr>
					<td>School*: </td>
					<td><input type="text" name="school" id="regtext" required/></td>
				</tr>
				<tr>
					<td> <input type="submit" name="sub" value="REGISTER" id="button" /></td>
				</tr>
				<input type="hidden" value="1" name="conf" />
				</form>
			</table>
<?php	}?>		
	</div>

<?php include 'includes/overall/overallfoot.php'?>