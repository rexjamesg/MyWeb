<?php
 include "reference.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>林於豊 Rex Lin</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Orbitron|Open+Sans' rel='stylesheet' type='text/css'>
<script src=<?php echo $mobileJs?>></script>
<link rel="stylesheet" href=<?php echo $mainCss ?>>
<script>

	$(document).ready(function() {
		
			$("#footer").css("position", "absolute");
			$("#footer").css("bottom", "0px");
		
	});
</script>
</head>
<body>
	<div id="header">
		<div id="entrances">
			<ul>		
				<li><a href="index.php">Home</a></li>
				<li ><a href="about.php">About</a></li>
				<li ><a href="works.php">Works</a></li>
				<li id="now"><a href="resources.php">Resources</a></li>
			</ul>	
		</div>
	</div>
	
	

	<div id="wrapper">
		<div class="block">
			<h3>感謝以下網站所提供的資源，讓我能完成這個網頁，如果您有興趣請點擊連結以取得更詳細的資訊，謝謝</h3>
		
			<div class="feature resource">
				
				<div>
					<h3>SP-studio</h3>
					<a target="_blank" href="http://www.sp-studio.de/"><img src="images/paperDoll/spScreenShot.png"></a>
				</div>
				
				<div>
					<h3>w3schools</h3>
					<a target="_blank" href="http://www.w3schools.com/"><img src="images/paperDoll/schoolScreenShot.png"></a>
				</div>

				<div>
					<h3>Google Fonts</h3>
					<a target="_blank" href="https://www.google.com/fonts"><img src="images/paperDoll/googleFontScreenshot.png"></a>
				</div>
			</div>
		</div>
		
		<div class="clear"></div>
	</div>

	
	<div id="footer">
		<div id="personalInfo">		
					<div><img style="background-color: #08c;" class="icon"src="images/paperDoll/phone.png"><h4>0933-534-105</h4></div>
					<div><img style="background-color: #FF2D2D;" class="icon"src="images/paperDoll/email.png"><h4>rexjamesg@gmail.com</h4></div>
					<div><img style="background-color: #3a5795;" class="icon"src="images/paperDoll/fb.png"><h4>rexjamesg@gmail.com</h4></div>	
		</div>
	</div>
</body>
</html>