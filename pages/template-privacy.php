<?php
/*
Template Name: Privacy Template
*/
get_header(); ?>

  <div class="video-plan-wrap">
    <div class="video-plan-filter">
      <!-- DISPLAYS A FILTER OVER THE VIDEOS -->
    </div>
    <video class="video-about" autoplay mute loop>
      <source src="<?php echo get_template_directory_uri(); ?>/media/about_color_720.ogv" type="video/ogg">
      <source src="<?php echo get_template_directory_uri(); ?>/media/about_color_720.webm" type="video/webm">
      <source src="<?php echo get_template_directory_uri(); ?>/media/about_color_720.mp4" type="video/mp4">
    </video>
  </div>

    <div class="holder-center">
        <section class="section-info style-privacy">
            <div class="block-info">
                <div class="head"><h1><?php the_title(); ?></h1></div>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </section>
    </div>

    <?php
        $about_plans_links = get_field( 'about_plans_links' );
        if( !empty( $about_plans_links ) ):
    ?>
        <div class="custom-block two">
            <ul>
                <?php
                    while( has_sub_field( 'about_plans_links' ) ):
                        $link = get_sub_field( 'link' );
                        $text = get_sub_field( 'text' );
                        $icon = get_sub_field( 'icon' );
                ?>
                    <li><a href="<?php echo $link; ?>"><span class="icon icon-<?php echo $icon; ?>"></span><span class="txt"><?php echo $text; ?></span></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>
