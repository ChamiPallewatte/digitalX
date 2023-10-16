<?php
/**
 * The template for displaying Author bios
 */

if ( class_exists( 'Liquid_Elementor_Addons' ) ){
	$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
	$page_settings_model = $page_settings_manager->get_model( get_the_ID() );

	$post_author_box_enable = $page_settings_model->get_settings( 'post_author_box_enable' );
	$post_author_box_enable = $post_author_box_enable ? $post_author_box_enable : liquid_helper()->get_option( 'post-author-box-enable' );
} else {
	$post_author_box_enable = liquid_helper()->get_option( 'post-author-box-enable' );
}

if( 'off' === $post_author_box_enable ) {
	return;
}

// Initialize needed variables
global $authordata;
$author_id = is_object( $authordata ) ? $authordata->ID : -1;

if( get_the_author_meta( 'description', $author_id ) ) : ?>
<div class="post-author">
	
	<figure>
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), 80 ); ?>
	</figure>

	<div class="post-author-info clearfix">
		<h3><?php liquid_author_link( array( 'before' => '', ) ); ?></h3>
		<h6><?php echo liquid_author_role() ?></h6>
		<p><?php the_author_meta( 'description' ); ?></p>
	</div><!-- /.post-author-info -->
	
</div><!-- /.post-author -->
<?php endif; ?>