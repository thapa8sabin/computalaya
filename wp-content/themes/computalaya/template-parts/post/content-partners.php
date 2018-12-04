<?php 
$links = get_bookmarks(['category_name' => 'Industrial Partners']); 
// print_r($links);die;
?>
<div id="partners" class="section-clients" style="display: none;">

    <div class="clients-content padd-y-50 bg-fs-clr">

        <div class="boxed">

            <div class="title-section padd-x-25 wh-clr transit-words">Industrial Partners</div>

            <ul class="client-list" id="clients-carousel">
                <?php $i =0; foreach ($links as $link) : ?>

                    <li class="client-thumb marg-25 transit-top" data-delay="<?= $i ?>">
                        <a href="<?= $link->link_url ?>" target="<?= $link->link_target ?>"><img width="190" src="<?php echo get_bloginfo('template_directory') .'/maya/business/img/'.strtolower($link->link_name).'.png' ?>" title="<?= $link->link_name ?>"></a>
                    </li>
                <?php endforeach; ?>                
            </ul>
            
        </div> 

    </div>
    
</div><!-- // CLIENTS -->