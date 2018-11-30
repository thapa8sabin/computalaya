<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('title'); ?></title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>

<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>


<!-- FAVICON -->
<link rel="icon" type="<?php echo get_bloginfo('template_directory'); ?>/maya/business/image/png" href="img/favicon.png" />

</head>

<body <?php body_class(); ?>> 

    <div id="wrap">

        <header>
            
            <nav class="cd-stretchy-nav">
                <a class="cd-nav-trigger" href="#">
                    <span aria-hidden="true"></span>
                </a>
                <?php
                if ( is_home() ) {
                    wp_nav_menu(array(
                        'theme_location'    => 'top',
                        'container'         => false,
                        'before'            => '<span>',
                        'after'             => '</span>',
                        'walker'            => new Computalaya_Walker
                    ));    
                } else { ?>
                    <ul>
                        <li><a href="<?php echo get_home_url() ?>"><span>Home</span></li>
                    </ul>
                <?php } ?>

                <span aria-hidden="true" class="stretchy-nav-bg"></span>
            </nav>
            
            <?php 
             //get_template_part( 'template-parts/header/header', 'image' );
            
            ?>
            <?php //if(has_nav_menu('top')): ?>
            <?php //get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
            <?php //endif; ?>
            
        </header>
<!-- // MENU / LOGO -->