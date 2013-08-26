<?php
session_start();
if(!isset($_SESSION['username']) ){
header("Location: login.php");
}
$filename = file_get_contents("lib/php/guestlist/filename.txt");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>menu</title>
		<meta name="author" content="Fahim" />
		<!-- Date: 2013-08-25 -->
		<link type="text/css" rel="stylesheet" href="resource/css/guestlist.css"/>
		<script type="text/javascript" src="src/guestlist/main.js"></script>
		<script type="text/javascript">
			var downloadURL='<?php echo ($filename?'lib/php/'.$filename:'') ?>';
		</script>
	</head>
	<body>
		<div class="wrapper">
			<h1>Guest List Code Generator</h1>
			<p>Upload you guest list Excel file here to get RSVP codes for your invitations</p>
			<form method="post" action="lib/php/guestlist.php" target="php" enctype="multipart/form-data" onsubmit="updateError('')">
				<input type="file" id="excel" name="excel" />
				<button type="submit">Get Codes</button>
				<a href="#" id="download" target="_blank">Download List</a>
			</form>
			<p id="error"></p>
		</div>
		<iframe name="php" id="php"></iframe>
	</body>
</html>

