<?php
/**
 * Gallery
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<?php if ( ! empty( $context->gallery ) ) : ?>
	<section class="jp-component jp-component-no-padding jp-gallery" data-slider-items="<?php echo count( $context->gallery ); ?>">
		<?php foreach ( $context->gallery as $index => $gallery ) : ?>
			<figure class="jp-gallery-figure">
				<img class="jp-gallery-image lazy-enhanced" height="340" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $gallery->medium ); ?>" alt="<?php echo esc_attr( $gallery->alt ); ?>">
			</figure>
		<?php endforeach; ?>
	</section>
<?php endif; ?>
