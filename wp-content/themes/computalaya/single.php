<?php 
get_header(); ?>

<div id="post" class="page">
	<?php while(have_posts()): the_post();?>
		<div id="post-image" class="row" style="background-image: url('<?php the_post_thumbnail_url() ?>');">

			<div class="header-page padd-y-75">

				<div class="header-layer-page padd-y-75 bg-wh-alpha">

					<div class="title-page padd-x-25 fs-clr"><?php the_title(); ?></div>
					<div class="meta-page padd-x-25 fs-clr"><?php the_time() ?></div>

				</div>

			</div>

		</div>

		<div class="post-wrap padd-y-50 boxed">

			<article class="row">

				<div class="post-content padd-x-25">

					<?php the_content(); ?>

				</div>

				<div class="line-center gr2-clr"></div>

				<?php if ( comments_open() || get_comments_number() ) : ?>
				comments_template();
			<?php endif ?>  

		</article>

	</div>
<?php endwhile; ?>
</div>

<?php get_footer();