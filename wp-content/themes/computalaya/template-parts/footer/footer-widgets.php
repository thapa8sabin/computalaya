<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php /*
if ( is_active_sidebar( 'sidebar-2' ) ||
	 is_active_sidebar( 'sidebar-3' ) ) :
?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentyseventeen' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="widget-column footer-widget-1">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
			<div class="widget-column footer-widget-2">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		<?php } ?>
	</aside><!-- .widget-area -->

<?php endif; */?>
<div class="boxed">
	<div class="col-1-3">
		
		<div class="widget-about widget-box marg-25">
			
			<div class="widget-title marg-bott-25 wh-clr"><?php echo bloginfo("name"); ?></div>
			<div class="widget-exc wh-clr">
				<?php echo bloginfo("description"); ?></div>
				
				<div class="line-left brd-gr2-clr"></div>

				<div class="widget-logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/maya/business/img/logo-white.png"></div>
				<div class="widget-address wh-clr">Litespeed Electric, New York, NY 10001</div>
				<div class="widget-phone wh-clr">(000) 123 456 789</div>
				
			</div>
			
		</div>
		
		<div class="col-1-3">
			
			<div class="widget-post widget-box marg-25">
				
				<div class="widget-title marg-bott-25 wh-clr">News</div>
				
				<ul>
					
					<li>
						<div class="post-date brd-wh-clr wh-clr">14 May</div>
						<div class="post-detail">
							<span class="post-title wh-clr"><a href="post-gallery.php.html">Post with Gallery</a></span>
							<span class="post-exc wh-clr">Lorem ipsum dolo sit amet, consectetur elit dolo sit amet.</span>
						</div>
					</li>
					
					<li>
						<div class="post-date brd-wh-clr wh-clr">22 Feb</div>
						<div class="post-detail">
							<span class="post-title wh-clr"><a href="post-video.php.html">Post Video Format</a></span>
							<span class="post-exc wh-clr">Lorem ipsum dolo sit amet, consectetur elit dolo sit amet.</span>
						</div>
					</li>
					
					<li>
						<div class="post-date brd-wh-clr wh-clr">12 Jan</div>
						<div class="post-detail">
							<span class="post-title wh-clr"><a href="post-audio.php.html">Post Audio Format</a></span>
							<span class="post-exc wh-clr">Lorem ipsum dolo sit amet, consectetur elit dolo sit amet.</span>
						</div>
					</li>                       
					
				</ul>
				
			</div>
			
		</div>

		<div class="col-1-3">
			
			<div class="widget-contact widget-box marg-25">
				
				<div class="widget-title marg-bott-25">Quick Contact</div>
				
				<div class="widget-form">
					
					<form action="quickform.php" method="post">
						
						<input type="text" name="name" placeholder="your name" required>
						<input type="email" name="email" placeholder="your email" required>
						<textarea name="message" placeholder="your message" required></textarea>
						
						<input class="bg-nd-clr bg-fs-clr-hov" type="submit" name="submit" value="send">
						
					</form>
					
				</div>
				
			</div>
			
		</div>
		
		<div class="clear"></div>
		
	</div>
