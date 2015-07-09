<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap-3.2.0-dist/css/bootstrap.min.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Treasure Hunt</title>
<style type="text/css">
body {
	background-image:url(images/background.jpg);
	background-repeat:repeat;
	/*background-position:center;*/
	background-size: cover;
	height: 100%;
	width:100%;
	min-height: 100%;
	color: #C00;
}
.header {
	font-size: 36px;
	color: #FF3;
	text-align: center;
	font-family: "Lucida Console", Monaco, monospace;
}
.header {
	text-align: center;
}
.nav {
	font-size: 36px;
	color: #FF3;
	font-family: Verdana, Geneva, sans-serif;
	text-decoration:none;
}
.main_body {
	font-family: "AR HERMANN", "AR DESTINE", "Century Gothic", "Cooper Std Black";
	font-size: 24px;
	font-style: oblique;
	line-height: normal;
	font-weight: normal;
	font-variant: normal;
	color: #000;
	text-decoration: overline blink;
	background-color: #FFF;
	word-spacing: 1.5px;
	background-attachment: fixed;
	background-repeat: no-repeat;
	text-align: center;
	position:absolute;
	width:767px;
	left: 293px;
	top: 187px;
	height: 123px;
}

#tname {
	text-decoration:underline;	
}
.main_body .intro {
	color: #F00;
}
#users {
	position:relative;
	top: 5em;
	left: 25%;
	color:#FF3;
	font-size:24px;
	border:#FF0;
	border-style:groove;
	border-width:medium;
	width: 50%;
	font-family:Tahoma, Geneva, sans-serif;
}
</style>
</head>

<body>
<h1 class="header"> FUTURZ ONLINE TREASURE HUNT</h1>
<div class="nav"><table width="1099" height="56" border="0" align="center" cellpadding="6" cellspacing="6">
  <tr>
    <th width="197" scope="col"><a href="#" class="nav">HOME</a></th>
    <th width="213" scope="col"><a href="#" class="nav">RULES</a></th>
    <th width="250" scope="col"><a href="#" class="nav">TEAM</a></th>
    <th width="351" scope="col"><a href="#" class="nav">LEADERBOARD</a></th>
  </tr>
</table>
</div>
<p>&nbsp;</p>
<div class="main_body jumbotron">
  <p class="intro">FUTURZ PRESENTS Zenith's <span id="tname">Dijkstra</span> The Online Treasure Hunt. </p>
  <p class="intro">In Association with CONFLUENCE'15.</p>
</div>
<div id="users">
<form action="#" method="post" name="user">
<label for="u_name">USER NAME: </label>
<input type="text" name="u_name" /><br/><br/>
<label for="pass">PASSWORD: </label>
<input type="password" name="pass"/><br /><br />
<input type="submit" name="submit" />
</form>
</div>
</body>
</html>