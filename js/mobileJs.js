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
			sMobile = true;
			$(document).ready(function() {
			
			$("#hireMe").css("margin-top", "5%");
			$("#footer").css("position","absolute");
			$("#footer").css("bottom","0px");
			
			window.addEventListener("orientationchange", function() {
			// Announce the new orientation number
		
			if(window.orientation == 90){
				$("#footer").css("position","relative");
			}else if(window.orientation == 0){
				$("#footer").css("position","absolute");
				$("#footer").css("bottom","0px");
			}		
		}, false);
	});
            break;
        }
    }
	
