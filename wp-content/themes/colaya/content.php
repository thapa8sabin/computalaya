  <!-- Services -->
  <?php is_home(); ?>
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Confidentiality</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Integrity</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Accountabilty</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
      </div>
    </div>
  </section>

  <?php 
  $how_we_engage = get_posts(['post_type' => 'engages']);
  $i = 1;
  if(count($how_we_engage) > 0):?>
    <!-- About -->
    <section id="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><?php _e(get_post_type_object( 'engages' )->description);  ?> </h2>
            <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
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
                    <img class="rounded-circle img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/img/about/1.jpg" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4><?= get_post_meta($engage->ID,'phase',true); ?></h4>
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
  $prolayans = get_posts(['post_type' => 'prolayans','orderby'=>"post_title",'order'=>'ASC','numberposts'=>3]);
  $i = 1;
  if(count($prolayans) > 0):?>
    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><?php _e(get_post_type_object( 'prolayans' )->description);  ?> </h2>
            <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
          </div>
        </div>
        <div class="row">
          <?php foreach($prolayans as $prolayan): ?>
          <div class="col-sm-4">
            <div class="team-member">
              <?= $prolayan->post_content; ?>
              <h4><?= $prolayan->post_title; ?></h4>
              <p class="text-muted"><?= $prolayan->post_excerpt; ?></p>
              <ul class="list-inline social-buttons">
                <?= get_post_meta($prolayan->ID,'prolayan_team_social_link',true); ?>
              </ul>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </section>
<?php endif; ?>