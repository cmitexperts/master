<?php
/**
 * Highlights
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<?php if ( isset( $context->highlights_v2 ) ) : ?>
	<section class="jp-component jp-highlights lazy-enhanced" data-src="<?php echo esc_attr( $context->highlights_v2->image ); ?>">
		<div class="container">
			<div class="row row-component-header">
				<div class="col">
					<div class="jp-component-header">
						<?php if ( ! empty( $context->highlights_v2->heading ) ) : ?>
							<h2 class="jp-component-title"><?php echo wp_kses_post( $context->highlights_v2->heading ); ?></h2>
						<?php endif; ?>

						<?php if ( ! empty( $context->highlights_v2->subheading ) ) : ?>
							<div class="h3 jp-component-subtitle"><?php echo wp_kses_post( $context->highlights_v2->subheading ); ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<?php if ( $context->highlights_v2->list ) : ?>
				<div class="jp-highlights-list">
					<?php foreach ( $context->highlights_v2->list as $index => $item ) : ?>
						<?php $last_item = false; // count( $context->highlights_v2->list ) === ( $index + 1 ); ?>

						<div class="jp-highlights-item">
							<div class="row align-items-center">
								<div class="col-12 col-md-6">
									<div class="jp-highlights-item-content">
										<?php if ( ! empty( $item['heading'] ) ) : ?>
											<h3 class="h2-small bottom-line jp-highlights-item-title"><?php echo wp_kses_post( $item['heading'] ); ?></h3>
										<?php endif; ?>

										<?php if ( ! empty( $item['content'] ) ) : ?>
											<div class="jp-highlights-item-text">
												<?php echo wp_kses_post( $item['content'] ); ?>
											</div>
										<?php endif; ?>
									</div>
								</div>

								<?php if ( $last_item ) : ?>
									<div class="col-12 col-md-6">
										<div class="jp-highlights-item-phone-wrapper">
											<div class="jp-highlights-item-phone">
												<img class="jp-highlights-item-phone-image lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/highlights/highlights-phone.png" alt="Phone">
											</div>
										</div>
									</div>
								<?php endif; ?>

								<?php if ( ! empty( $item['review'] ) ) : ?>
									<div class="col-12 <?php echo $last_item ? 'col-md-7' : 'col-md-6'; ?>">
										<div class="jp-highlights-item-review">
											<div class="jp-highlights-item-review-author">
												<div class="jp-highlights-item-review-author-image">
													<img class="lazy-enhanced" height="80" width="80" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $item['review']->photo['image'] ); ?>" alt="<?php echo esc_attr( $item['review']->photo['alt'] ); ?>">
												</div>

												<div class="jp-highlights-item-review-author-info">
													<p class="jp-highlights-item-review-author-title"><?php echo esc_html( $item['review']->heading ); ?></p>

													<div class="jp-highlights-item-review-author-stars">
														<?php for ( $i = 0; $i < $item['review']->star_rating; $i++ ) : ?>
															<span class="jp-highlights-item-review-author-star fas fa-star"></span>
														<?php endfor; ?>
													</div>

													<?php if ( ! empty( $item['review']->sober_since ) ) : ?>
														<p class="jp-highlights-item-review-author-sober_since">
															<?php echo wp_kses_post( $item['review']->sober_since ); ?>
														</p>
													<?php endif; ?>

													<?php if ( ! empty( $item['review']->source_image['image'] ) ) : ?>
														<div class="jp-highlights-item-review-author-logo">
															<img class="jp-highlights-item-review-author-source_image lazy-enhanced" height="42" width="42" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $item['review']->source_image['image'] ); ?>" alt="<?php echo esc_attr( $item['review']->source_image['alt'] ); ?>">
														</div>
													<?php endif; ?>
												</div>
											</div>

											<blockquote class="jp-highlights-item-review-text">
												<?php echo wp_kses_post( $item['review']->review_text ); ?>
											</blockquote>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<?php if ( true === $context->highlights_v2->show_insurance_logos ) : ?>
				<div class="jp-highlights-insurance">
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="jp-highlights-insurance-text">
								<?php if ( ! empty( $context->highlights_v2->insurance_heading ) ) : ?>
									<h2 class="h2 jp-highlights-insurance-title"><?php echo wp_kses_post( $context->highlights_v2->insurance_heading ); ?></h2>
								<?php endif; ?>

								<?php if ( ! empty( $context->highlights_v2->insurance_text ) ) : ?>
									<div class="h3-small jp-highlights-insurance-subtitle">
										<?php echo wp_kses_post( $context->highlights_v2->insurance_text ); ?>
									</div>
								<?php endif; ?>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="jp-highlights-insurance-logos">
								<div class="jp-highlights-insurance-logos_group">
									<img data-toggle="modal" data-target="#main-insurance-form" class="jp-highlights-insurance-logo lazy-enhanced" height="54.75" width="365" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( get_stylesheet_directory_uri() ); ?>/assets/img/insurance2.png" alt="Aetna, Anthem Blue Cross Blue Sheild, Cigna Heath Insurances">
									<img data-toggle="modal" data-target="#main-insurance-form" class="jp-highlights-insurance-logo lazy-enhanced" height="54.75" width="365" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( get_stylesheet_directory_uri() ); ?>/assets/img/insurance1.png" alt="Amerihealth, United Healthcare, Humana, Tricare and 43 More Insurances">
								</div>

								<button type="button" data-toggle="modal" data-target="#main-insurance-form" class="btn btn-secondary btn-large"><span class="fas fa-id-card"></span> Check Insurance</button>
								<center>No Commitment</center>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif;
