<?php
/**
 * Process V2
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<section class="jp-component jp-process-v2">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="jp-component-header jp-component-header-left">
					<h2 class="jp-component-title jp-process-v2-title">The Process is Simple</h2>
					<div class="h3 jp-component-subtitle">It starts with a friendly conversation to see if we’d be a good fit.</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="jp-component jp-process-v2-body">
	<div class="container">
		<div class="row jp-process-v2-body-slider-row">
			<div class="col-12 col-lg-5">
				<div class="h3-small jp-process-v2-body-text">
					<ul>
						<li>You talk with someone who also struggled with drugs or alcohol before, no judgement.</li>
						<li>You're never pressured to commit to treatment here.</li>

						<li>
							If you're interested, discuss insurance or costs and select a time (which can be the same day or sometime later).
						</li>
					</ul>
				</div>
			</div>

			<div class="col-12 col-lg-7">
				<?php if ( ! empty( $context->reviews ) ) : ?>
					<div class="jp-process-v2-body-slider">
						<?php foreach ( $context->reviews as $i => $review ) : ?>
							<?php
								/** Set the range to start likes from if the object has never been like.
								 *  The total will be a random number between the range. If a specific number
								 *  is desired, then add the desired number as the min and max
								 */
								// $context->setInitialLikesStart( 54, 300 );
								$context->setInitialLikesStart( 0, 0 );
								$like_identifier = $review->identifier;
								$total_likes     = $context->setLikes( $like_identifier );
							?>

							<div class="jp-process-v2-body-slide">
								<div class="jp-process-v2-body-review">
									<div class="row">
										<div class="col-12 col-md-auto">
											<div class="jp-process-v2-body-review-image-wrapper">
												<span class="jp-process-v2-body-review-image-radar lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/call/icon-radar.svg"></span>
												<span class="jp-process-v2-body-review-image lazy-enhanced" data-src="<?php echo esc_attr( $review->photo['image'] ); ?>"></span>
											</div>
										</div>

										<div class="col-12 col-md">
											<div class="h3-small jp-process-v2-body-review-text">
												<strong><?php echo esc_html( $review->heading ); ?></strong>

												<div class="h3-small jp-process-v2-body-review-text-text">
													<?php echo wp_kses_post( $review->review_text ); ?>
												</div>
											</div>

											<p class="jp-process-v2-body-review-date"><?php echo esc_html( human_time_diff( strtotime( $review->date ), strtotime( gmdate( 'm/d/Y' ) ) ) ); ?> ago</p>
										</div>
									</div>

									<div data-like-object="<?php echo esc_attr( $like_identifier ); ?>" class="jp-process-v2-body-review-likes lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/call/icon-likes-2.svg" data-placement="top" data-toggle="tooltip" <?php echo $context->isLikedBySession( $like_identifier ) ? 'title="Already liked"' : 'title="Do you like?"'; ?>>
										<data value="<?php echo esc_attr( $total_likes ); ?>"><?php echo esc_html( $total_likes ); ?></data>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>

	<div class="jp-process-v2-body-wave-wrapper">
		<svg class="jp-process-v2-body-wave" viewBox="0 0 1440 320" preserveAspectRatio="none">
			<path d="M0,128L120,154.7C240,181,480,235,720,240C960,245,1200,203,1320,181.3L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
		</svg>
	</div>

	<!-- <div class="jp-process-v2-body-abstract-wrapper">
		<svg class="jp-process-v2-body-abstract" width="595" height="765" viewBox="0 0 595 765" fill="none">
			<path d="M44.5 486.5C107.412 601.163 276.5 557.5 352.5 652.5C428.5 747.5 467.377 848.135 622.5 652.5V0.5H300.5C19.7525 116.172 -59.6117 213.02 44.5 486.5Z" fill="#00943A" fill-opacity="0.12"/>
		</svg>
	</div> -->
</section>

<section class="jp-component jp-process-v2-bottom">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5 offset-lg-7">
				<span class="jp-process-v2-bottom-arrow lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/call/icon-arrow.svg"></span>
			</div>
		</div>
	</div>
</section>
