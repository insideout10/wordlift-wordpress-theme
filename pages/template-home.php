<?php
/*
Template Name: Home Template
*/
get_header(); ?>

	<div class="video-global-wrap">
		<video class="video-about this-section" autoplay mute loop>
			<source src="<?php echo get_template_directory_uri(); ?>/media/about_color_1080.ogv" type="video/ogg">
			<source src="<?php echo get_template_directory_uri(); ?>/media/about_color_1080.webm" type="video/webm">
			<source src="<?php echo get_template_directory_uri(); ?>/media/about_color_1080.mp4" type="video/mp4">
		</video>

		<video class="video-blogger not-this-section" autoplay mute loop>
			<source src="<?php echo get_template_directory_uri(); ?>/media/blogger_color_1080.ogv" type="video/ogg">
			<source src="<?php echo get_template_directory_uri(); ?>/media/blogger_color_1080.webm" type="video/webm">
			<source src="<?php echo get_template_directory_uri(); ?>/media/blogger_color_1080.mp4" type="video/mp4">
		</video>

		<video class="video-editorial not-this-section" autoplay mute loop>
			<source src="<?php echo get_template_directory_uri(); ?>/media/editorial_color_1080.ogv" type="video/ogg">
			<source src="<?php echo get_template_directory_uri(); ?>/media/editorial_color_1080.webm" type="video/webm">
			<source src="<?php echo get_template_directory_uri(); ?>/media/editorial_color_1080.mp4" type="video/mp4">
		</video>

		<video class="video-enterprise not-this-section" autoplay mute loop>
			<source src="<?php echo get_template_directory_uri(); ?>/media/enterprise_color_1080.ogv" type="video/ogg">
			<source src="<?php echo get_template_directory_uri(); ?>/media/enterprise_color_1080.webm" type="video/webm">
			<source src="<?php echo get_template_directory_uri(); ?>/media/enterprise_color_1080.mp4" type="video/mp4">
		</video>
	</div>

	<?php while ( have_posts() ) : the_post(); ?>
        <div id="home" class="style-white top-section">

    		<div class="container style">
                <?php the_content(); ?>
                <?php if( $about_plans_links = get_field( 'about_plans_links' ) ): ?>
                    <ul class="icon-list">
                        <?php
                            while( has_sub_field( 'about_plans_links' ) ):
                                $link = get_sub_field( 'link' );
                                $text = get_sub_field( 'text' );
                                $icon = get_sub_field( 'icon' );
                        ?>
                            <li><a href="#<?php echo strtolower( str_replace( ' ', '-', $text ) ); ?>" class="anchor-link-i"><i class="icon-<?php echo $icon; ?>"></i><span><?php echo $text; ?></span></a></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
	<?php endwhile; ?>

    <div id="about" class="main-video">
        <?php if( $about_section = get_field( 'about_section' ) ): ?>
            <div class="holder-center">
                <section class="section-info">
                    <div class="block-info">
                        <?php echo apply_filters( 'get_the_content', $about_section->post_content ); ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>
    </div>

    <?php if( $how_it_works = get_field( 'how_it_works' ) ): ?>
        <div id="how-it-works" class="two-columns main-video">

            <?php
                $contents = get_field( 'contents', $how_it_works );

                if( !empty( $contents ) ):
            ?>
                <aside class="sidebar fixed">
                    <ol class="work-list latin">
                        <?php
                            while( has_sub_field( 'contents', $how_it_works ) ):
                                $section_name = get_sub_field( 'section_name' );
                                $section_text_in_navigation = get_sub_field( 'section_text_in_navigation' );
                                $sub_sections = get_sub_field( 'sub_sections' );
                        ?>
                            <li>
                                <a href="#section-<?php echo strtolower( $section_name ); ?>" class="item anchor-link"><?php echo $section_text_in_navigation; ?></a>
                                <?php if( !empty( $sub_sections ) ): ?>
                                    <ul>
                                        <?php
                                            while( has_sub_field( 'sub_sections', $how_it_works ) ):
                                                $subsection_name = get_sub_field( 'subsection_name' );
                                                $text_in_navigation = get_sub_field( 'subsection_text_in_navigation' );
                                        ?>
                                            <li>
                                                <span class="ico"><?php echo $subsection_name; ?></span>
                                                <a href="#section-<?php echo strtolower( $subsection_name ); ?>" class="item anchor-link"><?php echo $text_in_navigation; ?></a>
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
                                <h1><?php echo get_the_title( $how_it_works ); ?></h1>
                            </div>
                            <div class="mobile-visible">
                                <?php if( $contents_title = get_field( 'contents_title', $how_it_works ) ): ?><h2><?php echo $contents_title; ?></h2><?php endif; ?>
                                <div class="preview-list">
                                    <ol class="work-list latin">
                                        <?php
                                            while( has_sub_field( 'contents', $how_it_works ) ):
                                                $section_name = get_sub_field( 'section_name' );
                                                $section_text_in_navigation = get_sub_field( 'section_text_in_navigation' );
                                                $sub_sections = get_sub_field( 'sub_sections' );
                                        ?>
                                            <li>
                                                <a href="#section-<?php echo strtolower( $section_name ); ?>" class="item anchor-link"><?php echo $section_text_in_navigation; ?></a>
                                                <?php if( !empty( $sub_sections ) ): ?>
                                                    <ul>
                                                        <?php
                                                            while( has_sub_field( 'sub_sections', $how_it_works ) ):
                                                                $subsection_name = get_sub_field( 'subsection_name' );
                                                        				$subsection_text = get_sub_field( 'subsection_text' );
                                                                $subsection_name = get_sub_field( 'subsection_name' );
                                                                $text_in_navigation = get_sub_field( 'subsection_text_in_navigation' );
                                                        ?>
                                                            <li>
                                                                <span class="ico"><?php echo $subsection_name; ?></span>
                                                                <a class="item anchor-link" href="#section-<?php echo strtolower( $subsection_name ); ?>"><?php echo $text_in_navigation; ?></a>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </li>
                                        <?php endwhile; ?>
                                    </ol>
                                </div>
                            </div>
                            <ol class="work-list latin full-list">
                                <?php
                                    while( has_sub_field( 'contents', $how_it_works ) ):
                                        $section_name = get_sub_field( 'section_name' );
                                        $section_text = get_sub_field( 'section_text' );
                                        $section_text_in_navigation = get_sub_field( 'section_text_in_navigation' );

                                        $section_tag_line = get_sub_field( 'section_tag_line' );
                                        $section_text_below_tag_line = get_sub_field( 'section_text_below_tag_line' );

                                        $section_video = get_sub_field( 'section_video' );
                                        $sub_sections = get_sub_field( 'sub_sections' );
                                ?>
                                    <li id="section-<?php echo strtolower( $section_name ); ?>">
                                        <?php if( $section_tag_line ): ?><span class="title"><span><?php echo $section_tag_line; ?></span></span><?php endif; ?>
                                        <?php if( $section_text_below_tag_line ): ?><div class="box-text"><?php echo $section_text_below_tag_line; ?></div><?php endif; ?>

                                        <ul>
                                            <li>
                                                <span class="ico"><?php echo $section_name; ?></span>
																								<p><?php echo $section_text; ?> </p>

                                                <?php if( $section_video_preview_image = get_sub_field( 'section_video_preview_image' ) ): ?>
                                                    <a href="#popup-<?php echo strtolower( $section_name ); ?>" class="small-video lightbox">
                                                        <img src="<?php echo $section_video_preview_image['sizes']['353x199']; ?>" alt="<?php echo $section_name; ?>">
                                                    </a>
                                                <?php endif; ?>
                                            </li>
                                            <?php if( !empty( $sub_sections ) ): ?>
                                                <?php
                                                    while( has_sub_field( 'sub_sections', $how_it_works ) ):
                                                        $subsection_name = get_sub_field( 'subsection_name' );
                                                        $subsection_text = get_sub_field( 'subsection_text' );
                                                        $subsection_video = get_sub_field( 'subsection_video' );
                                                ?>
                                                    <li id="section-<?php echo strtolower( $subsection_name ); ?>">
                                                        <span class="ico"><?php echo $subsection_name; ?></span>
																												<div class="section-content-wrap">
																													<p>
																														<?php echo $subsection_text; ?>
																													</p>
																													<?php if( $subsection_video_preview_image = get_sub_field( 'subsection_video_preview_image' ) ): ?>
																														<a href="#popup-<?php echo strtolower( $subsection_name ); ?>" class="small-video lightbox">
																															<img src="<?php echo $subsection_video_preview_image['sizes']['353x199']; ?>" alt="<?php echo $subsection_name; ?>">
																															<span class="play-btn-wrap">
																																<span class="play-btn"></span>
																															</span>
																														</a>
																													<?php endif; ?>
																												</div>
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

            <?php if( $about_plans_links = get_field( 'about_plans_links', $how_it_works ) ): ?>
                <div class="custom-block two">
                    <ul>
                        <?php
                            while( has_sub_field( 'about_plans_links', $how_it_works ) ):
                                $link = get_sub_field( 'link' );
                                $text = get_sub_field( 'text' );
                                $icon = get_sub_field( 'icon' );
                        ?>
                            <li><a href="#<?php echo strtolower( str_replace( ' ', '-', $text ) ); ?>" class="anchor-link-i"><span class="icon icon-<?php echo $icon; ?>"></span><span class="txt"><?php echo $text; ?></span></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
        <div class="popup-holder">
            <?php
                while( has_sub_field( 'contents', $how_it_works ) ):
                    $section_name = get_sub_field( 'section_name' );
                    $section_video = get_sub_field( 'section_video' );
                    $sub_sections = get_sub_field( 'sub_sections' );
            ?>

                <div id="popup-<?php echo strtolower( $section_name ); ?>" class="lightbox-hold jw-video">
                    <a href="#" class="close icon-close"></a>
                    <?php echo $section_video; ?>
                </div>

                <?php if( !empty( $sub_sections ) ): ?>
                    <?php
                        while( has_sub_field( 'sub_sections', $how_it_works ) ):
                            $subsection_name = get_sub_field( 'subsection_name' );
                            $subsection_video = get_sub_field( 'subsection_video' );
                    ?>
                        <div id="popup-<?php echo strtolower( $subsection_name ); ?>" class="lightbox-hold jw-video">
                            <a href="#" class="close icon-close"></a>
                            <?php echo $subsection_video; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            <?php endwhile; ?>
        </div>

    <?php endif; ?>

    <?php if( $plans = get_field( 'plans' ) ): ?>
        <?php foreach ($plans as $plan): ?>

                <?php
                    $parent_id = wp_get_post_parent_id( $plan->ID );
                    $about_plans_links = get_field( 'about_plans_links', $plan->ID );
                ?>

                <div id="anchor-section-<?php echo strtolower( str_replace( ' ', '-', get_the_title( $plan->ID ) ) ); ?>" class="holder-center">

                    <section class="section-info <?php if( $parent_id ): ?>style-two<?php endif; ?>">

											<!--DISPLAY LIST OF PLANS UNDER EACH SECTION-->
											<?php if( !empty( $about_plans_links ) ): ?>
												 <div class="custom-block">
															<ul>
																	<?php
																			while( has_sub_field( 'about_plans_links', $plan->ID ) ):
																					$link = get_sub_field( 'link' );
																					$text = get_sub_field( 'text' );
																					$icon = get_sub_field( 'icon' );
																	?>
																			<li><a href="#<?php echo strtolower( str_replace( ' ', '-', $text ) ); ?>" class="anchor-link-i"><span class="icon icon-<?php echo $icon; ?>"></span><span class="txt"><?php echo $text; ?></span></a></li>
																	<?php endwhile; ?>
															</ul>
													</div>
											<?php endif; ?>

                        <div class="block-info">
                            <?php if( $parent_id ): ?>
															<div class="head">
																<h1>
																	<?php echo get_the_title( $plan->ID ); ?>
																</h1>
															</div>
														<?php endif; ?>
                            <?php echo apply_filters( 'get_the_content', $plan->post_content ); ?>
                        </div>
                        <?php if( $parent_id ): ?>

                        <?php endif; ?>
                    </section>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if( $planandprices = get_field( 'planandprices' ) ): ?>
        <div id="plan-and-price" class="main-video">
            <div class="plan-wrap">
                <div class="holder-center">
                    <div class="head">
                        <h1><?php echo get_the_title( $planandprices ); ?></h1>
                        <?php if( $subtitle = get_field( 'subtitle', $planandprices ) ): ?><span><?php echo $subtitle; ?></span><?php endif; ?>
                    </div>

										<div class="plan-table-wrapper">

											<!-- PLAN TABLET VERSION -->
											<div class="plan-table-tablet">

												<!-- BLOGGER ACCORDION RESPONSIVE -->
												<input type="checkbox" class="plan-lead" id="plan-blogger"></input>
												<label for="plan-blogger" id="plan-blogger">
														blogger
												</label>

												<div class="plan-details-blogger">

													<div class="col-hold">
			                      <div class="box-text">
			                        <p>
																An easy-to-use plug-in to create new access points for your articles and attract new readers.
			                        </p>
			                      </div>

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

																<ul class="plan-list">
																  <li>Support the writing process with trustworthy and contextual facts</li>
																  <li>Enrich content with links, images and interactive visualizations</li>
																  <li>Automatically add schema.org markup, allowing search engines to properly index and display your pages</li>
																  <li>Engage readers with relevant content recommendations</li>
																  <li>Publish metadata to share, sell and distribute content</li>
																  <li>NO CONTRACT</li>
																  <li>14 LANGUAGES supported</li>
																  <li>UNLIMITED dataset storage</li>
																  <li>UNLIMITED processing capacity</li>
																  <li>AWESOME SUPPORT: tech support and help desk</li>
																  <li>Semantic ANALYTICS and dynamic PUBLISHING</li>
																  <li>OPEN SOURCE NLP and SEMANTIC processing</li>
																  <li>DATA OWNERSHIP</li>
																  <li>NO VENDOR LOCK-IN</li>
																</ul>

																<div class="btn-hold">
																  <a href="#" class="btn">Contact us</a>
																</div>

				                      </div>
				                    </div>
					                </div>
												</div>

												<!-- EDITORIAL ACCORDION RESPONSIVE -->
												<input type="checkbox" class="plan-lead" id="plan-editorial"></input>
												<label for="plan-editorial" id="plan-editorial">
													editorial team
												</label>
												<div class="plan-details-editorial">

													<div class="col-hold">
														<div class="box-text">
															<p>
																WordLift organizes content around the topics defined by the editorial plan, focusing on what matters to your audience.
															</p>
														</div>

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

																<ul class="plan-list">
																  <li>Support the writing process with trustworthy and contextual facts</li>
																  <li>Enrich content with links, images and interactive visualizations</li>
																  <li>Automatically add schema.org markup, allowing search engines to properly index and display your pages</li>
																  <li>Engage readers with relevant content recommendations</li>
																  <li>Publish metadata to share, sell and distribute content</li>
																  <li>1 month FREE with 6-month package</li>
																  <li>3 months FREE with 12-month package</li>
																  <li>NO CONTRACT</li>
																  <li>14 LANGUAGES supported</li>
																  <li>UNLIMITED dataset storage</li>
																  <li>UNLIMITED processing capacity</li>
																  <li>AWESOME SUPPORT: tech support and help desk</li>
																  <li>Semantic ANALYTICS and dynamic PUBLISHING</li>
																  <li>OPEN SOURCE NLP and SEMANTIC processing</li>
																  <li>DATA OWNERSHIP</li>
																  <li>NO VENDOR LOCK-IN</li>
																</ul>

																<div class="btn-hold">
																  <a href="#" class="btn">Contact us</a>
																</div>

															</div>
														</div>
													</div>

												</div>

												<!-- ENTERPRISE ACCORDION RESPONSIVE -->
												<input type="checkbox" class="plan-lead" id="plan-enterprise"></input>
												<label for="plan-enterprise" id="plan-enterprise">
													enterprise
												</label>
												<div class="plan-details-enterprise">

													<div class="col-hold">
														<div class="box-text">
															<p>
																WordLift helps you reach your customers, optimizing your content marketing from the start.
															</p>
														</div>

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

																<ul class="plan-list">
																  <li>Support the development and execution of integrated marketing communication plans</li>
																  <li>Produce trustworthy, relevant content, to find new customers</li>
																  <li>Automate custom offerings and personalized customer service</li>
																  <li>Optimize content for search engines and personal intelligent agents (e.g. Google Now, Apple Siri)</li>
																  <li>Build your own industry “wikipedia” and become the center node of your network</li>
																  <li>1 month FREE with 6-month package</li>
																  <li>3 months FREE with 12-month package</li>
																  <li>NO CONTRACT</li>
																  <li>14 LANGUAGES supported</li>
																  <li>UNLIMITED dataset storage</li>
																  <li>UNLIMITED processing capacity</li>
																  <li>AWESOME SUPPORT: tech support, live chat and custom SLA hot line</li>
																  <li>Semantic ANALYTICS, SEARCH and dynamic PUBLISHING</li>
																  <li>OPEN SOURCE NLP and SEMANTIC processing</li>
																  <li>DATA OWNERSHIP</li>
																  <li>NO VENDOR LOCK-IN</li>
																  <li>CUSTOM industry DATASETS</li>
																  <li>MULTI-SITE compatible</li>
																  <li>SPARQL end- point</li>
																  <li>CUSTOM solutions</li>
																</ul>

																<div class="btn-hold">
																	<a href="#" class="btn">Contact us</a>
																</div>

															</div>
														</div>
													</div>

												</div>
											</div>
				              <div class="plan-table">

				                <div class="plan-table-col-init">
				                  <div class="col-title">
														<h3>
															Packages
														</h3>
				                  </div>
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
				                  <div class="col-content">
				                  	<ul>
				                  		<li>
				                  			14 languages supported
				                  		</li>
				                  		<li>
																unlimited dataset storage
				                  		</li>
				                  		<li>
																unlimited processing capacity
				                  		</li>
				                  		<li>
																Awesome support
				                  		</li>
				                  		<li>
																Semantic analytics
				                  		</li>
				                  		<li>
																Semantic processing
				                  		</li>
				                  		<li>
																Data ownership
				                  		</li>
				                  		<li>
																No vendor lock-in
				                  		</li>
				                  		<li>
																custom industry dataset
				                  		</li>
				                  		<li>
																multi-site compatible
				                  		</li>
				                  		<li>
																SPARQL end-point
				                  		</li>
				                  	</ul>
				                  </div>
				                </div>

				                <div class="plan-table-col-blog">
				                  <div class="col-title">
														<h3>
				                  		Blogger
														</h3>
				                  </div>
				                  <div class="col-details">
														<div class="col-details-wrap">

															<div class="col-details-top">
																<h3>20</h3>
																<div class="col-details-top-right">
																	<h6>€</h6>
																	<h6>/month</h6>
																</div>
															</div>
															<div class="col-details-bottom">
																<h3>
																	No contract
																</h3>
															</div>
														</div>
				                  </div>
				                  <div class="col-content">
				                  	<ul>
				                  		<li>
				                  			<i class="icon-circle"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-circle"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-circle"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-circle"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-circle"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-circle"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-circle"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-circle"></i>
				                  		</li>
				                  		<li></li>
				                  		<li></li>
				                  		<li></li>
				                  	</ul>
														<button type="button" name="button">Contact us</button>
				                  </div>
				                </div>

				                <div class="plan-table-col-edit">
				                  <div class="col-title">
														<h3>
				                  		Editorial Team
														</h3>
				                  </div>

				                  <div class="col-details">

														<div class="col-details-wrap">
															<h3>
																custom solution <br /> ＆ <br /> volume discount
															</h3>
														</div>

				                  </div>

				                  <div class="col-content">
				                  	<ul>
															<li>
																<i class="icon-square"></i>
															</li>
				                  		<li>
				                  			<i class="icon-square"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-square"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-square"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-square"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-square"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-square"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-square"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-square"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-square"></i>
				                  		</li>
				                  		<li>
				                  			<i class="icon-square"></i>
				                  		</li>
				                  	</ul>
														<button type="button" name="button">Contact us</button>
				                  </div>
				                </div>

				                <div class="plan-table-col-ent">
													<div class="col-title">
														<h3>
															Enterprise
														</h3>
													</div>
													<div class="col-details">

														<div class="col-details-wrap">
															<h3>
																custom solution <br /> ＆ <br /> volume discount
															</h3>
														</div>

													</div>

													<div class="col-content">
														<ul>
															<li>
																<i class="icon-hexagon-two"></i>
															</li>
															<li>
																<i class="icon-hexagon-two"></i>
															</li>
															<li>
																<i class="icon-hexagon-two"></i>
															</li>
															<li>
																<i class="icon-hexagon-two"></i>
															</li>
															<li>
																<i class="icon-hexagon-two"></i>
															</li>
															<li>
																<i class="icon-hexagon-two"></i>
															</li>
															<li>
																<i class="icon-hexagon-two"></i>
															</li>
															<li>
																<i class="icon-hexagon-two"></i>
															</li>
															<li>
																<i class="icon-hexagon-two"></i>
															</li>
															<li>
																<i class="icon-hexagon-two"></i>
															</li>
															<li>
																<i class="icon-hexagon-two"></i>
															</li>
														</ul>
														<button type="button" name="button">Contact us</button>
													</div>
				                </div>

				              </div>
				            </div>

										<!-- DEFAULT PLAN AND PRICE TABLE  -->
                    <!-- <?php
                        $plans = get_field( 'plans', $planandprices );
                        if( !empty( $plans ) ):
                    ?>
                        <div class="plan-holder">
                            <?php
                                while( has_sub_field( 'plans', $planandprices ) ):
                                    $color = get_sub_field( 'color' );
                                    $name = get_sub_field( 'name' );
                                    $features = get_sub_field( 'features' );
                                    $button_text = get_sub_field( 'button_text' );
                                    $button_link = get_sub_field( 'button_link' );
                            ?>
                                <div class="box <?php echo $color; ?>">
                                    <h2><?php echo $name; ?></h2>
                                    <?php echo $features; ?>
                                    <?php if( $button_text and $button_link ): ?>
                                        <a href="#complete-and-upgrade" class="btn lightbox">
                                            <?php echo $button_text; ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?> -->
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>
