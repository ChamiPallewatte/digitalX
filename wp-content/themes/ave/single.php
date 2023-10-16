<?php
/**
 * The template for displaying all single posts.
 *
 * @package Ave
 */

get_header();

	while ( have_posts() ) : the_post();
		
		//get value from options
		if ( class_exists( 'Liquid_Elementor_Addons' ) ){
			$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
			$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
		
			$style = $page_settings_model->get_settings( 'post_style' );
			$style = $style ? $style : liquid_helper()->get_option( 'post-style', 'cover-spaced' );
		} else {
			$style = liquid_helper()->get_option( 'post-style', 'cover-spaced' );
		}
		
		//if empty style get default
		if( !$style ) {
			$style = 'cover-spaced';
		}

		$format = get_post_format();
		if( 'video' === $format && class_exists( 'ReduxFramework' ) ){
			$style = 'cover';
		}
		elseif( 'audio' === $format && class_exists( 'ReduxFramework' ) ){
			$style = 'cover-spaced';
		}

		if( 'liquid-header' === get_post_type() ||
			'liquid-footer' === get_post_type() ||
			'liquid-mega-menu' === get_post_type() ||
			'ld-product-layout' === get_post_type()
		) {
			$style = 'default';
		}

		get_template_part( 'templates/blog/single/' . $style );

	endwhile;

get_footer();