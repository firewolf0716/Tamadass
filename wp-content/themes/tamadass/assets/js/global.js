jQuery(function($){

	// hamburger menu	
	resizer();
	$(window).on("resize",resizer);

	function resizer(){

		var headerHeight = $(".fixedHeader").outerHeight();
		var out_wrapper_h = $(".out_wrapper").outerHeight();
		var company_box_h = $(".company_box").outerHeight();

		var ww = window.innerWidth;
		console.log("ww:"+ww);

		var mv_center_w = $(".mv_center").width();

		if(ww > 1000){

			$(".company_girl").css({
				"top": " 0px",
			});
			
		}
		if (ww > 1200) {
			$(".mv_center").css({
				"left": "25%",
			});	
		}else if(ww > 640 && ww <= 1200){
			$(".mv_center").css({
				"left": (( ww - mv_center_w ) / 2 ) +"px",
			});			
		}
		if(ww > 640 && ww <= 1000){

			var company_girl_h = $(".company_girl").outerHeight();

			$(".company_girl").css({
				"top": (( company_box_h - company_girl_h ) / 2 - 45 ) +"px",
			});

		}
		if(ww <= 992){

			$("#hamburger_link").css({
				"top":headerHeight+"px",
			});

		}
        if(ww <= 640){
			$(".site-content-box").css({
				"margin-top":headerHeight+"px",
			});
		}
	}

});



	// hamburger menu	
	function hamburger() {
		var x = document.getElementById("hamburger_link");
		if (x.style.display === "block") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}
	}