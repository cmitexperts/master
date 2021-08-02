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
			<div class="col col-12 col-lg-6">
				<h2 class="jp-highlights-legacy-title"><?php echo esc_html( $context->city ); ?> Clinic Highlights</h2>

				<ul class="jp-highlights-legacy-list">
					<li class="jp-highlights-legacy-list-item">
						<div class="jp-highlights-legacy-list-item-icon">
							<span class="fas fa-check "></span>
						</div>
						<div class="jp-highlights-legacy-list-item-content-wrapper">
							<span class="h5 jp-highlights-legacy-list-item-title">Works with your schedule</span>
							<p class="jp-highlights-legacy-list-item-text">Convenient morning, evening and <a
										href="<?php echo get_home_url() . '/virtual-rehab/' ?>">virtual appointments</a>
							</p>
						</div>
					</li>

					<li class="jp-highlights-legacy-list-item">
						<div class="jp-highlights-legacy-list-item-icon">
							<span class="fas fa-check "></span>
						</div>
						<div class="jp-highlights-legacy-list-item-content-wrapper">
							<span class="h5 jp-highlights-legacy-list-item-title">95% satisfaction rating</span>
							<p class="jp-highlights-legacy-list-item-text">And, success rates 2x higher than the
								national average</p>
						</div>
					</li>

					<li class="jp-highlights-legacy-list-item">
						<div class="jp-highlights-legacy-list-item-icon">
							<span class="fas fa-check "></span>
						</div>
						<div class="jp-highlights-legacy-list-item-content-wrapper">
							<span class="h5 jp-highlights-legacy-list-item-title">A Treatment Team That Actually Cares</span>
							<p class="jp-highlights-legacy-list-item-text">Attack clinical, brain and life issues with a comprehensive team of experts that are in recovery too</p>
						</div>
					</li>

					<li class="jp-highlights-legacy-list-item">
						<div class="jp-highlights-legacy-list-item-icon">
							<span class="fas fa-check "></span>
						</div>
						<div class="jp-highlights-legacy-list-item-content-wrapper">
							<span class="h5 jp-highlights-legacy-list-item-title">In-network with almost every insurance</span>
							<p class="jp-highlights-legacy-list-item-text">So any cost to you is as low as possible</p>
						</div>
					</li>
				</ul>

				<div class="jp-highlights-legacy-img-logos-wrapper">
					<img class="jp-highlights-legacy-img-logos lazy-enhanced" height="45.44" width="303"
						 data-src="<?php echo esc_attr( $context->highlights_insurers_image_1['url'] ); ?>"
						 alt="<?php echo esc_attr( $context->highlights_insurers_image_1['alt'] ); ?>">
					<img class="jp-highlights-legacy-img-logos lazy-enhanced" height="45.44" width="303"
						 data-src="<?php echo esc_attr( $context->highlights_insurers_image_2['url'] ); ?>"
						 alt="<?php echo esc_attr( $context->highlights_insurers_image_2['alt'] ); ?>">
				</div>

				<a class="btn jp-highlights-legacy-button frontman-cta-insurance"><span class="fas fa-id-card"></span>Check
					Insurance</a>
			</div>

			<div class="col col-12 col-lg-6">
				<?php
				$images = get_field( 'highlights_gallery' );

				if ( $images ) : ?>
					<ul class="jp-highlights-legacy-gallery">
						<li class="jp-highlights-legacy-gallery-image jp-highlights-legacy-gallery-image-0"
							style="background-image: url('<?php echo esc_url( $images[0]["url"] ); ?>');" role="img"
							aria-label="<?php echo esc_url( $images[0]["alt"] ); ?>"></li>
						<li class="jp-highlights-legacy-gallery-image jp-highlights-legacy-gallery-image-1"
							style="background-image: url('<?php echo esc_url( $images[1]["url"] ); ?>');" role="img"
							aria-label="<?php echo esc_url( $images[1]["alt"] ); ?>"></li>
						<li class="jp-highlights-legacy-gallery-image jp-highlights-legacy-gallery-image-2"
							style="background-image: url('<?php echo esc_url( $images[2]["url"] ); ?>');" role="img"
							aria-label="<?php echo esc_url( $images[2]["alt"] ); ?>"></li>
						<li class="jp-highlights-legacy-gallery-image jp-highlights-legacy-gallery-image-3"
							style="background-image: url('<?php echo esc_url( $images[3]["url"] ); ?>');" role="img"
							aria-label="<?php echo esc_url( $images[3]["alt"] ); ?>"></li>
						<li class="jp-highlights-legacy-gallery-image jp-highlights-legacy-gallery-image-4"
							style="background-image: url('<?php echo esc_url( $images[4]["url"] ); ?>');" role="img"
							aria-label="<?php echo esc_url( $images[4]["alt"] ); ?>"></li>
						<li class="jp-highlights-legacy-gallery-image jp-highlights-legacy-gallery-image-5"
							style="background-image: url('<?php echo esc_url( $images[5]["url"] ); ?>');" role="img"
							aria-label="<?php echo esc_url( $images[5]["alt"] ); ?>"></li>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
