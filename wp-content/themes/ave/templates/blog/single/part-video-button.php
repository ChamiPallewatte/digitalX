<?php
	
if ( class_exists( 'Liquid_Elementor_Addons' ) ){
	$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
	$page_settings_model = $page_settings_manager->get_model( get_the_ID() );

	$enable = $page_settings_model->get_settings( 'post_video_btn_enable' );
} else {
	$enable = liquid_helper()->get_option( 'post-video-btn-enable' );
}

if( 'on' !== $enable ) {
	return;
}

if ( class_exists( 'Liquid_Elementor_Addons' ) ){
	$url = isset($page_settings_model->get_settings( 'post_video_btn_url' )['url']) ? $page_settings_model->get_settings( 'post_video_btn_url' )['url'] : '';
	$label = $page_settings_model->get_settings( 'post_video_btn_label' );
} else {
	$url   = liquid_helper()->get_option( 'post-video-btn-url' );
	$label = liquid_helper()->get_option( 'post-video-btn-label' );
}
		
?>
<div class="blog-single-details-extra">
	<a href="<?php echo esc_url( $url ); ?>" class="lightbox-link fresco">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" stroke="#000" stroke-width="1px" width="71.5px" height="71.5px">
			<path fill-rule="evenodd"  stroke-linecap="butt" stroke-linejoin="miter" d="M35.500,0.500 C54.830,0.500 70.500,16.170 70.500,35.500 C70.500,54.830 54.830,70.500 35.500,70.500 C16.170,70.500 0.500,54.830 0.500,35.500 C0.500,16.170 16.170,0.500 35.500,0.500 Z"/>
			<path fill-rule="evenodd" stroke-linecap="butt" stroke-linejoin="miter" d="M49.410,35.676 L28.165,47.942 L28.165,23.410 L49.410,35.676 Z"/>
		</svg>
		<?php if( ! empty( $label ) ) { ?>
			<span class="text-uppercase ltr-sp-1"><?php echo esc_html( $label ); ?></span>
		<?php } ?>
	</a>
</div><!-- /.blog-single-details-extra -->