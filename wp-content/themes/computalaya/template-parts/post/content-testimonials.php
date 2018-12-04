<?php 
$testimonials_meta = get_post_type_object('testimonials');
$testimonials = get_posts(['post_type'=>'testimonials']);

if (count($testimonials) > 0): ?>
<div id="testimonials" class="section-quotes" style="display: none;">

    <div class="quote-content">
        
        <div class="parallax" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/maya/business/img/bg/quote.jpg');">
            
            <div class="quote-layer padd-y-50 bg-nd-alpha">
                
                <div id="quote-carousel">
                    <?php foreach ($testimonials as $testimonial) : ?>
                    <div class="quote-message">
                        <?php //echo get_the_post_thumbnail_url($testimonial);die;?>
                        <div class="quote-thumb" style="background-image: url('<?= get_the_post_thumbnail_url($testimonial) ?>');"></div>
                        
                        <div class="quote-exc padd-x-25"><?= $testimonial->post_content; ?></div>
                        
                        <div class="line-center brd-gr2-clr transit-top"></div>
                        
                        <div class="quote-author padd-x-25"><?= $testimonial->post_title; ?></div>
                        
                    </div>
                    <?php endforeach; ?>                    
                </div> 
                
            </div>
            
        </div>
        
    </div>
    
</div><!-- // QUOTES -->
<?php endif; ?>