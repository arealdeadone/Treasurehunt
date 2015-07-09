	<div class="register">
		<table width="600" height="400" border="0" align="left" cellpadding="2" cellspacing="2" id="play">
			<form action="includes/register_db.php" method="POST">
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
	</div>
