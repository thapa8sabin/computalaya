

<div class="transit-bouncein" data-delay="0">

	<div class="blog-box padd-25">

		<!-- <div class="blog-date marg-bott-25 wh-clr">12 Sep 2013</div> -->
		<?php
		if ( is_sticky() && is_home() ) :
			echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
		endif;
		 ?>
		<div class="blog-thumb" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">

			<div class="blog-caption transit">
				<div class="blog-more nd-clr"><a href="<?php the_permalink(); ?>">Read More</a></div>
				<div class="blog-icon"><i class="icon-paper"></i></div>
			</div>

		</div>

		<div class="blog-detail padd-25 bg-gr1-clr">

			<div class="blog-title fs-clr">
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</div>

			<div class="line-center brd-gr2-clr"></div>

			<div class="blog-exc">
				<?php the_excerpt(); ?>
			</div>

		</div>

	</div>

</div>



