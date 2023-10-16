<?php

extract( $atts );

$classes = array( 
	'fancy-box',
	$content_alignment,
	$heading_size, 
	$this->get_class( $style ), 
	$el_class, 
	$this->get_id() 
);

// Enqueue Conditional Script
$this->scripts();

$this->generate_css();
?>
<div id="<?php echo $this->get_id() ?>" class="<?php echo ld_helper()->sanitize_html_classes( $classes ) ?>">
	
	<div class="cb-img-container">

		<?php $this->get_image(); ?>
		<?php $this->get_overlay_image(); ?>

		<span class="cb-img-bar"></span>

	</div><!-- /.cb-img-container -->

	<div class="fancy-box-contents">
		
		<div class="fancy-box-header">
			<?php $this->get_title(); ?>
			<?php $this->get_content(); ?>
		</div><!-- /.fancy-box-header -->

		<?php if( 'yes' === $show_button ) : ?>
		<div class="fancy-box-footer mt-3">
			<?php $this->get_button() ?>
		</div><!-- /.fancy-box-footer -->
		<?php endif; ?>
		
	</div><!-- /.fancy-box-contents -->

	<?php $this->get_overlay_link() ?>
	
</div><!-- /.fancy-box fancy-box-classes -->