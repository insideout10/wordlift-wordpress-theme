<?php get_header(); ?>

    <div class="container">
        <div id="content">
            <article class="post">
                <h1><?php the_title(); ?></h1>

                <?php if( $subtitle = get_field( 'subtitle' ) ): ?><h2><?php echo $subtitle; ?></h2><?php endif; ?>

                <div class="publish-post">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-icon.png" alt="image description">
                    <span><?php the_author() ?></span> <time datetime="<?php the_time( 'Y-m-d' ) ?>"><?php the_time( 'j F Y' ) ?></time>
                </div>

                <?php if ( has_post_thumbnail()) : ?>
                    <?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '960x9999' ); ?>
                    <div class="img"><img src="<?php echo $image_attributes[0]; ?>" alt="<?php the_title(); ?>"></div>
                <?php endif; ?>

                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>

                <?php if( has_tag() ): ?>
                    <div class="tag-holder">
                        <strong class="title"><?php _e( 'tags', 'wordlift' ); ?></strong>
                        <ul class="tags">
                            <?php the_tags( '<li>', '</li><li>', '</li>' ); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php the_field( 'share_this', 'option' ); ?>
            </article>
        </div>
    </div>

<?php get_footer(); ?>