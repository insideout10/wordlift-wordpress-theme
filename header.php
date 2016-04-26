<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript">
			var pathInfo = {
				base: '<?php echo get_template_directory_uri(); ?>/',
				css: 'css/',
				js: 'js/',
				swf: 'swf/',
			}
		</script>
		<?php wp_head(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/vendors/waypoints/lib/noframework.waypoints.js" charset="utf-8"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/video-controller.js" charset="utf-8"></script>
	</head>
	<body <?php body_class(); ?> <?php if( is_404() ): ?>style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-page.jpg);"<?php endif; ?>>
		<?php if( !is_404() ): ?>
			<div id="wrapper" <?php if( is_page_template('pages/template-home.php') ): ?>class="home"<?php endif; ?>>
			    <header id="header">
				    <div class="header-holder">
				        <div class="col">
				        	<?php if( $logo = get_field( 'logo', 'option' ) ): ?>
										<div class="logo">
											<a href="<?php echo home_url(); ?>">
												<img src="<?php echo $logo['url']; ?>" alt="<?php bloginfo( 'name' ); ?>">
												<span>
													<strong>Word</strong>Lift
												</span>
											</a>
										</div>
									<?php endif; ?>
				        	<?php
				        		$link_near_logo = get_field( 'link_near_logo', 'option' );
				        		$link_text_near_logo =  get_field( 'link_text_near_logo', 'option' );

				        		if( $link_near_logo and $link_text_near_logo ):
				        	?>
				        		<a href="<?php echo $link_near_logo; ?>" class="semantic"><?php echo $link_text_near_logo; ?></a>
				        	<?php endif; ?>
				        </div>
				    </div>
				    <?php if( has_nav_menu( 'primary' ) )
						wp_nav_menu( array(
							'container' => false,
							'theme_location' => 'primary',
							'menu_id'        => 'header-nav',
							'menu_class'     => 'header-nav',
							'items_wrap'     => '<nav id="nav"><a href="#" class="nav-opener"><span></span></a><div class="drop"><ul id="%1$s" class="%2$s">%3$s</ul></div></nav>',
							'walker'         => new Custom_Walker_Nav_Menu
							)
						); ?>
			    </header>
			    <?php
			    	$background_color = get_field( 'background_color' );
			    	if( is_archive() or is_home() or is_search() ){
			    		$background_color = 'style-white';
			    	}
			    ?>
			    <main id="main" <?php if( $background_color ): ?>class="<?php echo $background_color; ?>"<?php endif; ?>>
			    	<?php
			    		if( is_page() or is_single() ):
				    		$video_preview_image = get_field( 'video_preview_image' );
				    		$video_bg_mp4 = get_field( 'video_bg_mp4' );
				    		$video_bg_webm = get_field( 'video_bg_webm' );
				    		$video_bg_ogg = get_field( 'video_bg_ogg' );

				    		if( $video_preview_image and $video_bg_mp4 or $video_bg_webm or $video_bg_ogg ):
			    	?>
					    	<div class="video">
						        <div class="video-box">
						          	<video width="1280" height="720" poster="<?php echo $video_preview_image['sizes']['1280x720']; ?>">
						            	<?php if( $video_bg_mp4 ): ?><source type="video/mp4" data-src="<?php echo $video_bg_mp4; ?>"><?php endif; ?>
						            	<?php if( $video_bg_webm ): ?><source type="video/webm" data-src="<?php echo $video_bg_webm; ?>"><?php endif; ?>
						            	<?php if( $video_bg_ogg ): ?><source type="video/ogg" data-src="<?php echo $video_bg_ogg; ?>"><?php endif; ?>
						          	</video>
						        </div>
						     </div>
						<?php endif; ?>
					<?php endif; ?>
		<?php endif; ?>
