// PRELOADER

jQuery(function($){
	
	$(window).load(function() {
		
		
		$('#preloader').animate({opacity:0}, 300);
		setTimeout(function(){
			
			$('#wrapper').animate({opacity:1}, 800);
		
		}, 300);
		
		
		
	});
	
});