<?php
session_start();
if(isset($_SESSION['username']) ){
header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>login</title>
		<meta name="author" content="Fahim" />
		<!-- Date: 2013-08-25 -->
		<link type="text/css" rel="stylesheet" href="resource/css/login.css"/>
		<script type="text/javascript" src="src/login/main.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<h1>Admin Login</h1>
			<form method="post" action="lib/php/login.php" target="php" onsubmit="updateError('')">
			<ul>
				<li>Username:</li>
				<li><input type="text" id="username" name="username" /></li>
				<li>Password:</li>
				<li><input type="password" id="pass" name="pass" /></li>
				<li class="clearBoth"></li>
			</ul>
			<button type="submit">login</button>
			<div class="errorHolder"><p id="error"></p></div>
			</form>
		</div>
		<iframe id="php" name="php"></iframe>
	</body>
</html>

