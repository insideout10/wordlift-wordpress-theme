<?php
/*
Template Name: About Template
*/
get_header(); ?>

<?php
    $parent_id = wp_get_post_parent_id( get_the_ID() );
    $about_plans_links = get_field( 'about_plans_links' );
?>

<div class="holder-center">
    <section class="section-info <?php if( $parent_id ): ?>style-two<?php endif; ?>">
        <div class="block-info">
            <?php if( $parent_id ): ?><div class="head"><h1><?php the_title(); ?></h1></div><?php endif; ?>

            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
        <?php if( $parent_id ): ?>
            <?php if( !empty( $about_plans_links ) ): ?>
                <div class="custom-block">
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
        <?php endif; ?>
    </section>
</div>

<?php if( !empty( $about_plans_links ) and empty( $parent_id ) ): ?>
    <div class="block-icons">
        <div class="holder-center">
            <ul class="icon-list">
                <?php
                    while( has_sub_field( 'about_plans_links' ) ):
                        $link = get_sub_field( 'link' );
                        $text = get_sub_field( 'text' );
                        $icon = get_sub_field( 'icon' );
                ?>
                    <li><a href="<?php echo $link; ?>"><i class="icon-<?php echo $icon; ?>"></i><span><?php echo $text; ?></span></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>