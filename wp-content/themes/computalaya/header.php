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
            <?php if (is_home()) { get_template_part('template-parts/navigation/navigation','top'); } ?>
        </header>
<!-- // MENU / LOGO -->