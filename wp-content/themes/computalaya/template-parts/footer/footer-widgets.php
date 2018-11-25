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

				<div class="widget-logo"><?php the_custom_logo(); ?></div>
				<div class="widget-address wh-clr">Nakhu,Laitpur, Nepal.</div>
				<div class="widget-phone wh-clr">(+977) 986 081 0687</div>
				
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
