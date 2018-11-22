<?php
if (!class_exists('colaya_walker')) {
	class colaya_walker extends Walker_Nav_Menu {


		function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
			// <li class="nav-item">
              // <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            // </li>
			global $wp_query;

			$item_output = NULL;

			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

			$class_names = $value = '';
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;

			// $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );


			$class_names = ' class="nav-item" ';

			$output .= $indent . '<li id="menu-item-' . esc_attr( $item->ID ) . '"' . $value . $class_names . '>';

			$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
			$attributes .= ' class="nav-link js-scroll-trigger" ';
	
			$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
			$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
			$attributes .= ! empty( $item->url ) ? ' href="' . esc_url( $item->url ) . '"' : ' href="' . esc_url( get_permalink( $item->ID ) ) . '"';
        // Insert title for top level
			if ( has_nav_menu( 'header_menu' ) ) {
				$title = ( $depth == 0 )
				? '<span>' . apply_filters( 'the_title', $item->title, $item->ID ) . '</span>' : apply_filters( 'the_title', $item->title, $item->ID );
			} else {
				$title = ( $depth == 0 )
				? '<span>' . apply_filters( 'the_title', get_the_title($item->ID), $item->ID ) . '</span>' : apply_filters( 'the_title', get_the_title($item->ID), $item->ID );
			}

        // Insert description for top level elements only
			$description = ( ! empty ( $item->description ) and $depth == 0 )
			? '<span>' . esc_attr( $item->description ) . '</span>' : '';

        // Structure of output
			if ( ! empty( $description ) ) {
				$item_output .= '<a'. $attributes .'><div class="header-walker">';
				$item_output .= $title;
				$item_output .= $description;
				$item_output .= '</div></a>';
			} else {
				$item_output .= '<a'. $attributes .'>';
				$item_output .= $title;
				$item_output .= '</a>';
			}

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function computalaya_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'computalaya_custom_logo_setup' );

