<?php

if ( class_exists( 'Liquid_Elementor_Addons' ) ){
	$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
	$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
	$slider_arr = $page_settings_model->get_settings( 'liquid_post_slider' );
} else {
	$slider_arr = get_post_meta( get_the_ID(), 'liquid-post-slider', true );
}

if( empty( $slider_arr ) ) {
	return;
}

if ( ! class_exists( 'Liquid_Elementor_Addons' ) ){
	$slider_arr = explode( ',', $slider_arr );
}


?>
<div class="carousel-thumbs carousel-nav-floated carousel-nav-middle" id="blog-cover-carousel-thumbs">

	<div class="carousel-container">

		<div class="carousel-items row" data-lqd-flickity='{ "asNavFor": "#blog-cover-carousel" }'>

		<?php foreach( $slider_arr as $slide ) { ?>

			<?php 
				if ( class_exists( 'Liquid_Elementor_Addons' ) ){
					$slide = $slide['id'];
				}
			?>

			<div class="col-sm-3 carousel-item">

				<figure>
					<?php echo wp_get_attachment_image( $slide, array( '100', '100' ), false ); ?>
				</figure>

			</div><!-- /.col-sm-3 -->
			
		<?php } ?>
		
		</div><!-- /. row -->

	</div><!-- /.carousel-container -->
	
</div><!-- /.carousel-nav -->