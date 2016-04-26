<?php
/*
Template Name: Plan Template
*/
get_header(); ?>
<div class="main-video">

  <div class="video-plan-wrap">
    <div class="video-plan-filter">
      <!-- DISPLAYS A FILTER OVER THE VIDEOS -->
    </div>
    <video class="video-<?php echo strtolower( str_replace( ' ', '-', get_the_title( $plan->ID ) ) ); ?>" autoplay mute loop>
      <source src="<?php echo get_template_directory_uri(); ?>/media/<?php echo strtolower( str_replace( ' ', '-', get_the_title( $plan->ID ) ) ); ?>_color_720.ogv" type="video/ogg">
      <source src="<?php echo get_template_directory_uri(); ?>/media/<?php echo strtolower( str_replace( ' ', '-', get_the_title( $plan->ID ) ) ); ?>_color_720.webm" type="video/webm">
      <source src="<?php echo get_template_directory_uri(); ?>/media/<?php echo strtolower( str_replace( ' ', '-', get_the_title( $plan->ID ) ) ); ?>_color_720.mp4" type="video/mp4">
    </video>
  </div>

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
