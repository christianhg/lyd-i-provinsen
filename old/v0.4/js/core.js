/**
 *   verticalAlign by Christian Grøngaard
 */
(function($, f) {

	if(!$) { return f; }
	
	$.fn.verticalAlign = function($windowMinWidth) {
		var $parent = $(this).parent();
		var $child = $(this);
		
		function verticalAlign() {
			
			$child.css({
				'position': '',
				'top': ''
			});

			if($(window).width() >= $windowMinWidth) {
				var $top = ($parent.height() - $child.outerHeight())/2;
				$child.css({
					'position': 'relative',
					'top': $top
				});

			}
		}

		verticalAlign();

		$(window).bind("load", function() {
			verticalAlign();
		});

		$(window).bind("resize", function() {
			verticalAlign();
		});
	};
	
})(window.jQuery, false);

/**
 *   stretchImage by Christian Grøngaard
 */
 
(function($, f) {

	if(!$) { return f; }
	
	$.fn.stretchImage = function($fadeIn) {
		
		var $parent = $(this);

		if($fadeIn === null) { $fadeIn = false; }
		
		$(window).bind("load", function() {
			
			stretchImage();
			
		});

		$(window).bind("resize", function() { // Bind window resize event
			
			stretchImage();
		
		});

		function stretchImage() {

			$parent.each(function() { // Find each instance of the parent element
				var $c = $(this).find("img"); // Child we are gonna stretch
			
				$c.css({ // Reset all the previously applied CSS
					'width': '',
					'height': '',
					'margin-left': '',
					'margin-top': ''
				});
				
				$(this).css({'overflow': 'hidden'});

				var $pH = $(this).outerHeight(); // Parent Height
				var $pW = $(this).outerWidth(); // Parent Width
				var $cH = $c.outerHeight(); // Child height
				var $cW = $c.outerWidth(); // Child width
				
				var $pAR = $pW / $pH; // Parent width/height aspect ratio
				var $cAR = $cW / $cH; // Child width/height aspect ratio
				
				if($pAR <= 1) { // $pH >= $pW, p is portrait/square
					if($cAR <= 1) { // $cH >= $cW, p is portrait/square and	c is portrait/square				
						if($pAR <= $cAR) { // $pH >= $cH, p is portrait/square, c is portrait/square and p is heigher or same height as c
							$c.css({'height': $pH});
							$c.css({'margin-left': -(($c.outerWidth()-$pW)/2)});
						} else { // $cH > $pH, p is portrait/square, c is portrait/square and c is heigher than p
							$c.css({'width': $pW});
							$c.css({'margin-top': -(($c.outerHeight()-$pH)/2)});
						}
					} else { // $cW > $cH, p is portrait/square and c is landscape
						$c.css({'height': $pH});
						$c.css({'margin-left': -(($c.outerWidth()-$pW)/2)});
					}
				} else { // $pW > $pH, p is landscape
					if($cAR > 1) { // $cW > $cH, p is landscape and c is landscape 
						if($cAR > $pAR) { // $cW > $pW, p is landscape, c is landscape c is weider than p 
							$c.css({'height': $pH});
							$c.css({'margin-left': -(($c.outerWidth()-$pW)/2)});
						} else { // $pW >= $cW, p is landscape, c is landscape p is weider than or same width as c 
							$c.css({'width': $pW});
							$c.css({'margin-top': -(($c.outerHeight()-$pH)/2)});
						}
					} else { // $cH >= $cW, p is landscape, c is portrait/square
						$c.css({'width': $pW});
						$c.css({'margin-top': -(($c.outerHeight()-$pH)/2)});
					}
				}
				
				if($fadeIn) {
					$c.css("visibility","visible").hide().fadeIn();
				}
			});
		}

		stretchImage();
	};
	
})(window.jQuery, false);