<?php
/**
 * LEGACY Locations template
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

// WordPress functions file.
require_once get_stylesheet_directory() . '/_v2/theme/functions.php';

// NEW CODE, for when the sections are migrated to use the new pattern
// require_once get_stylesheet_directory() . '/classes/LocationsPage2.php';
// global $context;
// $context = new Pages\LocationsPage2();

// LEGACY CODE
require_once get_stylesheet_directory() . '/classes/LocationsPage2.php';
$locations = new Pages\LocationsPage2();

// Custom styles.
define( 'STYLESHEET_NAME_V2', 'template-legacy-locations' );

// Header.
get_header( 'v2' );
?>

<!-- TEMPLATE: LEGACY Locations -->

<!-- <div id="jp-loc2" class="jp-loc2"> -->
<div id="legacy-locations" class="jp-legacy-locations">

	<!-- SECTION: Masthead -->
	<section class="jp-legacy-locations-section jp-legacy-locations-masthead lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2020/07/location-photos-KY-TN-FL.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 offset-lg-2">
					<div class="jp-legacy-locations-masthead-content">
						<h1 class="jp-legacy-locations-masthead-title">11 Rehab &amp; Clinic Locations</h1>
						<p class="h3 jp-legacy-locations-masthead-subtitle">Whether you're just realizing there's a problem or you've been in and out of other facilities for years, we can help. People come here from as far away as Alaska because treatment here works.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION: Masthead -->

	<!-- SECTION: Cards -->
	<section class="jp-legacy-locations-section jp-legacy-locations-cards">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="jp-legacy-locations-cards-title">The Best In-Network Rehabs in the Country</h2>
					<p class="jp-legacy-locations-table-subtitle">Rehab is the most effective level of treatment.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-lg-6">
					<a class="jp-legacy-locations-cards-card" href="/locations/kentucky/">
						<span class="jp-legacy-locations-cards-card-img-tag">Kentucky</span>
						<img class="jp-legacy-locations-cards-card-img lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2019/10/JPBG43-1-1024x683.jpg" alt="Kentucky Alcohol &amp; Drug Rehab">

						<div class="jp-legacy-locations-cards-card-inner">
							<h5>Kentucky Alcohol &amp; Drug Rehab</h3>
							<p class="jp-legacy-locations-cards-card-subtitle">Come from any where across the state to get your life back on track (for good).</p>

							<div class="jp-legacy-locations-cards-card-footer">
								<span class="jp-legacy-locations-cards-card-learn-more"><strong>Learn More</strong></span>

								<div class="jp-legacy-locations-cards-card-stars">
									<span class="jp-legacy-locations-cards-card-star">4.8</span>
									<span class="fas fa-star"></span>
									<span class="fas fa-star"></span>
									<span class="fas fa-star"></span>
									<span class="fas fa-star"></span>
									<span class="fas fa-star"></span>
									<span class="jp-legacy-locations-cards-card-count">(55)</span>
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="col-12 col-lg-6">
					<a class="jp-legacy-locations-cards-card" href="/locations/tennessee/">
						<span class="jp-legacy-locations-cards-card-img-tag">Tennessee</span>
						<img class="jp-legacy-locations-cards-card-img lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2019/11/murfreesboro-tn-inpatient-rehab.jpg" alt="Tennessee Alcohol &amp; Drug Rehab">

						<div class="jp-legacy-locations-cards-card-inner">
							<h5>Tennessee Alcohol &amp; Drug Rehab</h3>
							<p class="jp-legacy-locations-cards-card-subtitle">Choose our flagship location and the most prestigious rehab in the state.</p>

							<div class="jp-legacy-locations-cards-card-footer">
								<span class="jp-legacy-locations-cards-card-learn-more"><strong>Learn More</strong></span>

								<div class="jp-legacy-locations-cards-card-stars">
									<span class="jp-legacy-locations-cards-card-star">4.4</span>
									<span class="fas fa-star"></span>
									<span class="fas fa-star"></span>
									<span class="fas fa-star"></span>
									<span class="fas fa-star"></span>
									<span class="fas fa-star-half"></span>
									<span class="jp-legacy-locations-cards-card-count">(91)</span>
								</div>
							</div>
						</div>
					</a>

					<div class="jp-legacy-locations-cards-card-footer">
						<a class="jp-legacy-locations-cards-card-learn-more extra-link" href="/locations/knoxville/">Tenncare Click Here</a>
					</div>
				</div>

				<div class="col-12 col-lg-4" style="display:none;">
					<a class="jp-legacy-locations-cards-card" href="/locations/florida/">
						<span class="jp-legacy-locations-cards-card-img-tag">Florida</span>
						<img class="jp-legacy-locations-cards-card-img lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2020/06/journeypure-panama-city-beach-residential-1024x683.jpg" alt="Florida Alcohol &amp; Drug Rehab">

						<div class="jp-legacy-locations-cards-card-inner">
							<h5>Florida Alcohol &amp; Drug Rehab</h3>
							<p class="jp-legacy-locations-cards-card-subtitle">Access the best treatment program in the country overlooking the ocean.</p>

							<div class="jp-legacy-locations-cards-card-footer">
								<span class="jp-legacy-locations-cards-card-learn-more"><strong>Learn More</strong></span>

								<div class="jp-legacy-locations-cards-card-stars">
									<span class="jp-legacy-locations-cards-card-star">4.5</span>
									<span class="fas fa-star"></span>
									<span class="fas fa-star"></span>
									<span class="fas fa-star"></span>
									<span class="fas fa-star"></span>
									<span class="fas fa-star-half"></span>
									<span class="jp-legacy-locations-cards-card-count">(129)</span>
								</div>
							</div>
						</div>
					</a>

					<div class="jp-legacy-locations-cards-card-footer text-center">
						<a class="jp-legacy-locations-cards-card-learn-more extra-link" href="/locations/military-program/">Military Click Here</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION: Cards -->

	<!-- SECTION: Table -->
	<section class="jp-legacy-locations-section jp-legacy-locations-table">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12">
					<h3 class="jp-legacy-locations-table-title">9 Outpatient &amp; Suboxone Clinics</h3>
					<p class="jp-legacy-locations-table-subtitle">Live your life, while you also work to save it.</p>
				</div>
			</div>

			<div class="jp-legacy-locations-table-cards">
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="jp-legacy-locations-table-card">
							<img class="jp-legacy-locations-table-card-img lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2020/07/jp-icon-KY-180x180-1.png" alt="<?php echo esc_attr( $locations->cards_1_title ); ?>">
							<h5 class="jp-legacy-locations-table-card-title"><?php echo esc_html( $locations->cards_1_title ); ?></h5>

							<ul class="jp-legacy-locations-table-card-list">
								<?php if ( ! empty( $locations->cards_1 ) ) : ?>
									<?php foreach ( $locations->cards_1 as $card ) : ?>
										<li class="jp-legacy-locations-table-card-list-item">
											<a class="jp-legacy-locations-table-card-place" <?php if ( ! empty( $card['link'] ) ) echo ( 'href="' . esc_attr( $card['link'] ) . '"' ); ?>>
												<h4 class="jp-legacy-locations-table-card-place-title"><?php echo esc_html( $card['title'] ); ?> <span class="fas fa-info-circle"></span></h4>

												<div class="jp-legacy-locations-table-card-place-stars">
													<span class="jp-legacy-locations-table-card-place-star"><?php echo esc_html( $card['ratings']['number_rating'] ); ?></span>
													<span class="fas fa-star"></span>
													<span class="fas fa-star"></span>

													<?php if ( floatval( $card['ratings']['number_rating'] ) <= 2.5 ) : ?>
														<span class="fas fa-star-half"></span>
													<?php elseif ( floatval( $card['ratings']['number_rating'] ) <= 3 ) : ?>
														<span class="fas fa-star"></span>
													<?php elseif ( floatval( $card['ratings']['number_rating'] ) <= 3.5 ) : ?>
														<span class="fas fa-star"></span>
														<span class="fas fa-star-half"></span>
													<?php elseif ( floatval( $card['ratings']['number_rating'] ) <= 4 ) : ?>
														<span class="fas fa-star"></span>
														<span class="fas fa-star"></span>
													<?php elseif ( floatval( $card['ratings']['number_rating'] ) <= 4.5 ) : ?>
														<span class="fas fa-star"></span>
														<span class="fas fa-star"></span>
														<span class="fas fa-star-half"></span>
													<?php else : ?>
														<span class="fas fa-star"></span>
														<span class="fas fa-star"></span>
														<span class="fas fa-star"></span>
													<?php endif; ?>

													<span class="jp-legacy-locations-table-card-place-count">(<?php echo esc_html( $card['ratings']['count'] ); ?>)</span>
												</div>

												<p class="jp-legacy-locations-table-card-place-address"><?php echo esc_html( $card['address'] ); ?></p>
											</a>
										</li>
									<?php endforeach; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>

					<div class="col-12 col-lg-6">
						<div class="jp-legacy-locations-table-card">
							<img class="jp-legacy-locations-table-card-img lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2020/07/jp-icon-TN-180x180-1.png" alt="<?php echo esc_attr( $locations->cards_2_title ); ?>">
							<h5 class="jp-legacy-locations-table-card-title"><?php echo esc_html( $locations->cards_2_title ); ?></h5>

							<ul class="jp-legacy-locations-table-card-list">
								<?php if ( ! empty( $locations->cards_2 ) ) : ?>
									<?php foreach ( $locations->cards_2 as $card ) : ?>
										<li class="jp-legacy-locations-table-card-list-item">
											<a class="jp-legacy-locations-table-card-place" <?php if ( ! empty( $card['link'] ) ) echo ( 'href="' . esc_attr( $card['link'] ) . '"' ); ?>>
												<h4 class="jp-legacy-locations-table-card-place-title"><?php echo esc_html( $card['title'] ); ?> <span class="fas fa-info-circle"></span></h4>

												<div class="jp-legacy-locations-table-card-place-stars">
													<span class="jp-legacy-locations-table-card-place-star"><?php echo esc_html( $card['ratings']['number_rating'] ); ?></span>
													<span class="fas fa-star"></span>
													<span class="fas fa-star"></span>

													<?php if ( floatval( $card['ratings']['number_rating'] ) <= 2.5 ) : ?>
														<span class="fas fa-star-half"></span>
													<?php elseif ( floatval( $card['ratings']['number_rating'] ) <= 3 ) : ?>
														<span class="fas fa-star"></span>
													<?php elseif ( floatval( $card['ratings']['number_rating'] ) <= 3.5 ) : ?>
														<span class="fas fa-star"></span>
														<span class="fas fa-star-half"></span>
													<?php elseif ( floatval( $card['ratings']['number_rating'] ) <= 4 ) : ?>
														<span class="fas fa-star"></span>
														<span class="fas fa-star"></span>
													<?php elseif ( floatval( $card['ratings']['number_rating'] ) <= 4.5 ) : ?>
														<span class="fas fa-star"></span>
														<span class="fas fa-star"></span>
														<span class="fas fa-star-half"></span>
													<?php else : ?>
														<span class="fas fa-star"></span>
														<span class="fas fa-star"></span>
														<span class="fas fa-star"></span>
													<?php endif; ?>

													<span class="jp-legacy-locations-table-card-place-count">(<?php echo esc_html( $card['ratings']['count'] ); ?>)</span>
												</div>

												<p class="jp-legacy-locations-table-card-place-address"><?php echo esc_html( $card['address'] ); ?></p>
											</a>
										</li>
									<?php endforeach; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>

					<div class="col-12 col-lg-4" style="display:none;">
						<div class="jp-legacy-locations-table-card">
							<img class="jp-legacy-locations-table-card-img lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2020/07/FLjp-icon-TN-180x180-1.png" alt="<?php echo esc_attr( $locations->cards_3_title ); ?>">
							<h5 class="jp-legacy-locations-table-card-title"><?php echo esc_html( $locations->cards_3_title ); ?></h5>

							<ul class="jp-legacy-locations-table-card-list">
								<?php if ( ! empty( $locations->cards_3 ) ) : ?>
									<?php foreach ( $locations->cards_3 as $card ) : ?>
										<li class="jp-legacy-locations-table-card-list-item">
											<a class="jp-legacy-locations-table-card-place" <?php if ( ! empty( $card['link'] ) ) echo ( 'href="' . esc_attr( $card['link'] ) . '"' ); ?>>
												<h4 class="jp-legacy-locations-table-card-place-title"><?php echo esc_html( $card['title'] ); ?> <span class="fas fa-info-circle"></span></h4>

												<div class="jp-legacy-locations-table-card-place-stars">
													<span class="jp-legacy-locations-table-card-place-star"><?php echo esc_html( $card['ratings']['number_rating'] ); ?></span>
													<span class="fas fa-star"></span>
													<span class="fas fa-star"></span>

													<?php if ( floatval( $card['ratings']['number_rating'] ) <= 2.5 ) : ?>
														<span class="fas fa-star-half"></span>
													<?php elseif ( floatval( $card['ratings']['number_rating'] ) <= 3 ) : ?>
														<span class="fas fa-star"></span>
													<?php elseif ( floatval( $card['ratings']['number_rating'] ) <= 3.5 ) : ?>
														<span class="fas fa-star"></span>
														<span class="fas fa-star-half"></span>
													<?php elseif ( floatval( $card['ratings']['number_rating'] ) <= 4 ) : ?>
														<span class="fas fa-star"></span>
														<span class="fas fa-star"></span>
													<?php elseif ( floatval( $card['ratings']['number_rating'] ) <= 4.5 ) : ?>
														<span class="fas fa-star"></span>
														<span class="fas fa-star"></span>
														<span class="fas fa-star-half"></span>
													<?php else : ?>
														<span class="fas fa-star"></span>
														<span class="fas fa-star"></span>
														<span class="fas fa-star"></span>
													<?php endif; ?>

													<span class="jp-legacy-locations-table-card-place-count">(<?php echo esc_html( $card['ratings']['count'] ); ?>)</span>
												</div>

												<p class="jp-legacy-locations-table-card-place-address"><?php echo esc_html( $card['address'] ); ?></p>
											</a>
										</li>
									<?php endforeach; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION: Table -->

	<!-- SECTION: FAQ -->
	<?php if ( ! empty( $locations->faq ) ) : ?>
		<section class="jp-legacy-locations-section jp-legacy-locations-faq">
			<div class="container">
				<?php if ( ! empty( $locations->faq->heading ) || ! empty( $locations->faq->subheading ) ) : ?>
					<div class="heading">
						<h2>
							<?php echo esc_html( $locations->faq->heading ); ?>
						</h2>

						<?php if ( ! empty( $locations->faq->subheading ) ) : ?>
							<p class="h3 lead"><?php echo esc_html( $locations->faq->subheading ); ?></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if ( ! empty( $locations->faq->faqs ) ) : ?>
					<div class="faqs">
						<div class="accordion" id="faq">
							<?php foreach ( $locations->faq->faqs as $index => $faq ) : ?>
								<div class="card">
									<div class="card-header <?php echo ( 0 !== $index ) ? 'collapsed' : ''; ?>" data-toggle="collapse" data-target="#l-faq-<?php echo esc_attr( $index ); ?>" aria-expanded="true" aria-controls="l-faq-<?php echo esc_attr( $index ); ?>" id="l-faq-heading-<?php echo esc_attr( $index ); ?>">
										<div class="question-box">
											<div class="icon">
												<i class="fas fa-plus-circle off"></i>
												<i class="fas fa-minus-circle on"></i>
											</div>

											<div class="title">
												<h5 class="card-title"><?php echo esc_html( $faq->question ); ?></h5>
											</div>
										</div>
									</div>

									<div id="l-faq-<?php echo esc_attr( $index ); ?>" class="collapse <?php echo ( 0 === $index ) ? 'show' : ''; ?>" aria-labelledby="l-faq-heading-<?php echo esc_attr( $index ); ?>" data-parent="#faq">
										<div class="card-body">
											<?php echo wp_kses_post( $faq->answer ); ?>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>

						<div class="ask-a-question" style="display:none;">
							<span class="btn btn-primary" data-toggle="modal" data-target="#user-question-form-container">Ask a question</span>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>
	<!-- /SECTION: FAQ -->

	<!-- COMPONENT: Footer CTA -->
	<?php require_once THEME_PATH . '/_v2/theme/components/footer-cta.php'; ?>
	<!-- /COMPONENT: Footer CTA -->

</div>

<!-- /TEMPLATE: LEGACY Locations -->

<?php
// Footer.
get_footer( 'v2' );
