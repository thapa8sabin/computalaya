        <div id="widgets" class="section">

            <div class="widget-content padd-y-50 bg-nd-clr">
               <?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
           </div>

       </div><!-- // WIDGETS -->
       <footer>

         <div class="footer-content">

          <div class="footer-layer bg-fs-clr">

           <div class="boxed">
            <?php if (has_nav_menu('social')) : ?>
                <?php
                    @wp_nav_menu(array(
                        'theme_location'    => 'social',
                        'menu_class'        => false,
                        'container_class'   => 'footer-icons',
                        'depth'             => 1,
                        'walker'            => new Social_Link_Walker
                        )
                    ); 
                ?>
        <?php 
        endif; 
        get_template_part( 'template-parts/footer/site', 'info' );
        ?>
        <div class="clear"></div>

    </div>
</div>

</div>

</footer><!-- // FOOTER -->


</div> <!-- /wrapper -->

<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/maya/business/js/jquery-min.js"></script>



<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/maya/business/js/plugins.js"></script> 

<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/maya/business/js/scripts.js"></script> 
<script type="text/javascript">
	jQuery(function(){
		jQuery(window).load(function() {
			jQuery('body').css('background','#ccc');
		});
	});
</script>
<?php wp_footer(); ?>
</body>
</html>
