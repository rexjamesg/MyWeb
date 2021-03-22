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
<style>
	  #myCanvas{
		margin-left: 5%;
		transform: rotate(-90deg);
		-ms-transform: rotate(-90deg); /* IE 9 */
       -webkit-transform: rotate(-90deg); /* Chrome, Safari, Opera */
		position: relative;
		float: left;
	  }
</style>
<script>

	//var scaleAnimate = true;

	function getRandomArray(minNum, maxNum, n) {	//隨機產生不重覆的n個數字
		var rdmArray = [n];		//儲存產生的陣列
	 
		for(var i=0; i<n; i++) {
			var rdm = 0;		//暫存的亂數
	 
			do {
				var exist = false;			//此亂數是否已存在
				rdm = getRandom(minNum, maxNum);	//取得亂數
	 
				//檢查亂數是否存在於陣列中，若存在則繼續回圈
				if(rdmArray.indexOf(rdm) != -1) exist = true;
	 
			} while (exist);	//產生沒出現過的亂數時離開迴圈
	 
			rdmArray[i] = rdm;
		}
		return rdmArray;
	}
	
	$(document).ready(function() {
		
		var counterVal = 0;
		setInterval(function(){ 
			counterVal++;
			
			if(counterVal < 9){
				$("#level h1").text("0"+counterVal);
			}else if(counterVal >=10  && counterVal <= 27){
				$("#level h1").text(counterVal);
			}
		}, 30);

		var personAry = ["善感","好奇","害羞","保守","冒險","豪放"];

		var correctAry = ["認真","開朗","合作","忍耐","負責","積極"];

		var randomAry = getRandomNum(1,12,12);

		var correctPos = 0;
		var personPos = 0;

		for (var i = 0; i < randomAry.length; i++) {

			var appendDiv; 

			var numPos = randomAry[i];

			if( numPos-1 <= 5 ){

				appendDiv = "<div class='correct'><h3>"+correctAry[correctPos]+"</h3></div>";
				correctPos++;
				
			}else{

				appendDiv = "<div><h3>"+personAry[personPos]+"</h3></div>";
				personPos++;
				
			}

			$("#personality").append(appendDiv);
		}


		$("#personality div").click(function(){
			
			if($(this).hasClass("correct")){
				$(this).css("background-color", "#FF2D2D");
			}else{
				$(this).css("background-color", "#08c");
			}
			
				$(this).css("transform", "rotateY(0deg)");
				
				$(this ).children("h3").delay(100).fadeIn();
		});
		
	});


	//取得不重複亂數
	function getRandomNum(min,max,count){

		var rdmArray = [count];        //儲存產生的陣列
	 
	    for(var i=0; i<12; i++) {
	        var rdm = 0;        //暫存的亂數
	 
	        do {
	            var exist = false;            //此亂數是否已存在
	            rdm = Math.floor((Math.random() * max) + min);   //取得亂數
	 
	            //檢查亂數是否存在於陣列中，若存在則繼續回圈
	            if(rdmArray.indexOf(rdm) != -1) exist = true;
	 
	        } while (exist);    //產生沒出現過的亂數時離開迴圈
	 
	        rdmArray[i] = rdm;
	    }

	    return rdmArray;
	}
	

</script>
</head>
<body>
	<div id="header">
		<div id="entrances">
			<ul>		
				<li><a href="index.php">Home</a></li>
				<li id="now"><a href="about.php">About</a></li>
				<li ><a href="works.php">Works</a></li>
				<li ><a href="resources.php">Resources</a></li>
			</ul>	
		</div>
	</div>
	
	

	<div id="wrapper">
		<div class="block">
					<div class="gridThree">
						<h2>語言分佈</h2>
						<div id="level"><h1>00</h1></div>
						<canvas id="myCanvas" width="220" height="220"></canvas>
					</div>
					
					<div class="gridThree">
						<h2>擅長語言</h2>
						<div class="skills">
							<div style="background-color:#FF2D2D; width: 70%;"></div><h4>Objective-c</h4>
							<div style="background-color:#08c; width: 30%;" ></div><h4>jQuery</h4>
							<div style="background-color:blue; width: 30%;"></div><h4>CSS</h4>
							<div style="background-color:#009100; width: 15%;"></div><h4>Javascript</h4>
							<div style="background-color:#6A6AFF; width: 15%;"></div><h4>PHP</h4>
						</div>
					</div>
					<div class="gridThree">
						<h2>個人資料</h2>
						<div id="detail">
								<h3>姓名: 林於豊</h3>
								<h3>年齡: 26</h3>
								<h3>學歷: 僑光科技大學</h3>
								<h3>證照: 資策會APP開發養成班400小時、TOEIC 745</h3>
						</div>
					</div>
		</div>
		
		<div class="clear"></div>

		<div class="block">
			<div class="gridThree">
				<h2>個人經歷</h2>
			</div>

			<div class="clear"></div>

			<div style="margin-left: 2.5%;">
				<h3>點睛科技  2015/12 - 2016/12 iOS APP 開發、UI製作、藍芽通訊協定串接、API串接</h3>
				<h3>亞拓電器  2014/04 - 2015/04 iOS APP 開發、UI製作、藍芽通訊協定串接、網頁設計</h3>
			</div>	

		</div>
		
		<div class="block">
			<div class="gridThree">
				<h2>人格特質</h2>
				<h3>請翻開藍色方塊<br><br><span style="color:#FF2D2D;">紅色</span>為我的人格特質</h3>
			</div>
			
			<div class="clear"></div>
			
			<div id="personality"></div>
		</div>

		<div class="clear"></div>

	</div>
	
	<div id="footer" >
		<div id="personalInfo">		
					<div><img style="background-color: #08c;" class="icon"src="images/paperDoll/phone.png"><h4>0933-534-105</h4></div>
					<div><img style="background-color: #FF2D2D;" class="icon"src="images/paperDoll/email.png"><h4>rexjamesg@gmail.com</h4></div>
					<div><img style="background-color: #3a5795;" class="icon"src="images/paperDoll/fb.png"><h4>rexjamesg@gmail.com</h4></div>	
		</div>
	</div>
</body>
<script>

	  function drawCircle ( color, startAt , endAt){
		  
		  var canvas = document.getElementById('myCanvas');
		  var context = canvas.getContext('2d');
	   	  var color;
		  var startAt;
		  var endAt;
	      var centerX = canvas.width / 2;
	      var centerY = canvas.height / 2;
	      var radius = 100;

	      context.beginPath();
	      context.arc(centerX, centerY, radius, startAt* Math.PI, endAt * Math.PI, false);
	      context.fillStyle = 'transparent';
	      context.fill();
	      context.lineWidth = 20;
	      context.strokeStyle = color;
	      context.stroke();
      
	  }
	  
	  var codeObjC = 50;
	  var codeJQ = 20;
	  var codeCSS = 20;
	  var codeScript = 5;
	  var codePHP = 5;
	  
	  var space = 0.003;
	  
	  drawCircle( "#FF2D2D", 0+space, codeObjC*0.02-space );
	  drawCircle( "#08c", codeObjC*0.02+space, (codeJQ + codeObjC)*0.02-space);
	  drawCircle( "blue",( codeJQ + codeObjC)*0.02+space, (codeJQ + codeObjC + codeCSS)*0.02-space);
	  drawCircle( "#009100", (codeJQ + codeObjC + codeCSS)*0.02+space, (codeObjC + codeJQ + codeCSS + codeScript)*0.02-space);
	  drawCircle( "#6A6AFF", (codeJQ + codeObjC + codeCSS + codeScript )*0.02+space, (codeObjC + codeJQ + codeCSS + codeScript + codePHP)*0.02-space);

    </script>
</html>