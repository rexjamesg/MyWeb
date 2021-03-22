<?php

	include "appDetail.php";
	include "reference.php";

	$appIndex = $_GET["appIndex"];

	$detail = getDetail($appIndex);

	$imageSrc = $detail[2];

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
	<script src=<?php echo $zoomJs?>></script>

	<script type="text/javascript">
/*
    var mobiles = new Array
            (
                "midp", "j2me", "avant", "docomo", "novarra", "palmos", "palmsource",
                "240x320", "opwv", "chtml", "pda", "windows ce", "mmp/",
                "blackberry", "mib/", "symbian", "wireless", "nokia", "hand", "mobi",
                "phone", "cdm", "up.b", "audio", "sie-", "sec-", "samsung", "htc",
                "mot-", "mitsu", "sagem", "sony", "alcatel", "lg", "eric", "vx",
                "NEC", "philips", "mmm", "xx", "panasonic", "sharp", "wap", "sch",
                "rover", "pocket", "benq", "java", "pt", "pg", "vox", "amoi",
                "bird", "compal", "kg", "voda", "sany", "kdd", "dbt", "sendo",
                "sgh", "gradi", "jb", "dddi", "moto", "iphone", "android",
                "iPod", "incognito", "webmate", "dream", "cupcake", "webos",
                "s8000", "bada", "googlebot-mobile"
            )
 
    var ua = navigator.userAgent.toLowerCase();
    var isMobile = false;
    for (var i = 0; i < mobiles.length; i++) {
        if (ua.indexOf(mobiles[i]) > 0) {
            isMobile = true;
            document.location.href="http://www.google.com";
            break;
        }
    }
    */
	</script>
	<script>

	$(document).ready(function() {

		zoomOutImage(".screenShot img");
		zoomInImage();
	
	});
	
	</script>
</head>
<body>
	<div id="zoomBase"></div>
	<div id="zoomImg"><img></div>

	<div id="header">
		<div id="entrances">
			<ul>		
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li id="now"><a href="works.php">Works</a></li>
				<li><a href="resources.php">Resources</a></li>
			</ul>	
		</div>
	</div>
	
	

	<div id="wrapper">

		<div class="block">
			
			<h1><?php echo $detail[0]; ?></h1>
			<h2>介紹</h2>
			<p><?php echo $detail[1]; ?></p>

			<h2>參與項目</h2>
				<ul>
					
				</ul>

			<h2>螢幕截圖</h2>

			<div class="screenShot">
				<div><img src=<?php echo $imageSrc[0]?>></div>
				<div><img src=<?php echo $imageSrc[1]?>></div>
				<div><img src=<?php echo $imageSrc[2]?>></div>
				<div><img src=<?php echo $imageSrc[3]?>></div>
				<div><img src=<?php echo $imageSrc[4]?>></div>
			</div>
			<div class="clear"></div>					
		</div>

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