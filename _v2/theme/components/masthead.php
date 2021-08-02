<?php
/**
 * Masthead
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<section class="jp-component jp-masthead lazy-enhanced" data-src="<?php echo esc_attr( $context->above_fold->image ); ?>">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="jp-component-header jp-masthead-header">
					<?php if ( ! empty( $context->above_fold->h1 ) ) : ?>
						<h1 class="jp-component-h1 jp-masthead-h1"><?php echo wp_kses_post( $context->above_fold->h1 ); ?></h1>

						<?php if ( ! empty( $context->above_fold->heading ) ) : ?>
							<h2 class="h2 jp-component-title jp-masthead-title"><?php echo wp_kses_post( $context->above_fold->heading ); ?></h2>
						<?php endif; ?>
					<?php else : ?>
						<?php if ( ! empty( $context->above_fold->heading ) ) : ?>
							<h1 class="h2 jp-component-title jp-masthead-title"><?php echo wp_kses_post( $context->above_fold->heading ); ?></h1>
						<?php endif; ?>
					<?php endif; ?>

					<?php if ( ! empty( $context->above_fold->subheading ) ) : ?>
						<div class="h3 jp-component-subtitle"><?php echo wp_kses_post( $context->above_fold->subheading ); ?></div>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<?php if ( ! empty( $context->above_fold->interview ) && true === $context->above_fold->interview ) : ?>
			<a class="jp-masthead-interview" data-toggle="modal" href="#interview-modal">
				<div class="row align-items-center">
					<?php if ( is_page_template( 'template-homepage-v2.php' ) ) : ?>
						<div class="col-12 col-sm-auto">
							<div class="jp-masthead-interview-image-wrapper">
								<img class="jp-masthead-interview-image lazy-enhanced" height="65" width="65" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( WP_UPLOAD_PATH ); ?>/2020/07/daniel-video-review.jpg" alt="Daniel S.">
							</div>
						</div>

						<div class="col-12 col-sm">
							<div class="jp-masthead-interview-content">
								<p class="jp-masthead-interview-heading"><strong>Watch Daniel’s Interview</strong></p>
								<p class="jp-masthead-interview-subheading">Sober October 2019</p>
							</div>
						</div>
					<?php else : ?>
						<div class="col-12 col-sm-auto">
							<div class="jp-masthead-interview-image-wrapper">
								<img class="jp-masthead-interview-image lazy-enhanced" height="65" width="65" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( WP_UPLOAD_PATH ); ?>/2020/07/vinnie-review-outpatient-video-150x150.jpg" alt="Vinnie H.">
							</div>
						</div>

						<div class="col-12 col-sm">
							<div class="jp-masthead-interview-content">
								<p class="h3 jp-masthead-interview-heading"><strong>Watch Vinnie H.</strong></p>
								<p class="h3 jp-masthead-interview-subheading">Sober March 2020</p>
							</div>
						</div>
					<?php endif; ?>

					<div class="col-12 col-sm-auto">
						<div class="jp-masthead-interview-play">
							<span class="fas fa-play jp-masthead-interview-play-icon"></span>
						</div>
					</div>
				</div>
			</a>
		<?php endif; ?>

		<?php if ( $context->ratings ) : ?>
			<div class="jp-masthead-ratings">
				<div class="row">
					<?php foreach ( $context->ratings as $rating ) : ?>
						<div class="col-12 col-md-6">
							<div class="jp-masthead-ratings-rating source-<?php echo esc_attr( sanitize_title( $rating->line_1 ) ); ?>">
								<div class="row g-0 align-items-center">
									<div class="col-auto">
										<?php $height = number_format( $rating->image['sizes']['medium-height'] / $rating->image['sizes']['medium-width'] * 42, 2, '.', '' ); ?>
										<img class="jp-masthead-ratings-rating-image lazy-enhanced" height="<?php echo esc_attr( $height ); ?>" width="42" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $rating->image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( get_post_meta( $rating->image['ID'], '_wp_attachment_image_alt', true ) ); ?>">
									</div>

									<div class="col">
										<div class="jp-masthead-ratings-rating-content">
											<?php if ( $rating->line_1 ) : ?>
												<p class="jp-masthead-ratings-rating-title"><?php echo esc_html( $rating->line_1 ); ?></p>
											<?php endif; ?>

											<?php if ( 'stars' === $rating->controller ) : ?>
												<p class="jp-masthead-ratings-rating-stars">
													<?php for ( $i = 0; $i < $rating->stars; $i++ ) : ?>
														<span class="fas fa-star jp-masthead-ratings-rating-stars-star"></span>
													<?php endfor; ?>

													<span class="jp-masthead-ratings-rating-stars-average"><?php echo esc_html( $rating->number_rating ); ?></span>
												</p>
											<?php else : ?>
												<p class="jp-masthead-ratings-rating-subtitle"><?php echo esc_html( $rating->line_2_text ); ?></p>
											<?php endif; ?>

											<?php if ( $rating->line_3 ) : ?>
												<p class="jp-masthead-ratings-rating-text"><?php echo esc_html( $rating->line_3 ); ?></p>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( true === $context->above_fold->video ) : ?>
			<div class="row">
				<div class="col">
					<div class="jp-masthead-video-wrapper youtube-video-context">
						<div class="jp-masthead-video youtube-video-item">
							<div class="ratio ratio-16x9 youtube-video-place jp-masthead-video-video-wrapper">
								<div class="youtube-video-cta jp-masthead-video-video lazy-enhanced" data-src="/wp-content/uploads/2020/07/SL4drwind.png" data-url-value="https://www.youtube.com/embed/Gd1Dza355X8?rel=0&showinfo=0&autoplay=1&cc_load_policy=1">
									<span class="fas fa-play-circle jp-masthead-video-video-play-button"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>

	<div class="jp-masthead-go-down-2">
		<?php if ( false !== $context->above_fold->arrowdown ) : ?>
			<span class="jp-masthead-go-down-2-left"></span>
			<span class="jp-masthead-go-down-2-right"></span>
		<?php endif; ?>
	</div>
</section>
