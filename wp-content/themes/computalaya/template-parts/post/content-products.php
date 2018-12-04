 <?php
 $products = get_posts(['post_type'=> 'computalaya_products']);

 $products_meta = get_post_type_object('computalaya_products');
 if ( count( $products ) > 0 ) : ?>
 <div id="products" class="overw-content" style="display: none;">
    
    <div class="parallax" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/maya/business/img/bg/blog.jpg');">
        
        <div class="overw-list padd-y-75 bg-fs-alpha">
         
            <div class="boxed">
            <?php foreach( $products as $product ) : ?>
                <div class="col-1-4">
                    <div class="overw-box padd-25 transit-left">
                        <div class="overw-icon fs-clr-hov transit"><i class="<?php echo get_post_meta($product->ID,'icon',true); ?>"></i></div>
                        <div class="overw-title marg-y-25"><?php echo $product->post_title; ?></div>
                        <div class="line-center brd-gr2-clr"></div>
                        <div class="overw-exc"><?= $product->post_content; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
                
                <div class="clear"></div>
                
            </div>
            
        </div>
        
    </div>
    
</div>
<?php endif; ?>