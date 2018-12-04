<?php get_header(); ?>
<?php
get_template_part('template-parts/navigation/navigation','image');

if (is_active_sidebar('content')) {
	get_template_part('template-parts/post/content');
}

if (is_active_sidebar('team')) {
	get_template_part('template-parts/post/content','team');
}

if (is_active_sidebar('partners')) {
	get_template_part('template-parts/post/content','partners');
}

if (is_active_sidebar('testimonials')) {
	get_template_part('template-parts/post/content','testimonials');
}

if (is_active_sidebar('products')) {
	get_template_part('template-parts/post/content','products');	
}

if (is_active_sidebar('clients')) {
	get_template_part('template-parts/post/content','clients');
}

if (is_active_sidebar('footer-1')) {
    dynamic_sidebar('footer-1');
}
?>

<?php get_footer(); ?>