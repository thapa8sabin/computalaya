<div id="icons-menu" class="transit-top" data-delay="1500" data-appear="false">
  <ul>
    <?php
      @wp_nav_menu(array(
        'theme_location'  => 'useful_links',
        'menu_class'      => false,
        'container_class' => false,
        'depth'           => 1,
        'walker'          => new Computalaya_Useful_Link
      )); 
    ?>
  </ul>        
</div>

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

<script src="<?php echo get_bloginfo('template_directory'); ?>/maya/business/js/main.js"></script> <!-- Resource jQuery -->

<script type="text/javascript">
	
</script>
<?php wp_footer(); ?>

</body>
<script type="text/javascript">
    jQuery(function () {
        jQuery("[rel='tooltip']").tooltip();
    });
</script>
</html>
