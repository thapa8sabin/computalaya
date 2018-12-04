jQuery(document).ready(function($){
	/*if( $('#navbarNav').length > 0 ) {

		var  icons = {
			'About':'bell',
			'Products':'box',
			'Careers':'star',
			'Team':'head',
			},
		menus = $('#navbarNav').find('ul').children().each(function(){
			
			// Add menu on the bottom as same
			var menu_title = $(this).text();
			// console.log(menu_title) ;
			new_li = '<li rel="tooltip" data-title="'+menu_title+'"><i class="icon-'+ icons[menu_title] +'"></i></li>';
			// console.log(new_li);
			$('#icons-menu').find('ul').prepend(new_li);
		});
	}*/

	$('li.nav-item').find('a').on('click',function(e){
		// $('div.is_active').removeClass('is_active');
		e.preventDefault();
		var id = $(this).attr('href');
		$('div.is_active').fadeOut();
		$(id).addClass('is_active').fadeIn();
	});

	$('li.on_change_page').on('click',function(e){
		var id = $(this).attr('data-title');
		$('div.is_active').fadeOut();
		$(id).addClass('is_active').fadeIn();
	});
});





