<?php
/*
Template Name: Contact Template
*/
get_header(); ?>

    <div class="holder-center">
        <section class="section-info style-two">
            <div class="block-info">
                <div class="hold-block">
                    <div class="head">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php
                        $links = get_field( 'links' );
                        if( !empty( $links ) ):
                    ?>
                        <ul class="mail-links">
                            <?php
                                while( has_sub_field( 'links' ) ):
                                    $text = get_sub_field( 'text' );
                                    $link = get_sub_field( 'link' );
                            ?>
                                <li><a href="<?php echo $link; ?>"><?php echo $text; ?></a></li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
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