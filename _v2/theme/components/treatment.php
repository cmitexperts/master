<?php
/**
 * Treatment
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<section class="jp-component jp-treatment">
	<div class="container">
		<?php if ( ! isset( $context->only_treatment_bios ) || false === $context->only_treatment_bios ) : ?>
			<div class="row">
				<div class="col">
					<div class="jp-component-header">
						<h2 class="jp-component-title">Why Treatment Here Works</h2>
						<div class="h3 jp-component-subtitle">Whether JourneyPure is your first (and last) treatment experience, or you spent decades in and out of other facilities...you can feel peace again. Our four guiding principles are simple, yet game-changing.</div>
					</div>
				</div>
			</div>

			<div class="jp-treatment-list">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="jp-treatment-item">
							<span class="jp-treatment-item-icon lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/treatment/icon-phone.svg"></span>

							<div class="jp-treatment-item-body">
								<p class="h6 jp-treatment-item-title">Maintain Accountability for One Year</p>
								<p class="h3">Your <strong>Accountability Coach</strong> can be reached 24/7 through the <strong>alumni app</strong>. They've been where you are and can show you how to stay on track long after treatment here. The app also rewards you for making healthy choices.</p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6">
						<div class="jp-treatment-item">
							<span class="jp-treatment-item-icon lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/treatment/icon-lab.svg"></span>

							<div class="jp-treatment-item-body">
								<p class="h6 jp-treatment-item-title">Follow All Evidence-Based Research</p>
								<p class="h3">Effective treatment addresses the range of <strong>issues that hide behind alcohol and drugs</strong>. We incorporate the latest advances in addiction science and mental wellness and publish our own groundbreaking research.</p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6">
						<div class="jp-treatment-item">
							<span class="jp-treatment-item-icon lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/treatment/icon-team.svg"></span>

							<div class="jp-treatment-item-body">
								<p class="h6 jp-treatment-item-title">Hire Only Kind-Hearted Teammates</p>
								<p class="h3">You deserve <strong>individualized attention</strong> from experienced professionals who <strong>actually care</strong>. Our reputation and success rates attract the country's leading experts - from medical doctors and psychologists to art and equine therapists.</p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6">
						<div class="jp-treatment-item">
							<span class="jp-treatment-item-icon lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/treatment/icon-people.svg"></span>

							<div class="jp-treatment-item-body">
								<p class="h6 jp-treatment-item-title">Personalize Each Treatment Plan</p>
								<p class="h3">Beyond cognitive behavior group and individual therapies, you need access to tools that <strong>maximize your time here</strong>. From virtual-reality therapy for combat veterans to imago marriage counseling, we do what it takes to keep you healthy.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<div class="jp-treatment-bios">
			<div class="row">
				<?php foreach ( $context->treatment_bios as $bio ) : ?>
					<?php
						/** Set the range to start likes from if the object has never been like.
						 *  The total will be a random number between the range. If a specific number
						 *  is desired, then add the desired number as the min and max
						 */
						// $context->setInitialLikesStart( 54, 300 );
						$context->setInitialLikesStart( 0, 0 );
						$like_identifier = $bio->identifier;
						$total_likes     = $context->setLikes( $like_identifier );
					?>

					<div class="col-12 col-md-6 col-lg-3 <?php echo in_array( $bio->name, array( 'Caleb H.', 'Gregory C.' ), true ) ? 'd-none d-md-block' : ''; ?>">
						<div class="jp-treatment-bio">
							<?php if ( ! empty( $bio->location ) ) : ?>
								<a href="<?php echo esc_attr( $bio->location['link'] ); ?>" class="jp-treatment-bio-location"><?php echo esc_html( $bio->location['label'] ); ?></a>
							<?php endif; ?>

							<img class="jp-treatment-bio-image lazy-enhanced" height="292" width="292" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $bio->photo['image'] ); ?>">

							<div class="jp-treatment-bio-bottom">
								<div class="jp-treatment-bio-caption">
									<figcaption class="jp-treatment-bio-caption-name"><?php echo esc_html( $bio->name ); ?></figcaption>
									<span class="jp-treatment-bio-caption-sober">Sober <span> <?php echo esc_html( $bio->sober_since ); ?></span></span>
								</div>

								<span data-like-object="<?php echo esc_attr( $like_identifier ); ?>" class="jp-treatment-bio-like" data-placement="top" data-toggle="tooltip" data-placement="top" <?php echo ( $context->isLikedBySession( $like_identifier ) ) ? 'title="Already liked"' : 'title="Do you like?"'; ?>>
									<span class="jp-treatment-bio-like-icon lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/treatment/icon-like.svg"></span>
									<data value="<?php echo esc_attr( $total_likes ); ?>"><?php echo esc_html( $total_likes ); ?></data>
								</span>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</bios>
	</div>
</section>
