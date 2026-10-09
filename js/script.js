/* ================================= dropdown menu site start =================================== */
var map;
$(document).ready(function() {
	
	/* ==== banner script start ==== */		
	function revolutionSliderActiver () {
		if ($('.rev_slider_wrapper #slider1').length) {
		$("#slider1").revolution({
		sliderType:"standard",
		sliderLayout:"auto",
		delay:5000,
		startwidth:1920,
		startheight:600,
		navigationType:"bullet",
		navigationArrows:"0",
		navigationStyle:"preview3",
		dottedOverlay:'yes',
		hideTimerBar:"off",
		onHoverStop:"off",
		navigation: {
		arrows:{enable:true} 
		}, 
		gridwidth: [1920],
		gridheight: [600]
		});			
		}; 	
	}	
	
	jQuery(document).ready(function () {
		(function ($) {
			// add your functions
			revolutionSliderActiver (); 
		})(jQuery);
	});
	/* ==== banner script end ==== */	
	
	
	/* ==== scrollTop script start ==== */
	(function($) {		
			$.fn.prettyPhoto = function(pp_settings) {			
				
				function _get_scroll(){
					if (self.pageYOffset) {
						return {scrollTop:self.pageYOffset,scrollLeft:self.pageXOffset};
					} else if (document.documentElement && document.documentElement.scrollTop) { // Explorer 6 Strict
						return {scrollTop:document.documentElement.scrollTop,scrollLeft:document.documentElement.scrollLeft};
					} else if (document.body) {// all other Explorers
						return {scrollTop:document.body.scrollTop,scrollLeft:document.body.scrollLeft};
					};
				};
			
			};
			
		});
		
		$(document).ready(function() {
			$(".totop").hide();
			
			$(window).scroll(function(){
				if ($(this).scrollTop() > 300) {
					$('.totop').fadeIn();
				} else {
					$('.totop').fadeOut();
				}
			});
			$(".totop a").click(function(e) {
				e.preventDefault();
				$("html, body").animate({ scrollTop: 0 }, "slow");
				return false;
			});
			
	});
	/* ==== scrollTop script end ==== */	

});