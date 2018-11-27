<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('title'); ?></title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed" rel='stylesheet' type='text/css'>
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>

<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- CSS LIBS -->

<link href="<?php echo get_bloginfo('template_directory'); ?>/maya/business/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_bloginfo('template_directory'); ?>/maya/business/css/plugins.css" rel="stylesheet" type="text/css">

<?php wp_head(); ?>


<!-- FAVICON -->
<link rel="icon" type="<?php echo get_bloginfo('template_directory'); ?>/maya/business/image/png" href="img/favicon.png" />

</head>

<body> 
   
    <div id="wrap">
        
        <header class="transit header-clear">
            <?php get_template_part( 'template-parts/header/header', 'image' );?>
            <?php if(has_nav_menu('top')): ?>
                <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
            <?php endif; ?>
            
        </header>
        <?php
        // mobile menu
                    wp_nav_menu(array(
                        'theme_location' => 'top',
                        'container'     => 'div',
                        'container_id'   => 'mobile-menu',
                        'container_class'   => '',
                        'walker'            => new Computalaya_Walker()
                    ));
                ?>
<!-- // MENU / LOGO -->
<?php