<?php if(has_header_image()): ?>
    <div id="intro" class="section">
        <div class="parallax dotted" style="background-image: url('<?php echo get_header_image() ?>')">
            
        </div>

        <?php if (is_active_sidebar('computalya-connect-widget')) : ?>
            <?php echo dynamic_sidebar( 'computalya-connect-widget' ); ?>
        <?php endif; ?>

        <?php /*
        <div id="icons-menu" class="transit-top" data-delay="1500" data-appear="false">

            <ul>
                <li data-title="What We Do" data-scrollto="#blog"><i class="icon-server"></i></li>
                <li data-title="Our Team" data-scrollto="#team"><i class="icon-head"></i></li>
                <li data-title="Industrial Partners" data-scrollto="#clients"><i class="icon-link"></i></li>
                <li data-title="Testimonials" data-scrollto="#quotes"><i class="icon-speech-bubble"></i></li>
                <li data-title="Our Products" data-scrollto="#products"><i class="icon-cog"></i></li>
                <li data-title="Be A Part Of Us" data-scrollto="#custom_html-9"><i class="icon-paper"></i></li>
            </ul>

        </div>

        <div class="btn-down brd-fs-clr-hov brd-wh-clr transit-bouncein" data-delay="2000" data-appear="false" data-scrollto="#blog">
            <i class="icon-arrow-down"></i>
        </div>
        */ ?>

    </div><!-- // INTRO -->
<?php endif; ?>