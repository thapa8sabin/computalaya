<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<?php the_custom_logo(); ?>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<?php 
		if (is_active_sidebar('navigation-bar')) {
    		dynamic_sidebar('navigation-bar');
		}
	?>
	<div class="collapse navbar-collapse" id="navbarNav">
		
		<?php
			wp_nav_menu(array(
                        'theme_location'    => 'top',
                        'menu_class'		=> 'navbar-nav ml-auto',
                        'container'         => false,
                        'walker'            => new Computalaya_Walker
                    ));   
		 ?>
		
	</div>
</nav>