<?php get_header(); ?>
<?php
get_template_part('template-parts/navigation/navigation','image');
get_template_part('template-parts/post/content');
get_template_part('template-parts/post/content','team');
get_template_part('template-parts/post/content','partners');
get_template_part('template-parts/post/content','testimonials');
get_template_part('template-parts/post/content','products');
get_template_part('template-parts/post/content','clients');
if (is_active_sidebar('footer-1')) {
    dynamic_sidebar('footer-1');
}
?>

<?php get_footer(); ?>