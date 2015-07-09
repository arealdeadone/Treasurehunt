<?php
$img = set_question_image($user_data['level']);
?>
<div class="user_entry">
<br /><center><h2>LEVEL <?php echo $user_data['level'] ?></h2><br />
<img src=<?php echo "'images/$img'"?> />
<br />
</center>
<form action="includes/answers.php" method="post">
	<table width="500" height="300" border="0" cellpadding="1" cellspacing="0" id="logon" align="center">	
		<tr>
			<td>ANSWER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td> <input type="text" name="answer" id="text" autocomplete="off" /><br/></td>
		</tr>
		<tr>
			<td><input type="hidden" name="img_verified" value=<?php echo "'$img'"?> /></td>
		</tr>
		<br/>
		<tr>
			<td><input type="submit" id="button" value="Submit"/></td>
		</tr>
	</table>
</form>
</div>