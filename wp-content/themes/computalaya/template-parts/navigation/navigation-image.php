<?php if(has_header_image()): ?>
    <div id="intro" class="section">
        <div class="parallax dotted" style="background-image: url('<?php echo get_header_image() ?>')">
            
        </div>
        <div id="intro-message">
            <?php if (is_active_sidebar('computalya-connect-widget')) : ?>
                <?php dynamic_sidebar( 'computalya-connect-widget' ); ?>
            <?php endif; ?>
        </div>

    </div><!-- // INTRO -->
<?php endif; ?>