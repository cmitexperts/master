<?php
/**
 * Masthead V2
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>
<section class="jp-component jp-masthead-v2">
	<div class="jp-masthead-v2-backgroundsss">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="jp-component-header jp-masthead-v2-header">
						<?php if ( ! empty( $context->above_fold->h1 ) ) : ?>
							<h1 class="jp-component-h1 jp-masthead-v2-h1"><?php echo wp_kses_post( $context->above_fold->h1 ); ?></h1>
						<?php endif; ?>

						<?php if ( ! empty( $context->above_fold->heading ) ) : ?>
							<h2 class="jp-component-title jp-masthead-v2-title"><?php echo wp_kses_post( $context->above_fold->heading ); ?></h2>
						<?php endif; ?>

						<?php if ( ! empty( $context->above_fold->subheading ) ) : ?>
							<div class="h3 jp-component-subtitle jp-masthead-v2-subtitle"><?php echo wp_kses_post( $context->above_fold->subheading ); ?></div>
						<?php endif; ?>

						<?php if ( ! empty( $context->above_fold->youtube_video_id ) ) : ?>
							<a class="btn btn-blue btn-large jp-masthead-v2-button" data-toggle="modal"
							   href="#masthead-2-modal"><i class="fas fa-play-circle"></i> Watch the 2-Min. Video</a>
						<?php else : ?>
							<a class="btn btn-blue btn-large jp-masthead-v2-button jp-masthead-v2-go-down" href="#">Watch
								the 2-Min. Video</a>
						<?php endif; ?>
						<?php
						$above_fold                    = get_field( 'above_fold' );
						$location_rating_id            = $above_fold ['location_rating'];
						$location_rating_source        = get_field( 'image', $location_rating_id );
						$location_rating_stars         = get_field( 'line_2_stars', $location_rating_id );
						$location_rating_based_on      = get_field( 'line_3', $location_rating_id );
						$location_rating_review_number = get_field( 'number_rating', $location_rating_id );
						?>
						<?php if ( ! empty( $location_rating_id ) ) : ?>
							<div class="jp-masthead-v2-rating">
								<div class="jp-masthead-v2-rating-image">
									<img src="<?php echo $location_rating_source['url']; ?>"
										 alt="<?php echo $location_rating_source['alt']; ?>">
								</div>
								<div class="col">
									<div class="row">
										<p class="jp-masthead-v2-rating-stars">
											<?php
											if ( $location_rating_stars >= 4.1 && $location_rating_stars <= 4.7 ) {
												$location_rating_stars = 4.5;
											} else if ( $location_rating_stars > 4.7 ) {
												$location_rating_stars = 5;
											}
											for ( $i = 1; $i <= 5; $i ++ ) {
												if ( $location_rating_stars >= $i ) {
													echo '<span class="fas fa-star jp-masthead-v2-rating-star"></span>';
												} else if ( $i - $location_rating_stars == 0.5 ) {
													echo '<span class="fas fa-star-half jp-masthead-v2-rating-star"></span>';
												}
											}
											?>
										</p>
										<span class="jp-masthead-v2-rating-average"><?php echo $location_rating_review_number; ?></span>
									</div>
									<p class="jp-masthead-v2-rating-text"><?php echo $location_rating_based_on; ?></p>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="col jp-masthead-v2-image-wrapper">
					<?php
					$above_fold  = get_field( 'above_fold' );
					$image_boxes = $above_fold ['locations_image_boxes'];
					?>

					<a class="jp-masthead-v2-image jp-masthead-v2-image-one"
					   href="#masthead-2-modal"
					   data-toggle="modal"
					   style="background-image: url('<?php echo $image_boxes['locations_box_1_featured image']['url']; ?>');"
					   role="img" aria-label="<?php echo $image_boxes['locations_box_1_featured image']['alt']; ?>">
						<?php if ( ! empty( $image_boxes['locations_box_1_title'] ) || ! empty( $image_boxes['locations_box_1_subtitle'] ) ) : ?>
							<div class="jp-masthead-v2-image-text">
								<?php if ( ! empty( $image_boxes['locations_box_1_title'] ) ) : ?>
									<p class="jp-masthead-v2-image-title"><?php echo $image_boxes['locations_box_1_title']; ?></p>
								<?php endif; ?>
								<?php if ( ! empty( $image_boxes['locations_box_1_title'] ) ) : ?>
									<p class="jp-masthead-v2-image-subtitle"><?php echo $image_boxes['locations_box_1_subtitle']; ?></p>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</a>
					<a class="jp-masthead-v2-image jp-masthead-v2-image-two"
						 href="#masthead-2-modal"
						 data-toggle="modal"
						 style="background-image: url('<?php echo $image_boxes['locations_box_2_featured image']['url']; ?>');"
						 role="img" aria-label="<?php echo $image_boxes['locations_box_2_featured image']['alt']; ?>">
						<?php if ( ! empty( $image_boxes['locations_box_2_title'] ) || ! empty( $image_boxes['locations_box_2_subtitle'] ) ) : ?>
							<div class="jp-masthead-v2-image-text">
								<?php if ( ! empty( $image_boxes['locations_box_2_title'] ) ) : ?>
									<p class="jp-masthead-v2-image-title"><?php echo $image_boxes['locations_box_2_title']; ?></p>
								<?php endif; ?>
								<?php if ( ! empty( $image_boxes['locations_box_2_subtitle'] ) ) : ?>
									<p class="jp-masthead-v2-image-subtitle"><?php echo $image_boxes['locations_box_2_subtitle']; ?></p>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</a>
					<a class="jp-masthead-v2-image jp-masthead-v2-image-three"
						 href="#masthead-2-modal"
						 data-toggle="modal"
						 style="background-image: url('<?php echo $image_boxes['locations_box_3_featured image']['url']; ?>');"
						 role="img" aria-label="<?php echo $image_boxes['locations_box_3_featured image']['alt']; ?>">
						<?php if ( ! empty( $image_boxes['locations_box_3_title'] ) || ! empty( $image_boxes['locations_box_3_subtitle'] ) ) : ?>
							<div class="jp-masthead-v2-image-text">
								<?php if ( ! empty( $image_boxes['locations_box_3_title'] ) ) : ?>
									<p class="jp-masthead-v2-image-title"><p
											class="jp-masthead-v2-image-title"><?php echo $image_boxes['locations_box_3_title']; ?></p>
								<?php endif; ?>
								<?php if ( ! empty( $image_boxes['locations_box_3_subtitle'] ) ) : ?>
									<p class="jp-masthead-v2-image-subtitle"><?php echo $image_boxes['locations_box_3_subtitle']; ?></p>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</a>
					<a class="jp-masthead-v2-image jp-masthead-v2-image-four"
						 href="#masthead-2-modal"
						 data-toggle="modal"
						 style="background-image: url('<?php echo $image_boxes['locations_box_4_featured image']['url']; ?>');"
						 role="img" aria-label="<?php echo $image_boxes['locations_box_4_featured image']['alt']; ?>">
						<?php if ( ! empty( $image_boxes['locations_box_4_title'] ) || ! empty( $image_boxes['locations_box_4_subtitle'] ) ) : ?>
							<div class="jp-masthead-v2-image-text">
								<?php if ( ! empty( $image_boxes['locations_box_4_title'] ) ) : ?>
									<p class="jp-masthead-v2-image-title"><?php echo $image_boxes['locations_box_4_title']; ?></p>
								<?php endif; ?>
								<?php if ( ! empty( $image_boxes['locations_box_4_subtitle'] ) ) : ?>
									<p class="jp-masthead-v2-image-subtitle"><?php echo $image_boxes['locations_box_4_subtitle']; ?></p>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="jp-masthead-v2-highlight jp-component jp-desktop">
					<div class="container">
						<div class="col">
							<div class="jp-masthead-v2-highlight-number-outer-wrapper">
								<div class="jp-masthead-v2-highlight-number-inner-wrapper">
									<div class="jp-masthead-v2-highlight-number">
										2<span class="jp-masthead-v2-highlight-multiplier">x</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="jp-component-header jp-masthead-v2-highlight-header">
								<?php if ( get_field( 'locations_under_header_text' ) ) : ?>
									<div class="jp-masthead-v2-highlight-text">
										<?php the_field( 'locations_under_header_text' ); ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="col">
							<div class="jp-masthead-v2-highlight-logo">
								<img src="<?php echo get_stylesheet_directory_uri() . '/_v2/theme/assets/img/single-locations/nih-logo-reverse.png'; ?>">
								<p>National Institute on Drug Abuse</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="jp-masthead-v2-highlight jp-component jp-mobile">
	<div class="jp-subsection top">
		<div class="container">
			<div class="jp-component-header jp-masthead-v2-highlight-header">
				<?php if ( get_field( 'locations_under_header_text' ) ) : ?>
					<div class="jp-masthead-v2-highlight-text">
						<?php the_field( 'locations_under_header_text' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="jp-triangle"></div>
	</div>
	<div class="jp-subsection bottom">
		<div class="container">
			<div class="jp-masthead-v2-highlight-logo">
				<img src="<?php echo get_stylesheet_directory_uri() . '/_v2/theme/assets/img/single-locations/nih-logo-reverse.png'; ?>">
				<p>National Institute on Drug Abuse</p>
			</div>
		</div>
	</div>
</div>
