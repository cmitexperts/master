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

<?php if ( ! empty( $context->videos ) ) : ?>
	<section class="jp-component jp-videos youtube-video-context">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="jp-component-header jp-component-header-left jp-videos-header">
						<h2 class="jp-component-title jp-videos-title">You Can Do This!</h2>
						<div class="h3 jp-component-subtitle">Whether Journeypure is your first (and last) treatment center, or you've spent decades in and out of other facilities... here's proof you can feel better. </div>
					</div>

					<?php foreach ( $context->videos as $video ) : ?>
						<div class="jp-videos-featured hide-for-md youtube-video-item">
							<div class="ratio ratio-16x9 youtube-video-place jp-videos-featured-video-wrapper">
								<div class="youtube-video-cta jp-videos-featured-video lazy-enhanced" data-src="<?php echo esc_attr( $video['image']['url'] ); ?>" data-url-value="https://www.youtube.com/embed/<?php echo esc_attr( $video['youtube_video_id'] ); ?>?rel=0&showinfo=0&autoplay=1&cc_load_policy=1">
									<span class="fas fa-play-circle jp-videos-featured-video-play-button"></span>
								</div>
							</div>
						</div>

						<?php break; // Only the first video. ?>
					<?php endforeach; ?>

					<div class="jp-videos-video-slider">
						<div class="jp-videos-video-slide">
							<div class="row">
								<?php foreach ( $context->videos as $i => $video ) : ?>
									<?php if ( $i > 0 && 0 === $i % 12 ) : ?>
										<!-- NOT IMPLEMENTED YET </div>
										</div>
										<div class="jp-reviews-videos-video-slide">
										<div class="row"> -->
									<?php endif; ?>

									<div class="col-4 col-md-3">
										<div class="jp-videos-video youtube-video-item">
											<div class="jp-videos-video-image-wrapper youtube-video-cta" data-url-value="https://www.youtube.com/embed/<?php echo esc_attr( $video['youtube_video_id'] ); ?>?rel=0&showinfo=0&autoplay=1&cc_load_policy=1" data-image="<?php echo esc_attr( $video['image']['url'] ); ?>">
												<img class="jp-videos-video-image lazy-enhanced" height="71" width="71" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $video['image']['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $video['image']['alt'] ); ?>">
												<span class="jp-videos-video-image-play-button play-button"></span>
											</div>

											<h4 class="jp-videos-video-title small"><?php echo wp_kses_post( $video['title'] ); ?></h4>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>

					<!-- NOT IMPLEMENTED YET <div class="review-nav">
						<p class="link see-less-btn">Previous</p>
						<p class="link see-more-btn has-more"><data>Data Generated Via Script</data> More</p>
					</div> -->
				</div>

				<div class="col-12 col-md-6 col-lg-8">
					<?php foreach ( $context->videos as $video ) : ?>
						<div class="jp-videos-featured show-for-md youtube-video-item">
							<div class="ratio ratio-16x9 youtube-video-place jp-videos-featured-video-wrapper">
								<div class="youtube-video-cta jp-videos-featured-video lazy-enhanced" data-src="<?php echo esc_attr( $video['image']['url'] ); ?>" data-url-value="https://www.youtube.com/embed/<?php echo esc_attr( $video['youtube_video_id'] ); ?>?rel=0&showinfo=0&autoplay=1&cc_load_policy=1">
									<span class="fas fa-play-circle jp-videos-featured-video-play-button"></span>
								</div>
							</div>
						</div>

						<?php break; // Only the first video. ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
