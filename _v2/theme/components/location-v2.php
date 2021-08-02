<?php
/**
 * Location V2
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<?php if ( isset( $context->block4 ) ) : ?>
	<section class="jp-component jp-location jp-location-v2">
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
					<?php
						$address = rawurlencode( $context->block4->location->full_address );
						$address = preg_replace( '/\./', '', $address );
					?>

					<div class="jp-location-map-embed ratio ratio-16x9">
						<iframe class="iframe-to-load" height="326.8" width="580.98" data-url-value="https://www.google.com/maps/embed/v1/place?key=AIzaSyDwoQ63Mff3mW9-u2fQUhnlMBmX752RKds&q=<?php echo esc_html( $address ); ?>" allowfullscreen></iframe>
					</div>

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

					<a class="h3 jp-location-direction" href="https://www.google.com/maps/search/?api=1&query=<?php echo esc_attr( $address ); ?>" target="_blank"><span class="fas fa-route"></span> Get Directions</a>
				</div>

				<div class="col-12 col-md-1"></div>

				<div class="col-12 col-md-55">
					<?php if ( $context->highlights_v2->tag_sections ) : ?>
						<?php foreach ( $context->highlights_v2->tag_sections as $section ) : ?>
							<?php if ( ! empty( $section['tags'] ) && ! empty( $section['heading'] ) && ! preg_match( '/location/i', $section['heading'] ) ) : ?>
								<div class="jp-location-tags">
									<p class="h4 jp-location-tags-title"><?php echo wp_kses_post( $section['heading'] ); ?></p>

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

						<?php foreach ( $context->highlights_v2->tag_sections as $section ) : ?>
							<?php if ( ! empty( $section['tags'] ) && ! empty( $section['heading'] ) && preg_match( '/location/i', $section['heading'] ) ) : ?>
								<div class="jp-location-tags">
									<p class="h4 jp-location-tags-title"><?php echo wp_kses_post( $section['heading'] ); ?></p>

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
<?php endif;
