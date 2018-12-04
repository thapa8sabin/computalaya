<?php 
if (have_posts()):?>

    <div id="services" class="section-blog" style="display: none;">

        <div class="blog-content">

            <div class="parallax" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/maya/business/img/bg/what-we-do.png');">

                <div class="blog-layer padd-y-25 bg-bk-alpha">

                    <div class="header-section padd-y-75">

                        <div class="title-section padd-x-25 wh-clr transit-words">What We Do</div>

                    </div>

                    <div class="boxed">

                        <div id="blog-carousel">
                            <?php while (have_posts()) : $i = 1; the_post(); ?>
                                
                                <div class="transit-bouncein" data-delay="0">

                                    <div class="blog-box padd-25">

                                        <!-- <div class="blog-date marg-bott-25 wh-clr">12 Sep 2013</div> -->
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
                            <?php endwhile; ?> 
                        </div>

                        <div class="clear"></div>

                    </div>

                </div>

            </div>

        </div>

    </div><!-- // BLOG -->
<?php endif; ?>