<?php 

if (have_posts()) :
	?>
	<div id="portfolio" class="section">

		<div class="header-section padd-y-75 bg-gr1-clr">

			<div class="title-section padd-x-25 fs-clr transit-words">Who We Are</div>

		</div>

		<div class="port-content">

			<div class="port-filter marg-y-50">
				<ul>
					<li class="fs-clr bg-fs-clr-hov transit selected" data-filter="all">All</li>
					<li class="fs-clr bg-fs-clr-hov transit" data-filter="design">Design</li>
					<li class="fs-clr bg-fs-clr-hov transit" data-filter="web">Web</li>
					<li class="fs-clr bg-fs-clr-hov transit" data-filter="graphic">Graphic</li>
					<li class="fs-clr bg-fs-clr-hov transit" data-filter="vector">Vector</li>
				</ul>
			</div>

			<div class="port-list boxed">
				<?php while(have_posts()): the_post();?>
					<div class="col-1-3 transit-bottom">
						<?php
						// todo replace background image once feature image is added 
						// if(has_post_thumnnail())
							// $featured_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
						?>
						<div class="port-item design" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/maya/business/img/portfolio/port24_thumb.jpg');">
							<div class="port-caption transit">
								<div class="port-title marg-top-75 marg-left-25 marg-right-25"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
								<div class="line-center brd-gr2-clr"></div>
								<div class="port-icon"><i class="icon-maximize"></i></div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<div class="clear"></div>
			</div>
		</div>
	</div> 
	
<?php endif; ?>