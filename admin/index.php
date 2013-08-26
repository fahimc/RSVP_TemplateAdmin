<?php
session_start();
if(!isset($_SESSION['username']) ){
header("Location: login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>menu</title>
		<meta name="author" content="Fahim" />
		<!-- Date: 2013-08-25 -->
		<link type="text/css" rel="stylesheet" href="resource/css/menu.css"/>
	</head>
	<body>
		<ul class="wrapper">
			<a href="guestlist.php" target="_self"><li>
				<img src="resource/image/menu/code.gif" />
				<p>Guestlist<br>Code Generator</p></li></a>
			<a href="editor.php" target="_self"><li class="last"><img src="resource/image/menu/editor.gif" />Template<br>Editor</li></a> 
		</ul>
	</body>
</html>

