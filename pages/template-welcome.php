<?php
/*
Template Name: Welcome Template
*/
get_header(); ?>

    <div class="holder-center">
        <section class="section-info welcome">
            <div class="block-info form-box">
                <div class="head">
                    <h1><?php the_title(); ?></h1>
                    <?php if( $subtitle = get_field( 'subtitle' ) ): ?><p><?php echo $subtitle; ?></p><?php endif; ?>
                </div>
            	<?php while ( have_posts() ) : the_post(); ?>
            		<?php the_content(); ?>
            	<?php endwhile; ?>
            </div>
        </section>
    </div>

<?php get_footer(); ?>