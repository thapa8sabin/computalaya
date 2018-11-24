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
<!-- <link rel="icon" type="<?php echo get_bloginfo('template_directory'); ?>/maya/business/image/png" href="img/favicon.png" /> -->

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
/*
     * If a regular post or page, and not the front page, show the featured image.
     * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
     */ /*
    if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) : ?>
        <div id="intro" class="section">

    <div class="parallax dotted" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/maya/business/img/bg/intro3.jpg')"></div>
    
    <div id="intro-message">
        
        <div class="intro-title padd-x-50">Fully Customizable</div>
        <div class="intro-subtitle marg-x-50 bg-fs-clr">All sections that you need</div>
        
    </div> 
    
    <div id="icons-menu" class="transit-top" data-delay="1500" data-appear="false">

        <ul>
            <li data-title="Services" data-scrollto="#services"><i class="icon-star"></i></li>
            <li data-title="Works" data-scrollto="#portfolio"><i class="icon-box"></i></li>
            <li data-title="Features" data-scrollto="#features"><i class="icon-cog"></i></li>
            <li data-title="Team" data-scrollto="#team"><i class="icon-head"></i></li>
            <li data-title="Blog" data-scrollto="#blog"><i class="icon-paper"></i></li>
        </ul>
        
    </div>
    
    <div class="btn-down brd-fs-clr-hov brd-wh-clr transit-bouncein" data-delay="2000" data-appear="false" data-scrollto="#services">
        <i class="icon-arrow-down"></i>
    </div>

</div><!-- // INTRO -->
<?php endif; */ ?>