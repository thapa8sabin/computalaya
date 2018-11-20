<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
  <meta name="author" content="">

  <title><?php echo get_bloginfo( 'name' ); ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
  
  <!-- Custom fonts for this template -->
  <!-- <link href="<?php echo get_bloginfo('template_directory'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/css/agency.min.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

  <?php wp_head();?>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/computalaya"><?php echo get_bloginfo( 'name' ); ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <?php wp_list_pages( ['title_li'=>'','walker'=>new colaya_walker ] ); ?>
        </ul>
      </div>
    </div>
  </nav>

  <?php get_sidebar(); ?>