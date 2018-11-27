<?php
$teams = get_posts(['post_type'=>'teams']) ;
$team_metal = get_post_type_object('teams');
if ( count( $teams ) > 0  ) : 
?>
    
<div id="team" class="section">
    
    <div class="header-section padd-y-75">
        
        <div class="title-section padd-x-25 nd-clr transit-words"><?php echo $team_metal->label; ?></div>
            <div class="subtitle-section padd-x-25 nd-clr"><?= $team_metal->description; ?></div>
    </div>
        
    <div class="team-content bg-gr1-clr">
    
        <div class="team-list padd-y-25">
           
            <div class="boxed">
                <?php foreach ($teams as $team): the_post(); ?>
                    
                <div class="col-1-4">
                    <div class="team-box marg-25 transit-left">
                    
                        <div class="team-thumb" style="background-image: url('<?= get_the_post_thumbnail_url($team) ?>');">
                        
                            <div class="team-caption transit">
                                <div class="team-name marg-top-25 fs-clr"><?= $team->post_title; ?></div>
                                <div class="line-center brd-gr2-clr"></div>
                                <?= $team->post_content; ?>
                            </div>
                            
                        </div>
                        
                        <div class="team-detail padd-x-25 fs-clr brd-fs-clr">
                            <span class="team-role"><?= get_post_meta($team->ID,'team_positions',true) ?></span>
                            <span class="team-contact"><?= get_post_meta($team->ID,'team_social_link',true) ?></span>
                        </div>
                        
                    </div>
                </div>
                <?php endforeach; ?>
                                                
                <div class="clear"></div>
            
            </div>
            
        </div>
                    
    </div>

</div>
<!-- // TEAM -->
<?php endif; ?>