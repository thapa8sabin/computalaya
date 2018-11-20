<?php get_header(); ?>
<?php get_sidebar(); ?>
<section id="<?= the_title(); ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase"><?php the_title() ?></h2>
				<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
			</div>
		</div>
		<div class="row">
			<?php while(have_posts()) : the_post(); the_content(); endwhile; ?> 
		</div>
	</div>
</section>
<?php
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
			get_the_title()
		),
		'<footer class="entry-footer"><span class="edit-link">',
		'</span></footer><!-- .entry-footer -->'
	);
?>

<?php get_footer(); ?>