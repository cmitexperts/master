<?php
/**
 * Call
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<section class="jp-component jp-call">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-6">
				<div class="jp-component-header jp-component-header-left jp-call-header">
					<h2 class="jp-component-title">What Happens on The Initial Call?</h2>

					<div class="h3-small">
						<ul>
							<li>You talk with someone who also struggled with drugs or alcohol before</li>
							<li>You're never judged</li>
							<li>You're never pressured to commit to treatment here</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6">
				<div class="jp-call-image-wrapper">
					<!-- ONLY IMAGE -->
					<div class="jp-call-image">
						<img class="jp-call-image-image lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/call/call.jpg" alt="Call">
					</div>

					<!-- IMAGE AND VIDEO -->
					<!-- <a class="jp-call-image" data-toggle="modal" href="#call-video-modal">
						<img class="jp-call-image-image lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/call/call.jpg" alt="Call">

						<span class="jp-call-image-icon-wrapper">
							<span class="fas fa-play jp-call-image-icon"></span>
						</span>

						<span class="btn btn-white jp-call-image-button">Meet Lacey and Trey</span>
					</a> -->
				</div>
			</div>
		</div>
	</div>

	<div class="jp-call-wave-wrapper">
		<svg class="jp-call-wave" viewBox="0 0 1440 320" preserveAspectRatio="none">
			<path d="M0,128L120,154.7C240,181,480,235,720,240C960,245,1200,203,1320,181.3L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
		</svg>
	</div>
</section>

<section class="jp-component jp-component-no-padding jp-call-bottom">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-7">
				<div class="jp-call-bottom-review">
					<div class="row">
						<div class="col-12 col-md-auto">
							<div class="jp-call-bottom-review-image-wrapper">
								<span class="jp-call-bottom-review-image-radar lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/call/icon-radar.svg"></span>
								<span class="jp-call-bottom-review-image lazy-enhanced" data-src="<?php echo esc_attr( WP_UPLOAD_PATH ); ?>/2020/10/Felicia-Facebook-Profile.jpg"></span>
							</div>
						</div>

						<div class="col-12 col-md">
							<p class="h3-small jp-call-bottom-review-text"><strong>Felicia H.</strong> I called here hesitant but these people are LEGIT. the guy told me they could get me in TOMORROW but after hearing my story more said they might not be the best place for me and got me in contact with a rehab that works more with eating disorders. They could have taken my money but they didn’t do that, these people care.</p>
							<p class="jp-call-bottom-review-date">2w ago</p>
						</div>
					</div>

					<div class="jp-call-bottom-review-likes lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/call/icon-likes-2.svg">
						<data value="12">12</data>
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-5">
				<span class="jp-call-bottom-arrow lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/call/icon-arrow.svg"></span>
			</div>
		</div>
	</div>
</section>
