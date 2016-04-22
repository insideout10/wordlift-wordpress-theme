<?php
/*
Template Name: Plan Template
*/
get_header(); ?>
<div class="main-video">
      <?php
          $plan_video_image = get_field( 'plan_video_image', $plan->ID );
          $plan_video_mp4 = get_field( 'plan_video_mp4', $plan->ID );
          $plan_video_webm = get_field( 'plan_video_webm', $plan->ID );
          $plan_video_ogg = get_field( 'plan_video_ogg', $plan->ID );

          if( $plan_video_image or $plan_video_mp4 or $plan_video_webm or $plan_video_ogg ):
      ?>
          <div class="video">
              <div class="video-box">
                  <video width="1280" height="720" poster="<?php echo $plan_video_image['sizes']['1280x720']; ?>">
                      <?php if( $plan_video_mp4 ): ?><source type="video/mp4" data-src="<?php echo $plan_video_mp4; ?>"><?php endif; ?>
                      <?php if( $plan_video_webm ): ?><source type="video/webm" data-src="<?php echo $plan_video_webm; ?>"><?php endif; ?>
                      <?php if( $plan_video_ogg ): ?><source type="video/ogg" data-src="<?php echo $plan_video_ogg; ?>"><?php endif; ?>
                  </video>
              </div>
          </div>
      <?php endif; ?>

    <div class="holder-center">
            <?php if( $background_color = get_field( 'background_color' ) ): ?>
            <div class="col <?php echo $background_color ?> ">
            <?php endif; ?>

                <div class="col-hold" >

                  <div class="col-hold-plan-title">
                    <h2><?php the_title()?></h2>
                  </div>

                    <?php if( $intro = get_field( 'intro' ) ): ?>
                      <div class="box-text">
                        <p>
                          <?php echo $intro; ?>
                        </p>
                      </div>
                    <?php endif; ?>

                    <div class="col-plan-list">

                      <div class="col-details">
                        <div class="col-details-row">
                          <span>
                            6-month
                          </span>
                          <span>
                            1 free
                          </span>
                        </div>
                        <div class="col-details-row">
                          <span>
                            12-month
                          </span>
                          <span>
                            3 free
                          </span>
                        </div>
                      </div>

                      <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                      <?php endwhile; ?>



                      <?php if( $second_column_text = get_field( 'second_column_text' ) ): ?>
                        <?php echo $second_column_text ?>
                      <?php endif; ?>

                    </div>
                </div>

            </div>

    </div>
</div>
<?php get_footer(); ?>
