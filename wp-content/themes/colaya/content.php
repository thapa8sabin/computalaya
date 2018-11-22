  <!-- Services -->
  <?php is_home(); ?>
  <?php 
  $services = get_posts(['post_type' => 'services']);
  //print_r(get_post_type_object( 'services' ));die;
  $i = 1;
  if(count($services) > 0): ?>
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php _e(get_post_type_object( 'services' )->label);  ?></h2>
          <h3 class="section-subheading text-muted"><?php _e(get_post_type_object( 'services' )->description);  ?></h3>
        </div>
      </div>
      <div class="row text-center">
      <?php foreach($services as $service): ?>
        <div class="col-md-4">
          <?= get_post_meta($service->ID,'image_link',true); ?>
          <h4 class="service-heading"><?php _e($service->post_title); ?></h4>
          <?php echo _e($service->post_content); ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php
  endif; 
  
  $how_we_engage = get_posts(['post_type' => 'timeline']);
  $i = 1;
  if(count($how_we_engage) > 0): ?>
    <!-- About -->
    <section id="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><?php _e(get_post_type_object( 'timeline' )->description);  ?> </h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <?php foreach($how_we_engage as $engage): 
                $css = ($i%2 == 0) ? 'class="timeline-inverted" ' : "";
                $i++;
                ?>
                <li <?= $css ?> >
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="<?php echo get_bloginfo('template_directory').get_post_meta($engage->ID,'image_link',true); ?>" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4><?= get_post_meta($engage->ID,'year',true); ?></h4>
                      <h4 class="subheading"><?= $engage->post_title; ?></h4>
                    </div>
                    <div class="timeline-body">
                      <?= $engage->post_content ?>
                    </div>
                  </div>
                </li>
              <?php endforeach; ?>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>

 <?php 
  $prolayans = get_posts(['post_type' => 'teams','orderby'=>"post_title",'order'=>'ASC','numberposts'=>3]);
  $i = 1;
  if(count($prolayans) > 0):?>
    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><?php _e(get_post_type_object( 'teams' )->description);  ?> </h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <?php foreach($prolayans as $prolayan): ?>
          <div class="col-sm-4">
            <div class="team-member">
              <img src="<?= get_post_meta($prolayan->ID, 'image_link',true) ?>" width="225" height="225" class="alignnone size-medium" />
              <h4><?= $prolayan->post_title; ?></h4>
              <p class="text-muted"><?= $prolayan->post_excerpt; ?></p>
              
              <ul class="list-inline social-buttons">
                <?= get_post_meta($prolayan->ID,'team_social_link',true); ?>
              </ul>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </section>
<?php endif; ?>