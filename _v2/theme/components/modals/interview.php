<?php
/**
 * Interview  Modal
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<div class="modal jp-modal jp-interview-modal youtube-video-context" id="interview-modal" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<?php if ( is_page_template( 'template-homepage-v2.php' ) ) : ?>
					<p class="h3 modal-title youtube-video-title">Daniel S.</p>
				<?php else : ?>
					<p class="h3 modal-title youtube-video-title">Vinnie H.</p>
				<?php endif; ?>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span class="fal fa-times"></span>
				</button>
			</div>

			<div class="modal-body">
				<?php if ( is_page_template( 'template-homepage-v2.php' ) ) : ?>
					<div class="ratio ratio-16x9 youtube-video-place jp-interview-modal-video-wrapper">
						<iframe class="jp-interview-modal-video iframe-to-load" data-url-value="https://www.youtube.com/embed/kNj08KeNbIA?rel=0&showinfo=0&autoplay=1&cc_load_policy=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>

					<p class="jp-interview-modal-text youtube-video-text">Daniel S., an alumnus of JourneyPure at the River in Murfreesboro, Tennessee, sat down with us alongside his brother to tell his story.</p>
				<?php else : ?>
					<div class="ratio ratio-16x9 youtube-video-place jp-interview-modal-video-wrapper">
						<iframe class="jp-interview-modal-video iframe-to-load" data-url-value="https://www.youtube.com/embed/R6xqseH-4zo?rel=0&showinfo=0&autoplay=1&cc_load_policy=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>

					<p class="jp-interview-modal-text youtube-video-text">After hiding his drinking for years, Vinnie found help at JourneyPure’s outpatient program. Today, he enjoys the freedoms of a new life without alcohol holding him back. Learn how being open-minded and accepting helped him get started.</p>
				<?php endif; ?>

				<p class="h5 jp-interview-modal-title">6,000+ Success Stories</p>

				<div class="row">
					<div class="col-6 col-sm-3 jp-interview-modal-item youtube-video-item">
						<div class="jp-interview-modal-item-image-wrapper youtube-video-cta" data-url-value="https://www.youtube.com/embed/kNj08KeNbIA?rel=0&showinfo=0&autoplay=1&cc_load_policy=1">
							<img class="jp-interview-modal-item-image lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( WP_UPLOAD_PATH ); ?>/2020/07/addiction-story-daniel-150x150.png" alt="You Are Worth It - Daniel">
							<span class="fas fa-play-circle jp-interview-modal-item-image-play-button"></span>
						</div>

						<p class="jp-interview-modal-item-title youtube-video-cta-title">Daniel S.</p>
						<p class="jp-interview-modal-item-text youtube-video-cta-text">Daniel S., an alumnus of JourneyPure at the River in Murfreesboro, Tennessee, sat down with us alongside his brother to tell his story.</p>
					</div>

					<div class="col-6 col-sm-3 jp-interview-modal-item youtube-video-item">
						<div class="jp-interview-modal-item-image-wrapper youtube-video-cta" data-url-value="https://www.youtube.com/embed/R6xqseH-4zo?rel=0&showinfo=0&autoplay=1&cc_load_policy=1">
							<img class="jp-interview-modal-item-image lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( WP_UPLOAD_PATH ); ?>/2020/07/vinnie-review-outpatient-video-150x150.jpg" alt="">
							<span class="fas fa-play-circle jp-interview-modal-item-image-play-button"></span>
						</div>

						<p class="jp-interview-modal-item-title youtube-video-cta-title">Vinnie H.</p>
						<p class="jp-interview-modal-item-text youtube-video-cta-text">After hiding his drinking for years, Vinnie found help at JourneyPure’s outpatient program. Today, he enjoys the freedoms of a new life without alcohol holding him back. Learn how being open-minded and accepting helped him get started.</p>
					</div>

					<div class="col-6 col-sm-3 jp-interview-modal-item youtube-video-item">
						<div class="jp-interview-modal-item-image-wrapper youtube-video-cta" data-url-value="https://www.youtube.com/embed/wA75f5aN-ow?rel=0&showinfo=0&autoplay=1&cc_load_policy=1">
							<img class="jp-interview-modal-item-image lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( WP_UPLOAD_PATH ); ?>/2020/05/amber-video-review-150x150.jpg" alt="Amber Fortenberry | Tennessee">
							<span class="fas fa-play-circle jp-interview-modal-item-image-play-button"></span>
						</div>

						<p class="jp-interview-modal-item-title youtube-video-cta-title">Amber F.</p>
						<p class="jp-interview-modal-item-text youtube-video-cta-text">Amber came to JourneyPure motivated by seeing herself both in her 9-year-old daughter and her dying, addict mother. She overcame shame, guilt and anger to finally find peace.</p>
					</div>

					<div class="col-6 col-sm-3 jp-interview-modal-item youtube-video-item">
						<div class="jp-interview-modal-item-image-wrapper youtube-video-cta" data-url-value="https://www.youtube.com/embed/EGZsOdPunJM?rel=0&showinfo=0&autoplay=1&cc_load_policy=1">
							<img class="jp-interview-modal-item-image lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( WP_UPLOAD_PATH ); ?>/2020/05/jared-video-review-150x150.jpg" alt="Jared Lanpher | Tennessee">
							<span class="fas fa-play-circle jp-interview-modal-item-image-play-button"></span>
						</div>

						<p class="jp-interview-modal-item-title youtube-video-cta-title">Jared L.</p>
						<p class="jp-interview-modal-item-text youtube-video-cta-text">Jared came to JourneyPure in 2016 to avoid prison. He had been to other treatment centers before but was able to actually stay sober after treatment here.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
