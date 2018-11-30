<?php get_header(); ?>
<?php while(have_posts()): the_post();?>
	<div id="<?php the_title() ?>" class="section">

		<div id="post-image" class="row" style="background-image: url('<?php the_post_thumbnail_url() ?>');">

			<div class="header-page padd-y-75">

				<div class="header-section padd-y-75 bg-gr1-clr">

					<div class="title-section padd-x-25 fs-clr"><?php the_title(); ?></div>

				</div>

			</div>

		</div>
		
		<?php the_content(); ?>

	</div>
<?php endwhile; ?>

<?php get_footer(); ?>