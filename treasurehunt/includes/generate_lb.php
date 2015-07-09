<?php
$result = mysql_query("SELECT `name`,`school`,`level` FROM `users`");

$count = mysql_result(mysql_query("SELECT MAX(`level`) FROM `users`"),	0);

$sno = mysql_result(mysql_query("SELECT COUNT(`serial`) FROM `users` WHERE 1"),	0);

$sorted = array();
$levels = array();
for($i=0; $i<=$count; $i++)
{
	$levels[$i] = mysql_result(mysql_query("SELECT COUNT(`serial`) FROM `users` WHERE `level` = $i"),	0);
}

for($i=0; $i<=$count; $i++)
{
	$result = mysql_query("SELECT `name`,`school`,`level` FROM `users` WHERE `level` = $i ORDER BY `timestamp` ASC");
	$j=0;
	while($j<$levels[$i])
	{
		$sorted[$i][$j] = mysql_fetch_assoc($result);
		$j++;
	}		
}
$k = $sno;
for($i=0; $i<=$count; $i++)
{
	for($j=0; $j<$levels[$i];$j++)
	{
			$sorted[$i][$j] = "<td>$k</td><td>".implode("</td> <td>", $sorted[$i][$j]).'</td>';
			$k--;
	}		
	@$sorted[$i] = '<tr>'.implode('</tr> <tr>', $sorted[$i]).'</tr>';
}

echo '<br /><center><table id="output" width="600" height="400" border="0" align="left" cellpadding="2" cellspacing="2">';
echo '<tr><th>S No.</th><th>NAME</th><th>SCHOOL</th><th>LEVEL</th></tr>';
for($i=$count,$k=1; $i>=0; $i--,$k++)
{
	if(strlen($sorted[$i])== 9)
		continue;
	echo $sorted[$i];
}
echo'</table></center>';
