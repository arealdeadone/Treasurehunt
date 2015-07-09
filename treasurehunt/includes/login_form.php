<div class="user_entry">
	<form action="validate.php" method="POST">
		<table width="500" height="300" border="0" cellpadding="1" cellspacing="0" id="logon">
			<tr>
			<td>User Name: </td>
			<td><input type="text" name="uname" id="text" autocomplete="off" required/></td>
			</tr>
			<tr>
			<td>Password: </td>
			<td><input type="password" name="pass" id="text" required/></td>
			</tr>
			
			<tr>
				<td> <input type="submit" name="sub" value="LogIn" id="button" /></td>
			</tr>
			<tr>
				<td id="newreg"><a href="register.php" id="newreg">New User? Click here to Participate!</a></td>
			</tr>
			<input type="hidden" value="1" name="hid" />
		</table>
		</form>
</div>