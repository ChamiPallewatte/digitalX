<?php
/**
 * Default header template
 *
 * @package Ave
 */

$header = liquid_get_header_layout();

if( function_exists( 'icl_object_id' ) ) {
    $header['id'] = icl_object_id( $header['id'], 'page', false, ICL_LANGUAGE_CODE );
}
if ( function_exists( 'pll_get_post' ) ) {
    $header['id'] = pll_get_post( $header['id'] );
}

?>
<header <?php liquid_helper()->attr( 'header', $header['attributes'] ); ?>>
<?php
	$header_content = get_post_field( 'post_content', $header['id'] );
	$header_content = str_replace( 'vc_row', 'ld_header_row', $header_content );
	$header_content = str_replace( 'vc_column', 'ld_header_column', $header_content );
	echo do_shortcode( $header_content );
?>
</header>