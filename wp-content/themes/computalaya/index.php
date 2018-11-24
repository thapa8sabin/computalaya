<?php get_header(); ?>

<?php 
$banner = new WP_Query( array( 'post_type' => 'banner','numberpost'=>1 ) );
if ($banner->have_posts()): ?>


<div id="intro" class="section">
    <?php while($banner->have_posts()): $banner->the_post(); ?>
    <div class="parallax dotted" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
    
    
        <?php the_content(); ?>
        
    
    <div id="icons-menu" class="transit-top" data-delay="1500" data-appear="false">

        <ul>
            <!-- <li data-title="Services" data-scrollto="#services"><i class="icon-star"></i></li> -->
            <!-- <li data-title="Works" data-scrollto="#portfolio"><i class="icon-box"></i></li> -->
            <!-- <li data-title="Features" data-scrollto="#features"><i class="icon-cog"></i></li> -->
            <li data-title="What We Do" data-scrollto="#blog"><i class="icon-paper"></i></li>
            <li data-title="Industrial Partners" data-scrollto="#overview"><i class="icon-head"></i></li>
        </ul>
        
    </div>

    <?php endwhile; ?>
    <div class="btn-down brd-fs-clr-hov brd-wh-clr transit-bouncein" data-delay="2000" data-appear="false" data-scrollto="#services">
        <i class="icon-arrow-down"></i>
    </div>

</div><!-- // INTRO -->
<?php endif; ?>

<?php 
if (have_posts()):?>
    <div id="blog" class="section">
    
    <div class="blog-content">
        
        <div class="parallax" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/img/bg/bg-2.jpg');">
            
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
$industrial_label = get_post_type_object('industrial_partners');
$industrial_partners = new WP_Query( array( 'post_type' => 'industrial_partners' ) );

if ($industrial_partners->have_posts()): ?>
<div id="overview" class="section">
    
    <div class="header-section padd-y-75">
        
        <div class="title-section padd-x-25 nd-clr transit-words"><?php echo $industrial_label->labels->singular_name ?></div>
        <div class="subtitle-section padd-x-25"><?php echo $industrial_label->description ?></div>
        
    </div>
        
    <div class="overw-content">
        
        <div class="parallax" style="background-image: url('img/bg/blog.jpg');">    
        
            <div class="overw-list padd-y-75 bg-fs-alpha">
               
                <div class="boxed">
                    <?php while($industrial_partners->have_posts()) : $industrial_partners->the_post(); ?>
                    <div class="col-1-4">
                        <div class="overw-box padd-25 transit-left">
                            <div style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-repeat: no-repeat; background-size: cover;" class="overw-icon fs-clr-hov transit"></div>
                            <div class="overw-title marg-y-25"><?php the_title() ?></div>
                            <div class="line-center brd-gr2-clr"></div>
                            <div class="overw-exc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia, turpis nec convallis volutpat.</div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    
                    <div class="clear"></div>
                
                </div>
                
            </div>
            
        </div>
                        
    </div>

</div>
<!-- // OVERVIEW -->
<?php endif; ?>
<?php get_footer(); ?>