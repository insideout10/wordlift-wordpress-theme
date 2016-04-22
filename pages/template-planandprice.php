<?php
/*
Template Name: Plan&Price Template
*/
get_header(); ?>

    <div class="plan-wrap">
        <div class="holder-center">
            <div class="head">
                <h1><?php the_title(); ?></h1>
                <?php if( $subtitle = get_field( 'subtitle' ) ): ?><span><?php echo $subtitle; ?></span><?php endif; ?>
            </div>
            <?php
                $plans = get_field( 'plans' );
                if( !empty( $plans ) ):
            ?>
                <div class="plan-holder">
                    <?php
                        while( has_sub_field( 'plans' ) ):
                            $color = get_sub_field( 'color' );
                            $name = get_sub_field( 'name' );
                            $features = get_sub_field( 'features' );
                            $button_text = get_sub_field( 'button_text' );
                            $button_link = get_sub_field( 'button_link' );
                    ?>
                        <div class="box <?php echo $color; ?>">
                            <h2><?php echo $name; ?></h2>
                            <?php echo $features; ?>
                            <?php if( $button_text and $button_link ): ?><a href="<?php echo $button_link; ?>" class="btn"><?php echo $button_text; ?></a><?php ?><?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>