<?php get_header(); ?>

<?php if(has_header_image()): ?>
    <div id="intro" class="section">
        <div class="parallax dotted" style="background-image: url('<?php echo get_header_image() ?>')"></div>

        <?php if (is_active_sidebar('computalya-connect-widget')) : ?>
            <?php echo dynamic_sidebar( 'computalya-connect-widget' ); ?>
        <?php endif; ?>


        <div id="icons-menu" class="transit-top" data-delay="1500" data-appear="false">

            <ul>
                <li data-title="What We Do" data-scrollto="#blog"><i class="icon-paper"></i></li>
                <li data-title="Industrial Partners" data-scrollto="#overview"><i class="icon-head"></i></li>
            </ul>

        </div>

        <div class="btn-down brd-fs-clr-hov brd-wh-clr transit-bouncein" data-delay="2000" data-appear="false" data-scrollto="#blog">
            <i class="icon-arrow-down"></i>
        </div>

    </div><!-- // INTRO -->
<?php endif; ?>

<?php 
if (have_posts()):?>

    <div id="blog" class="section">

        <div class="blog-content">

            <div class="parallax" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/maya/business/img/bg/what-we-do.png');">

                <div class="blog-layer padd-y-25 bg-bk-alpha">

                    <div class="header-section padd-y-75">

                        <div class="title-section padd-x-25 wh-clr transit-words">What We Do</div>

                    </div>

                    <div class="boxed">

                        <div id="blog-carousel">
                            <?php while (have_posts()) : $i = 1; the_post(); ?>
                                <?php get_template_part('template-parts/post/content', get_post_format());
                            endwhile; ?> 
                        </div>

                        <div class="clear"></div>

                    </div>

                </div>

            </div>

        </div>

    </div><!-- // BLOG -->
<?php endif; ?>

<?php
get_template_part('template-parts/post/content','team');
get_template_part('template-parts/post/content','partners');
get_template_part('template-parts/post/content','testimonials');
get_template_part('template-parts/post/content','products');
?>

<?php get_footer(); ?>