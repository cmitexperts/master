<?php
/**
 * Reviews
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<?php if ( isset( $context->reviews_blocks ) ) : ?>
	<section class="jp-component jp-component-no-padding-top jp-reviews">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="jp-component-header">
						<?php if ( ! empty( $context->reviews_blocks->heading ) ) : ?>
							<h2 class="jp-component-title"><?php echo wp_kses_post( $context->reviews_blocks->heading ); ?></h2>
						<?php endif; ?>

						<?php if ( ! empty( $context->reviews_blocks->subheading ) ) : ?>
							<div class="h3 jp-component-subtitle"><?php echo wp_kses_post( $context->reviews_blocks->subheading ); ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<?php if ( $context->reviews_blocks->list ) : ?>
				<div class="jp-reviews-list">
					<div class="row">
						<?php foreach ( $context->reviews_blocks->list as $index => $item ) : ?>
							<div class="col-12 col-md-6">
								<div class="jp-reviews-item">
									<div class="jp-reviews-item-author">
										<div class="jp-reviews-item-author-image">
											<img class="lazy-enhanced" height="80" width="80" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $item->photo['image'] ); ?>" alt="<?php echo esc_attr( $item->photo['alt'] ); ?>">
										</div>

										<div class="jp-reviews-item-author-info">
											<p class="jp-reviews-item-author-title"><?php echo esc_html( $item->heading ); ?></p>

											<div class="jp-reviews-item-author-stars">
												<?php for ( $i = 0; $i < $item->star_rating; $i++ ) : ?>
													<span class="jp-reviews-item-author-star fas fa-star"></span>
												<?php endfor; ?>
											</div>

											<?php if ( ! empty( $item->sober_since ) ) : ?>
												<p class="jp-reviews-item-author-sober_since">
													<?php echo wp_kses_post( $item->sober_since ); ?>
												</p>
											<?php endif; ?>

											<?php if ( ! empty( $item->source_image['image'] ) ) : ?>
												<div class="jp-reviews-item-author-logo">
													<img class="jp-reviews-item-author-source_image lazy-enhanced" height="42" width="42" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $item->source_image['image'] ); ?>" alt="<?php echo esc_attr( $item->source_image['alt'] ); ?>">
												</div>
											<?php endif; ?>
										</div>
									</div>

									<blockquote class="jp-reviews-item-text">
										<?php echo wp_kses_post( $item->review_text ); ?>
									</blockquote>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif;
