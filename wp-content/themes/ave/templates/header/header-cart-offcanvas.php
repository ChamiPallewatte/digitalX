<?php

// check
if( !liquid_helper()->is_woocommerce_active() || is_admin() ) {
	return;
}

$order_count = WC()->cart->get_cart_contents_count();
$is_empty    = WC()->cart->is_empty();
$sub_total   = WC()->cart->get_cart_subtotal();
$cart_id     = uniqid( 'cart-' );

if ( class_exists( 'Liquid_Elementor_Addons' ) ){
	$style_escaped = '';
	$txt_style_escaped = '';
	$add_icon = $show_icon;
	$icon_html = empty($icon['value']) ? sprintf( '<i class="%s"></i>', esc_attr( 'lqd-icn-ess icon-ld-cart' ) ) : 'el-render';
} else {
	$icon_opts = liquid_get_icon( $atts );
	$icon = !empty( $icon_opts['type'] ) && ! empty( $icon_opts['icon'] ) ? $icon_opts['icon'] : 'lqd-icn-ess icon-ld-cart';
	$style_escaped  = !empty( $icon_opts['color'] ) ? sprintf( ' style="color:%s;"', $icon_opts['color'] ) : '';
	$txt_style_escaped  = !empty( $atts['txt_color'] ) ? sprintf( ' style="color:%s;"', $atts['txt_color'] ) : '';
	$add_icon = $atts['add_icon'];
	$icon_html = sprintf('<i class="%s"></i>', esc_attr( $icon ) );
}

$cart_footer_text =  $atts['cart_text'];
$icon_text =  $atts['icon_text'];

?>

<div class="ld-module-cart ld-module-cart-offcanvas">
	
	<span class="ld-module-trigger collapsed" data-ld-toggle="true" data-toggle="collapse" data-target="#lqd-cart" aria-controls="lqd-cart" aria-expanded="false">
		<?php if( !empty( $icon_text ) ) { ?>
			<span class="ld-module-trigger-txt" <?php echo $txt_style_escaped; ?>>
				<?php echo wp_kses_post( $icon_text ); ?>
			</span><!-- /.ld-module-trigger-txt -->
		<?php } ?>
		<?php if( $add_icon ) { ?>
		<span class="ld-module-trigger-icon" <?php echo $style_escaped; ?>>
			<?php if ( $icon_html == 'el-render' ) : ?>
				<?php \Elementor\Icons_Manager::render_icon( $atts['icon'], [ 'aria-hidden' => 'true' ] ); ?>
			<?php else : ?>
				<?php echo $icon_html; ?>
			<?php endif; ?>
		</span><!-- /.ld-module-trigger-icon --> 
		<?php } else { ?>
		<span class="ld-module-trigger-icon hidden" <?php echo $style_escaped; ?>>
			<i class="<?php echo esc_attr( $icon ) ?>"></i>
		</span><!-- /.ld-module-trigger-icon --> 
		<?php } ?>
		<?php printf( '<span class="ld-module-trigger-count header-cart-fragments">%s</span>', $order_count ); ?>
	</span><!-- /.ld-module-trigger -->
	
	<div class="ld-module-dropdown collapse" id="lqd-cart" aria-expanded="false">
		<div class="ld-cart-contents">

			<div class="header-quickcart">
				<?php liquid_woocommerce_header_cart() ?>
			</div>
			
			<?php if( !$is_empty && !empty( $cart_footer_text ) ) { ?>
			<div class="ld-cart-message">
				<?php echo wp_kses_post( $cart_footer_text ); ?>
			</div><!-- /.ld-cart-message -->
			<?php } ?>
			
		</div><!-- /.ld-cart-contents -->
	</div><!-- /.ld-module-dropdown -->

</div><!-- /.module-cart -->