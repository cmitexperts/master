<?php
/**
 * Location
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<?php if ( isset( $context->block4 ) ) : ?>
	<section class="jp-component jp-location">
		<div class="container">
			<?php if ( ! empty( $context->block4->location->title ) ) : ?>
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="jp-component-header jp-component-header-left jp-location-header">
							<h2 class="jp-component-title"><?php echo wp_kses_post( $context->block4->location->title ); ?></h2>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<div class="row">
				<div class="col-12 col-md-55">
					<?php if ( ! empty( $context->block4->location->subtitle ) ) : ?>
						<div class="h3"><?php echo wp_kses_post( $context->block4->location->subtitle ); ?></div>
					<?php endif; ?>

					<?php if ( $context->highlights_v2->tag_sections ) : ?>
						<?php foreach ( $context->highlights_v2->tag_sections as $section ) : ?>
							<?php if ( ! empty( $section['tags'] ) && ! empty( $section['heading'] ) && preg_match( '/location/i', $section['heading'] ) ) : ?>
								<div class="h3 jp-location-locations">
									<h3 class="jp-location-locations-title"><?php echo wp_kses_post( $section['heading'] ); ?></h3>

									<?php foreach ( $section['tags'] as $index => $_tag ) : ?>
										<span class="jp-location-locations-item"><?php echo wp_kses_post( $_tag['value'] ); ?></span>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endif; ?>

					<?php if ( ! empty( $context->block4->location->name ) && ! empty( $context->block4->location->street_address ) ) : ?>
						<p class="h3 jp-location-address">
							<?php echo wp_kses_post( $context->block4->location->name ); ?>
							<br>
							<?php echo esc_html( $context->block4->location->street_address ); ?>
							<?php echo esc_html( $context->block4->location->city ); ?>,
							<?php echo esc_html( $context->block4->location->state ); ?>
							<?php echo esc_html( $context->block4->location->zip ); ?>
						</p>
					<?php endif; ?>

					<?php
						$address = rawurlencode( $context->block4->location->full_address );
						$address = preg_replace( '/\./', '', $address );
					?>

					<a class="h3 jp-location-direction" href="https://www.google.com/maps/search/?api=1&query=<?php echo esc_attr( $address ); ?>" target="_blank"><span class="fas fa-route"></span> Get Directions</a>
				</div>

				<div class="col-12 col-md-1"></div>

				<div class="col-12 col-md-55">
					<?php if ( $context->highlights_v2->tag_sections ) : ?>
						<?php foreach ( $context->highlights_v2->tag_sections as $section ) : ?>
							<?php if ( ! empty( $section['tags'] ) && ! empty( $section['heading'] ) && ! preg_match( '/location/i', $section['heading'] ) ) : ?>
								<div class="jp-location-tags">
									<h3 class="h4 jp-location-tags-title"><?php echo wp_kses_post( $section['heading'] ); ?></h3>

									<div class="jp-location-tags-list">
										<div class="row">
											<?php foreach ( $section['tags'] as $index => $_tag ) : ?>
												<div class="col-auto">
													<span class="jp-location-tags-item"><?php echo wp_kses_post( $_tag['value'] ); ?></span>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<?php if ( ! empty( $context->block4->location->map_image ) ) : ?>
		<section class="jp-component jp-component-no-padding jp-location-map">
			<div class="jp-location-map-image-wrapper">
				<img class="jp-location-map-image lazy-enhanced" height="360" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $context->block4->location->map_image ); ?>">
			</div>
		</section>
	<?php endif; ?>
<?php endif;
