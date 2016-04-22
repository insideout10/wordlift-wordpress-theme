<?php
/*
Template Name: How it works Template
*/
get_header(); ?>

    <?php
        $contents = get_field( 'contents' );
        if( !empty( $contents ) ):
    ?>
        <aside class="sidebar fixed">
            <ol class="work-list latin">
                <?php
                    while( has_sub_field( 'contents' ) ):
                        $section_name = get_sub_field( 'section_name' );
                        $section_text_in_navigation = get_sub_field( 'section_text_in_navigation' );
                        $sub_sections = get_sub_field( 'sub_sections' );
                ?>
                    <li>
                        <a href="#section-<?php echo strtolower( $section_name ); ?>" class="item anchor-link"><?php echo $section_text_in_navigation; ?></a>
                        <?php if( !empty( $sub_sections ) ): ?>
                            <ul>
                                <?php
                                    while( has_sub_field( 'sub_sections' ) ):
                                        $subsection_name = get_sub_field( 'subsection_name' );
                                        $text_in_navigation = get_sub_field( 'subsection_text_in_navigation' );
                                ?>
                                    <li>
                                        <span class="ico"><?php echo $subsection_name; ?></span>
                                        <span class="item"><?php echo $text_in_navigation; ?></span>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ol>
        </aside>

        <div class="holder-center">
            <section class="section-info style-works">
                <div class="block-info">
                    <div class="head">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <?php if( $contents_title = get_field( 'contents_title' ) ): ?><h2><?php echo $contents_title; ?></h2><?php endif; ?>
                    <div class="preview-list">
                        <ol class="work-list latin">
                            <?php
                                while( has_sub_field( 'contents' ) ):
                                    $section_name = get_sub_field( 'section_name' );
                                    $section_text_in_navigation = get_sub_field( 'section_text_in_navigation' );
                                    $sub_sections = get_sub_field( 'sub_sections' );
                            ?>
                                <li>
                                    <a href="#section-<?php echo strtolower( $section_name ); ?>" class="item anchor-link"><?php echo $section_text_in_navigation; ?></a>
                                    <?php if( !empty( $sub_sections ) ): ?>
                                        <ul>
                                            <?php
                                                while( has_sub_field( 'sub_sections' ) ):
                                                    $subsection_name = get_sub_field( 'subsection_name' );
                                                    $text_in_navigation = get_sub_field( 'subsection_text_in_navigation' );
                                            ?>
                                                <li>
                                                    <span class="ico"><?php echo $subsection_name; ?></span>
                                                    <span class="item"><?php echo $text_in_navigation; ?></span>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endwhile; ?>
                        </ol>
                    </div>

                    <ol class="work-list latin full-list">
                        <?php
                            while( has_sub_field( 'contents' ) ):
                                $section_name = get_sub_field( 'section_name' );
                                $section_text = get_sub_field( 'section_text' );
                                $section_video = get_sub_field( 'section_video' );
                                $sub_sections = get_sub_field( 'sub_sections' );
                        ?>
                            <li id="section-<?php echo strtolower( $section_name ); ?>">
                                <ul>
                                    <li>
                                        <span class="ico"><?php echo $section_name; ?></span>
                                        <p><?php echo $section_text; ?></p>
                                        <?php echo $section_video; ?>
                                    </li>
                                    <?php if( !empty( $sub_sections ) ): ?>
                                        <?php
                                            while( has_sub_field( 'sub_sections' ) ):
                                                $subsection_name = get_sub_field( 'subsection_name' );
                                                $subsection_text = get_sub_field( 'subsection_text' );
                                                $subsection_video = get_sub_field( 'subsection_video' );
                                        ?>
                                            <li>
                                                <span class="ico"><?php echo $subsection_name; ?></span>
                                                <p><?php echo $subsection_text; ?></p>
                                                <?php echo $subsection_video; ?>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </li>
                        <?php endwhile; ?>
                    </ol>
                </div>
            </section>
        </div>
    <?php endif; ?>

    <?php if( $about_plans_links = get_field( 'about_plans_links' ) ): ?>
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