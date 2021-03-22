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
		
			//$("#footer").css("position", "absolute");
			//$("#footer").css("bottom", "0px");

			$(".feature div").click(function(){
        	//alert($(this).index());

        	var javascriptVariable = $(this).index();
        	var url = "workdetail.php?appIndex=" + javascriptVariable; 

        	window.open(url, "", "", true); 
        });

	});
	
	</script>
</head>
<body>
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
			<h1>參與開發項目</h1>

			<div class="feature resource">
				

				<!-- Ideabus App-->

				<div>
					<h3>TMT</h3>
					<!--<a target="_blank" href="http://www.align.com.tw/">--><img src="images/Logo/TMTLogo.png"><!--</a>-->
				</div>

				<div>
					<h3>KubyCam</h3>
					<!--<a target="_blank" href="http://www.align.com.tw/">--><img src="images/Logo/camLogo.png"><!--</a>-->
				</div>

				<div>
					<h3>Needs</h3>
					<!--<a target="_blank" href="http://www.align.com.tw/">--><img src="images/Logo/needsLogo.png"><!--</a>-->
				</div>

				<div>
					<h3>Brook Sniper</h3>
					<!--<a target="_blank" href="http://www.align.com.tw/">--><img src="images/Logo/brookLogo.png"><!--</a>-->
				</div>

				<!-- Align App-->

				<div>
					<h3>Gpro 無平衡翼系統</h3>
					<!--<a target="_blank" href="https://itunes.apple.com/us/app/gpro-flybarless-system/id882486643?mt=8"><img src="images/paperDoll/gproSH.png"></a>-->
					<!--<a target="_blank" href="workdetail.php">--><img src="images/paperDoll/gproSH.png"><!--</a>-->
				</div>
				
				<div>
					<h3>APS-M 多軸飛控系統</h3>
					<!--<a target="_blank" href="https://itunes.apple.com/us/app/aps-m-automatic-flight-system/id933708436?mt=8">--><img src="images/paperDoll/APSMSH.png"><!--</a>-->
				</div>

				<div>
					<h3>Gimbal 雲台系統</h3>
					<!--<a target="_blank" href="https://itunes.apple.com/us/app/gimbal-system/id934323395?mt=8">--><img src="images/paperDoll/gimbalSH.png"><!--</a>-->
				</div>
				
				<!-- Website-->

				<div>
					<h3>亞拓官網</h3>
					<!--<a target="_blank" href="http://www.align.com.tw/">--><img src="images/paperDoll/alignHomeSH.png"><!--</a>-->
				</div>

				



			</div>
			
			<div class="grow"></div>
			
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