<div id="clients" class="section-widgets" style="display: none">

    <div class="widget-content padd-y-50 bg-nd-clr">
    
        <div class="boxed">
    
            <div class="col-1-3">

                <?php 
                $clients = get_posts(['post_type' => 'clients','numberposts'=>1]); 

                if( isset($clients[0]) ) : $client = $clients[0]; ?>
            
                <div class="widget-about widget-box marg-25">
                
                    <div class="widget-title marg-bott-25 wh-clr">Comming Soon!</div>
                    <div class="widget-exc wh-clr">
                    	<?= $client->post_content; ?> 
                    </div>
                    
                    <div class="line-center brd-gr2-clr"></div>

                    <div class="widget-logo"><div class="overw-icon fs-clr-hov transit"><i class="<?php echo get_post_meta($client->ID,'icon',true); ?>"></i></div></div>
                    <div class="widget-address wh-clr"><?= $client->post_title ?></div>
                    <div class="widget-phone wh-clr"><i class="icon-mail"></i> <?= get_post_meta($client->ID,'email',true); ?></div>
                
                </div>
                <?php endif;  ?>
                
            </div>
        
            <div class="col-1-3">
            <?php if( is_active_sidebar('footer-2') ) : ?>
                    <?php dynamic_sidebar('footer-2') ?>
                <?php endif; ?>
            </div>

            <div class="col-1-3">
                <?php if( is_active_sidebar('footer-3') ) : ?>
                    <?php dynamic_sidebar('footer-3') ?>
                <?php endif; ?>
            
            </div>
        
            <div class="clear"></div>
        
        </div>

    </div>
    
</div><!-- // WIDGETS -->