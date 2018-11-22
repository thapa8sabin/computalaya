/* Modified by lorantlabor - http://lorantlabor.com */
/*
 * Set the scrollbars 
 */
$(document).ready(function() { 
	$("body").css("overflow", "visible");
	var nice = $("html").niceScroll();  // The document page (body)
});

/* Function for preloader
 * 
 */
//<![CDATA[
	$(window).load(function() { // makes sure the whole site is loaded
		$("#preloader").delay(1500).fadeOut("slow"); // will fade out the white DIV that covers the website.
	})
	//]]>

/*
 * Function for image slider background
 */ 
$(function(){
	$('#maximage').maximage({
		cycleOptions: {
			fx: slidertransition,
			speed: sliderspeed, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
			timeout: slidertimeout
			},
		onFirstImageLoaded: function(){
			jQuery('#maximage').fadeIn('fast');
			}
      });
});

/*
 * Function for Tweets
 */
$(function($){
    $(".tweets").tweet({
        modpath: 'dist/twitter/',	
        username: twitter,
        page: 1,
        avatar_size: avatarsize,
        count: countno,
        loading_text: loadingtext
    });
});

/*
 * Function for scroller
 */
$(document).ready( function() {
	$('.tweet_list').listVerticalScroller({
			direction:scrolldirection,
			duration:tweetduration,
			speed:scrollspeed
	});
});

/*
 * Modal close
 */
$(function(){
         $('#show_modal_1').click(function(e){
              $('#about').modal('show');
              $('#index, #counter, #subscribe_to, #g_map, #contact_us').modal('hide');
              e.stopPropagation();
          });
          $('#show_modal_2').click(function(e){
              $('#subscribe_to').modal('show');
              $('#index, #counter, #about, #g_map, #contact_us').modal('hide');
              e.stopPropagation();
          });
          $('#show_modal_3').click(function(e){
              $('#g_map').modal('show');
              $('#index, #counter, #about, #subscribe_to, #contact_us').modal('hide');
              e.stopPropagation();  
          });
          $('#show_modal_4').click(function(e){
              $('#contact_us').modal('show');
              $('#index, #counter, #about, #subscribe_to, #g_map').modal('hide');
              e.stopPropagation();
          });
          $('#show_modal').click(function(e){
          	  $('#index').show();
              $('#about, #subscribe_to, #g_map, #contact_us').modal('hide');
              e.stopPropagation();
          });
});

/*
 * Remove the anchor tag
 */
$('#show_modal,#show_modal_1,#show_modal_2,#show_modal_3,#show_modal_4,.tubular-play,.tubular-pause,.tubular-volume-up,.tubular-volume-down,.tubular-mute').click(function(event){
        event.preventDefault();
        //the rest of the function is the same.
});
         
/*
 * Function for the Contact Form
 */
$(function(){
$('#contact').validate({
submitHandler: function(form) {
    $(form).ajaxSubmit({
    url: 'contact.php',
    success: function() {
    $('#contact').hide();
    $('#contact-form').append(contact_sent)
    }
    });
    }
});         
});

/*
 * Function for the Subscribe Form [used for normal (NO MailChimp) subscribe]
 */
$(function(){
$('#mc-embedded-subscribe-form').validate({
submitHandler: function(form) {
    $(form).ajaxSubmit({
    url: 'subscribe.php',
    success: function() {
    $('.subscribe_icon').hide();
    $('#mc-embedded-subscribe-form').hide();
    $('#mc_embed_signup').append(subscribe_sent)
    }
    });
    }
});         
});

/*
 * Function for placeholders
 */
$('input, textarea').placeholder();

/*
 * Google maps
 */       
var marker;
var map;
function initialize() {
  var arrow = {
        path: google.maps.SymbolPath.BACKWARD_CLOSED_ARROW,
        fillOpacity: arrowOpacity,
        strokeOpacity: arrowStrokeOpacity,
        strokeColor: arrowColor,
        strokeWeight: arrowStrokeWeight, 
        scale: arrowScale
  };
  var styles = [
				{
        "featureType": "administrative",
        "stylers": [
          { "visibility": "off" }
        ]
      },{
        "featureType": "landscape",
        "stylers": [
          { "visibility": "on" },
          { "color": "#909090" }
        ]
      },{
        "featureType": "poi",
        "stylers": [
          { "visibility": "off" }
        ]
      },{
        "featureType": "road",
        "stylers": [
          { "visibility": "off" }
        ]
      },{
        "featureType": "transit",
        "stylers": [
          { "visibility": "off" }
        ]
      }
			];
	
  var mapOptions = {
    zoom: mapZoom,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: city,
    disableDefaultUI: true,
	styles: styles
  };
  
  map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);
  
  var marker = new google.maps.Marker({
      map:map,
      draggable:disableUI,
      icon: arrow,
      position: hall
  });
  
  google.maps.event.addListener(map, "idle", function(){
  google.maps.event.trigger(map, 'resize'); 
  map.setCenter(hall);
  });	
   
}
$('#g_map').on('show.bs.modal', function () { 
     initialize();
});

/*
 * Function to detect mobile device
 */
function isMobile() {
	return (( /Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent) ) || ($(window).width() <= 480));
}

/*
 * Function for Vimeo video background
 */ 
window.onload = window.onresize = function () {
    var player = $("#vimeoplayer");
    var ratio = 16/9; 
    var width = window.innerWidth;
    var pWidth = player.width; // player width, to be defined
    var height = window.innerHeight;
    var pHeight = player.height; // player height, tbd
    if (width / ratio < height) { 
                pWidth = Math.ceil(height * ratio); 
                player.width(pWidth).height(height).css({left: (width - pWidth) / 2, top: 0}); 
            } else { 
                pHeight = Math.ceil(width / ratio); 
                player.width(width).height(pHeight).css({left: 0, top: (height - pHeight) / 2}); 
            }
}

/*
 * Function to detect iPad rotation
 */
addEventListener("load", function()
{
    setTimeout(updateLayout, 0);
}, false);
var currentWidth = 0;
function updateLayout()
{
    if (window.innerWidth != currentWidth)
    {
        currentWidth = window.innerWidth;
        var orient = currentWidth == 320 ? "profile" : "landscape";
        document.body.setAttribute("orient", orient);
        setTimeout(function()
        {
            window.scrollTo(0, 1);
        }, 100);            
    }
}
setInterval(updateLayout, 400);