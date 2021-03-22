	//header part
	function headerFixed() {
		//var headerPos = $("#header").offset().top + $(this).height();
		//var c = $("#wrapper").offset().top + $(this).height();
		//var windowPos = $(window).scrollTop() + $(window).height();
		var windowScrollTop = $(window).scrollTop();
	
			if (windowScrollTop >= 70) {
				$("#entrances ul li").delay(800).css("width", "10%");
			}
		
			if (windowScrollTop == 0) {
				$("#entrances ul li").css("width", "22%");
			}

		function zoomInOut (object, speed){
			var object;
			var speed;
				setTimeout(function() {
					object.transition({scale:1.2});
					object.transition({scale:0.8});
					object.transition({scale:1});
					}, speed);

				scaleAnimate = false;
		}
	
/*
		var top = $("#skillLogos").offset().top;
		var scrollTop = $(window).scrollTop();
		if( top-200 < scrollTop && scaleAnimate == true){
			zoomInOut($("#skillLogos img:nth-child(1)"), 100);
			zoomInOut($("#skillLogos img:nth-child(2)"), 200);
			zoomInOut($("#skillLogos img:nth-child(3)"), 300);
			zoomInOut($("#skillLogos img:nth-child(4)"), 400);
		}
		*/
	}


	//cloud part
	/*
	var shiftLeft = 0;
	
	
	function cloudShift(){
			var cloudPos = $(".cloud").offset().top +  $(this).height();
			var windowTop = $(window).scrollTop() + $(window).height();
			$(".cloud").css("left",  "0%");
			
				if (cloudPos-200 < windowTop){
					shiftLeft +=20;
					$(".cloud").css("left",  -shiftLeft + "%");
				}else{
					shiftLeft = 0;
					$(".cloud").css("left", shiftLeft);
				}
				
	}
	*/