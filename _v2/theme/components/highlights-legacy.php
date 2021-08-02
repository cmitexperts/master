<?php
/**
 * Highlights Legacy
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<section class="jp-component jp-highlights-legacy" id="highlights">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-6 offset-lg-1">
				<h2 class="jp-highlights-legacy-title"><?php echo esc_html( $context->city ); ?> Clinic Highlights</h2>

				<ul class="jp-highlights-legacy-list">
					<li class="jp-highlights-legacy-list-item">
						<span class="far fa-check-circle jp-highlights-legacy-list-item-icon"></span>
						<span class="h5 jp-highlights-legacy-list-item-title">Works with your schedule</span>
						<p class="jp-highlights-legacy-list-item-text">Convenient morning, evening and <u>virtual</u> appointments</p>
					</li>

					<li class="jp-highlights-legacy-list-item">
						<span class="far fa-check-circle jp-highlights-legacy-list-item-icon"></span>
						<span class="h5 jp-highlights-legacy-list-item-title">95% satisfaction rating</span>
						<p class="jp-highlights-legacy-list-item-text">And, <i>success rates 2x higher</i> than the national average</p>
					</li>

					<li class="jp-highlights-legacy-list-item">
						<span class="far fa-check-circle jp-highlights-legacy-list-item-icon"></span>
						<span class="h5 jp-highlights-legacy-list-item-title">A treatment team that puts you first</span>
						<p class="jp-highlights-legacy-list-item-text">Attack clinical, brain and life issues with a full team that's in recovery too</p>
					</li>

					<li class="jp-highlights-legacy-list-item">
						<span class="far fa-check-circle jp-highlights-legacy-list-item-icon"></span>
						<span class="h5 jp-highlights-legacy-list-item-title">In-network with almost every insurance</span>
						<p class="jp-highlights-legacy-list-item-text">So any cost to you is as low as possible</p>
					</li>
				</ul>

				<div class="jp-highlights-legacy-img-logos-wrapper">
					<img class="jp-highlights-legacy-img-logos lazy-enhanced" height="45.44" width="303" data-src="<?php echo esc_attr( $context->highlights_insurers_image_1['url'] ); ?>" alt="<?php echo esc_attr( $context->highlights_insurers_image_1['alt'] ); ?>">
					<img class="jp-highlights-legacy-img-logos lazy-enhanced" height="45.44" width="303" data-src="<?php echo esc_attr( $context->highlights_insurers_image_2['url'] ); ?>" alt="<?php echo esc_attr( $context->highlights_insurers_image_2['alt'] ); ?>">
				</div>

				<!-- <div class="jp-highlights-legacy-button-wrapper">
					<button type="button" data-toggle="modal" data-target="#main-insurance-form" class="btn btn-cta jp-highlights-legacy-button"><span class="fas fa-id-card"></span> Check Insurance</button>
				</div> -->
			</div>

			<div class="col-12 col-md-6 col-lg-4">
				<img class="jp-highlights-legacy-img-faces lazy-enhanced" height="378.17" width="416" data-src="<?php echo esc_attr( $context->highlights_main_image['url'] ); ?>" alt="<?php echo esc_attr( $context->highlights_main_image['alt'] ); ?>">
			</div>
		</div>
	</div>
</section>
