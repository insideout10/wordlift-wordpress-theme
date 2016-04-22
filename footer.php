        <?php if( !is_404() ): ?>
                </main>
                <footer id="footer">
                    <div class="container">
                        <div class="two-cols">
                            <div class="col-wide">

                                <?php if( has_nav_menu( 'footer' ) )
                                    wp_nav_menu( array(
                                        'container' => false,
                                        'theme_location' => 'footer',
                                        'menu_id'        => 'nav-footer',
                                        'menu_class'     => 'nav-footer',
                                        'items_wrap'     => '<div class="col"><ul id="%1$s" class="%2$s">%3$s</ul></div>'
                                        )
                                    ); ?>

                                <?php
                                    $products_footer = get_field( 'products_footer', 'option' );
                                    if( !empty( $products_footer ) ):
                                ?>
                                    <div class="col">
                                        <ul class="custom">
                                            <?php
                                                while( has_sub_field( 'products_footer', 'option' ) ):
                                                    $link = get_sub_field( 'link' );
                                                    $text = get_sub_field( 'text' );
                                                    $icon = get_sub_field( 'icon' );
                                            ?>
                                                <li><a href="<?php echo $link; ?>"><span class="icon icon-<?php echo $icon; ?>"></span><span class="txt"><?php echo $text; ?></span></a></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <?php
                                    $footer_contact_title =  get_field( 'footer_contact_title', 'option' );
                                    $footer_contact =  get_field( 'footer_contact', 'option' );

                                    if( $footer_contact_title or $footer_contact ):
                                ?>
                                    <div class="col">
                                        <?php if( $footer_contact_title ): ?><span class="title-col"><?php echo $footer_contact_title; ?></span><?php endif; ?>
                                        <?php if( !empty( $footer_contact ) ): ?>
                                            <ul class="contact">
                                                <?php
                                                    while( has_sub_field( 'footer_contact', 'option' ) ):
                                                        $text = get_sub_field( 'text' );
                                                        $link = get_sub_field( 'link' );
                                                ?>
                                                    <li><a href="<?php echo $link; ?>"><?php echo $text; ?></a></li>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                            <div class="col-wide">
                                <div class="hold-col">
                                    <?php
                                        if( get_field( 'footer_social_buttons', 'option' ) ):
                                    ?>
                                        <div class="row">
                                            <ul class="social-network">
                                                <?php
                                                    while( has_sub_field( 'footer_social_buttons', 'option' ) ):
                                                        $name = get_sub_field( 'name' );
                                                        $link = get_sub_field( 'link' );
                                                ?>
                                                    <li><a href="<?php echo $link; ?>" target="_blank"><span class="icon icon-<?php echo strtolower( $name ); ?>"></span></a></li>
                                                <?php endwhile; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>

                                    <?php if( $newsletter_form = get_field( 'newsletter_form', 'option' ) ): ?>
                                        <div class="row">
                                            <div class="form-footer">
                                                <?php echo do_shortcode( $newsletter_form ); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <?php if( is_page_template('pages/template-home.php') ): ?><a class="back-to-top anchor-link-i" href="#wrapper"><i class="icon-arrow-up-outline"></i></a><?php endif; ?>
                <?php get_template_part( 'blocks/complete-and-upgrade' ); ?>
            </div>
        <?php endif; ?>
        <?php wp_footer(); ?>
    </body>
</html>