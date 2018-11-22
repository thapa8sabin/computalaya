// jQuery
$(document).ready(function() {
	$(".fancybox").fancybox();
	// Animated Scroll
	$('body').plusAnchor({
        easing: 'easeInOutExpo',
        speed:  1000
    });
	/*** Quotes-Slider ***/
	$('.flexslider').flexslider({
        animation: "slide",
        touch: true,
        slideshow: true,
		slideshowSpeed: 4000,        
		animationSpeed: 600,
		controlNav: false,
		directionNav: false,
     });
	// Nav-Menu
	$('#nav-menu a').click(function(){
		$('#nav-menu a.active').removeClass('active');
		$(this).addClass('active');
	});
	// Responsive Nav-Menu
	$('.menu-trigger').click(function() {
		$('#nav-menu').slideToggle('slow');
	});

	// Subscription-Form
	$(".mail-input").keypress(function() {
	  $(".mail-input").css({"background-color":"#fafafa"});
	});
	$(".mail-input").blur(function() {
	  $(".mail-input").css({"background-color":"rgba(27, 27, 27, 0.3)"});
	});
	$(".mail-input").focus(function() {
	  $(".mail-input").css({"background-color":"#fafafa"});
	  $(".mail-input").css({"color":"#333"});
	  $('.mail-input').val("");
	});
	$(function() {
			$(".submit-btn").click(function() {
			var x=$(".mail-input").val();
			var atpos=x.indexOf("@");
			var dotpos=x.lastIndexOf(".");
			var email = $(".mail-input").val();
			var dataString = 'email='+ email;
			
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
			{
			$(".mail-input").css({"background-color":"rgba(255, 14, 14, 0.57)"});
			}
			else
			{
			$.ajax({
			type: "POST",
			url: "mail.php",
			data: dataString,
				success: function(){
					$('.mail-input').val("Done! You will get latest news about NextApp.");
					$(".mail-input").css({"background-color":"rgba(12, 162, 42, 0.57)"});
					$(".mail-input").css({"color":"#fafafa"});
				}
			});
			}
			return false;
			});
	});
});