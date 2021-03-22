function zoomOutImage(imageClass){

	$(imageClass).click(function(){

		var imgSrc = $(this).prop('src');

		$("#zoomBase").css("display","block");
		$("#zoomImg").css("display","block");

		$("#zoomImg img").attr("src",imgSrc);

		var imgWidth = $("#zoomImg img").width();
		var imgHeight = $("#zoomImg img").height();

		if ( imgHeight >= $(window).height() ) {

			var scaleSize = $(window).height()/imgHeight;

			imgHeight = imgHeight*scaleSize-50;
			imgWidth = imgWidth*scaleSize;

			$("#zoomImg img").css("height", imgHeight);
		}

		if ( imgWidth >= $(window).width() ) {

			var scaleSize = $(window).width()/imgWidth;
			
			imgWidth = imgWidth*scaleSize;
			imgHeight = imgHeight*scaleSize;

			$("#zoomImg img").css("width", imgWidth);
		}

		var tipX = $(window).width()/2-imgWidth/2;
		var tipY = $(window).height()/2-imgHeight/2;
			
			$("#zoomImg").css("left",tipX);
			$("#zoomImg").css("top",tipY);
		});

}

function zoomInImage(){
	$("#zoomBase").click(function(){
		$("#zoomBase").css("display", "none");
		$("#zoomImg").css("display", "none");
	});

}