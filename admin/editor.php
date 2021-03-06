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
		<title>index</title>
		<meta name="author" content="Fahim" />
		<!-- Date: 2013-02-21 -->
		<link type="text/css" rel="stylesheet" href="resource/css/global.css"/>
		<link type="text/css" rel="stylesheet" href="resource/css/logout.css"/>
		<script type="text/javascript" src="lib/com/fahimchowdhury/toolkit/toolkitMax-v1002-compressed.js"></script>
		<script type="text/javascript" src="src/data/model.js"></script>
		<script type="text/javascript" src="src/data/dataloader.js"></script>
		<script type="text/javascript" src="src/event/uploadData.js"></script>
		<script type="text/javascript" src="src/view/view.js"></script>
		<script type="text/javascript" src="src/view/templateView.js"></script>
		<script type="text/javascript" src="src/view/contentView.js"></script>
		<script type="text/javascript" src="src/main.js"></script>
	</head>
	<body>
		<div class="logoutHolder"><a href="lib/php/logout.php" target="_self">logout</a></div>
		<ul class="wrapper">
			<div class="header">
				<img class="logo" src="resource/image/logo_1.png" />
			</div>
			<li class="leftContent">
				<div id="left1">
					<p class="title">
						1.Choose your Template
					</p>
					<div id="thumbHolder"></div>
				</div>
				<div id="left2">
					<p class="title">
						2.Add Content
					</p>
					<div id="pageHolder"></div>
				</div>
			</li>
			<li class="rightContent">
				<div id="right1">
					<div class="greybox">
						<p class="title">
							Choose your Colour
						</p>
						<ul class="holder">
							<li id="rightThumbHolder"><img id="rightThumb" src="#" />
							</li>
							<li id="rightColors">
								<div class="color"></div>
								<div class="color"></div>
								<div class="color"></div>
								<div class="color"></div>
							</li>
							<li class="clearBoth"></li>
						</ul>
					</div>
					<div id="next1" class="button">
						Next
					</div>
				</div>
				<div id="right2">
					<div class="greybox">
						<p id="pageGreyTitle" class="title">
							Add Content
						</p>
						<ul class="holder" id="formHolder">
							<li>
								<ul class="formItem">
									<li class="floatLeft">
										<p class="title">
											Title:
										</p>
									</li>
									<li class="floatLeft">
										<input type="text" class="textInput" />
									</li>
									<li class="clearBoth"></li>
								</ul>
							</li>
							<li>
								<ul class="formItem">
									<li class="floatLeft">
										<p class="title">
											Title:
										</p>
									</li>
									<li class="floatLeft">
										<textarea class="areaInput"></textarea>
</li>									<li class="clearBoth"></li>
								</ul>
							</li>
							<li>
								<ul class="formItem">
									<li class="floatLeft">
										<p class="title">
											Title:
										</p>
									</li>
									<li class="floatLeft">
										<input type="file" name="file" id="file">
									</li>
									<li class="clearBoth"></li>
								</ul>
							</li>
							<li class="clearBoth"></li>
						</ul>
					</div>
					<ul class="nav">
						<li class="floatLeft backLi">
							<div id="back2" class="button">
								Back
							</div>
						</li>
						<li class="floatLeft nextLi">
							<div id="next2" class="button">
								Save Changes
							</div>
						</li>
						<li class="clearBoth"></li>
					</ul>
				</div>
			</li>
			<li class="clearBoth"></li>
		</ul>
		<div id="backout"></div>
		<div id="messageHolder"><p id="message"></p></div>
	</body>
</html>

