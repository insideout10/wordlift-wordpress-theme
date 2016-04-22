<?php get_header(); ?>

    <div class="error-block">
        <div class="holder">
            <a class="btn-close icon-close" href="<?php echo home_url(); ?>"></a>
            <p><?php _e( 'Oops! Page not found.', 'wordlift' ); ?> <span class="small"><?php _e( 'error 404', 'wordlift' ); ?></span></p>
        </div>
    </div>

<?php get_footer(); ?>