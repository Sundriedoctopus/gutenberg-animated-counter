import particlesjs from 'particlesjs';

;(function ($, window, document, undefined) {
    $(function () {
	    
    	// PARTICLE SYSTEM
		if($('#particles-js--counter').length > 0) {
			var particlesCounter = './particlesjs--counter-config.json';
			particlesJS.load('particles-js--counter', particlesCounter, function() {
				console.log('callback - particles.js config loaded');
			});
		}
		
	// COUNTER BLOCK
		runCounter();
		
		$(window).scroll(function(){
			runCounter();
		});
		
		function runCounter() {
			$('.counter-value').each(function(){
				var isLoaded = $(this).closest('.counter__col').find('input').val() == 'false' ? false : true;
				if (isIntoView($(this)) && !isLoaded){
					var reqVal = $(this).data('value');
					var duration = $(this).data('duration');
				    animateValue($(this).find('span'), reqVal, 0, duration);	
				}
			});
		}
		
		function isIntoView(elem) {
		    	var documentViewTop = $(window).scrollTop();
		    	var documentViewBottom = documentViewTop + $(window).height();
		
		    	var elementTop = $(elem).offset().top;
		    	var elementBottom = elementTop + $(elem).height();
		   
		    	return elementTop < documentViewBottom && elementBottom > documentViewTop? true : false;
		}	
	
		function animateValue(obj, endVal, startVal, duration) {
			obj.closest('.counter__col').find('input').val('true');
					
			$({ Counter: startVal }).animate({ Counter: endVal }, {
			    duration: duration,
			    easing: 'swing',
			    step: function () {
			    	obj.text(digits(Math.ceil(this.Counter)));
			    }
			});
			
			setTimeout(function(){
				obj.text(digits(Math.ceil(endVal)));
			}, duration+10);
			
		}	
		
		function digits(number) { 
			return number.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"); 
		}
		
	});	    
	    
})(jQuery, window, document);
