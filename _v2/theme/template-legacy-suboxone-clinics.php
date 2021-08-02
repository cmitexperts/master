<?php
/**
 * LEGACY Suboxone Clinics template
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

// WordPress functions file.
require_once get_stylesheet_directory() . '/_v2/theme/functions.php';

// NEW CODE, for when the sections are migrated to use the new pattern
// require_once get_stylesheet_directory() . '/classes/OutpatientLocations2.php';
// global $context;
// $context = new Pages\Outpatient2();

// LEGACY CODE
require_once get_stylesheet_directory() . '/classes/OutpatientLocations2.php';
$outpatient_locations = new Pages\Outpatient2();

// Custom styles.
define( 'STYLESHEET_NAME_V2', 'template-legacy-suboxone-clinics' );

// Header.
get_header( 'v2' );
?>

<!-- TEMPLATE: LEGACY Suboxone Clinics -->

<!-- <div id="jp-outpatient2" class="jp-outpatient2"> -->
<div id="legacy-suboxone-clinics" class="jp-legacy-suboxone-clinics">

	<!-- SECTION: Top Section (Above Fold / Masthead) -->
	<section class="above-fold">
		<div class="default-container x-loc lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2020/07/suboxone-clinic-background-iphone-1.png">
			<div class="background-fade">
				<div class="content">
					<h1 class="heading">Suboxone Clinics</h1>
					<hr>

					<div class="feature">
						<div class="row">
							<div class="col-lg-12 col-sm-12 top-text">
								<div class="card transparent">
									<div class="card-body text-center">
										<p class="h3">The science of addiction medicine has advanced exponentially in the last decade. You can <b>live without feeling sick, high or constantly distracted</b>. Start Suboxone treatment today in Tennessee, Kentucky &amp; Florida or <u>fully virtual</u>.</p>
									</div>

									<?php if ( $outpatient_locations->ratings ) : ?>
										<div class="rating-section">
											<div class="row g-0">
												<?php foreach ( $outpatient_locations->ratings as $rating ) : ?>
													<div class="col-md-6 i-rating">
														<div class="ratings default inline lineup source-<?php echo esc_attr( sanitize_title( $rating->line_1 ) ); ?>">
															<div class="row g-0 align-items-center">
																<div class="col-2">
																	<img class="lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $rating->image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( get_post_meta( $rating->image['ID'], '_wp_attachment_image_alt', true ) ); ?>">
																</div>

																<div class="col-10">
																	<div class="content">
																		<?php if ( $rating->line_1 ) : ?>
																			<p><?php echo esc_html( $rating->line_1 ); ?></p>
																		<?php endif; ?>

																		<?php if ( 'stars' === $rating->controller ) : ?>
																			<?php for ( $i = 0; $i < $rating->stars; $i++ ) : ?>
																				<i class="fas fa-star"></i>
																			<?php endfor; ?>

																			<span class="star-txt-color"><?php echo esc_html( $rating->number_rating ); ?></span>
																		<?php else : ?>
																			<p class="text-value"><?php echo esc_html( $rating->line_2_text ); ?></p>
																		<?php endif; ?>

																		<?php if ( $rating->line_3 ) : ?>
																			<p class="sub"><?php echo esc_html( $rating->line_3 ); ?></p>
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
								</div>
							</div>

							<div class="col-lg-12 col-sm-12 d-flex align-items-stretch youtube-video-context">
								<div class="card card-body h-100 justify-content-center transparent youtube-video-item" style="width: 100%;">
									<div class="ratio ratio-16x9 youtube-video-place youtube-video-cta lazy-enhanced" data-src="/wp-content/uploads/2020/07/SL4drhersh.png" data-url-value="https://www.youtube.com/embed/PQG6dqjlKNI?rel=0&showinfo=0&autoplay=1&cc_load_policy=1">
										<span class="play-button"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION: Top Section (Above Fold / Masthead) -->

	<!-- SECTION: Highlights -->
	<section class="jp-legacy-suboxone-clinics-section jp-legacy-suboxone-clinics-highlights">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-6 offset-lg-1">
					<h2 class="jp-legacy-suboxone-clinics-highlights-title">The <i>Easiest</i> Way to Start to Feel Better</h2>

					<ul class="jp-legacy-suboxone-clinics-highlights-list">
						<li class="jp-legacy-suboxone-clinics-highlights-list-item">
							<span class="far fa-check-circle jp-legacy-suboxone-clinics-highlights-list-item-icon"></span>
							<span class="jp-legacy-suboxone-clinics-highlights-list-item-title">Fully Virtual Options</span>
							<p class="jp-legacy-suboxone-clinics-highlights-list-item-text">You never have to leave your house for an appointment.</p>
						</li>

						<li class="jp-legacy-suboxone-clinics-highlights-list-item">
							<span class="far fa-check-circle jp-legacy-suboxone-clinics-highlights-list-item-icon"></span>
							<span class="jp-legacy-suboxone-clinics-highlights-list-item-title">Low Commitments</span>
							<p class="jp-legacy-suboxone-clinics-highlights-list-item-text">Suboxone is the lowest level of addiction treatment and can involve 2 appointments a month.</p>
						</li>

						<li class="jp-legacy-suboxone-clinics-highlights-list-item">
							<span class="far fa-check-circle jp-legacy-suboxone-clinics-highlights-list-item-icon"></span>
							<span class="jp-legacy-suboxone-clinics-highlights-list-item-title">Extra Support </span>
							<p class="jp-legacy-suboxone-clinics-highlights-list-item-text">Use the JourneyPure app and Alumni Coach to help.</p>
						</li>

						<li class="jp-legacy-suboxone-clinics-highlights-list-item">
							<span class="far fa-check-circle jp-legacy-suboxone-clinics-highlights-list-item-icon"></span>
							<span class="jp-legacy-suboxone-clinics-highlights-list-item-title">In-Network with Insurances</span>
							<p class="jp-legacy-suboxone-clinics-highlights-list-item-text">Any cost to you is as low as possible. </p>
						</li>
					</ul>

					<div class="jp-legacy-suboxone-clinics-highlights-img-logos-wrapper">
						<img class="jp-legacy-suboxone-clinics-highlights-img-logos lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $outpatient_locations->highlights_insurers_image_1['url'] ); ?>" alt="<?php echo esc_attr( $outpatient_locations->highlights_insurers_image_1['alt'] ); ?>">
						<img class="jp-legacy-suboxone-clinics-highlights-img-logos lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $outpatient_locations->highlights_insurers_image_2['url'] ); ?>" alt="<?php echo esc_attr( $outpatient_locations->highlights_insurers_image_2['alt'] ); ?>">
					</div>

					<div class="jp-legacy-suboxone-clinics-highlights-button-wrapper">
						<button type="button" data-toggle="modal" data-target="#main-insurance-form" class="jp-legacy-suboxone-clinics-highlights-button"><span class="fas fa-id-card"></span> Check Insurance</button>
					</div>
				</div>

				<div class="col-12 col-md-6 col-lg-4">
					<img class="jp-legacy-suboxone-clinics-highlights-img-faces lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $outpatient_locations->highlights_main_image['url'] ); ?>" alt="<?php echo esc_attr( $outpatient_locations->highlights_main_image['alt'] ); ?>">
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION: Highlights -->

	<!-- SECTION: Gray Section (legacy) -->
	<section class="block-4">
		<div class="container">
			<h2 class="heading">Suboxone Treatment (Online or In-Person)</h5>
			<p class="h3 heading">As much support as you want.</p>

			<div class="card-deck">
				<div class="card">
					<img class="card-img-top lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2020/01/brian-wind.jpg" alt="Medications">

					<div class="card-body">
						<h5 class="card-title">Medications</h5>
						<p class="card-text">Using medications for drug addiction is recommended by all healthcare authorities - including the U.S. National Institute of Health. Beyond Suboxone, medications for dual-diagnosis issues (like antidepressants) stabilize other imbalances in the brain that contribute to the cycle of opiate use.</p>
					</div>
				</div>

				<div class="card">
					<img class="card-img-top lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2019/11/journeypure-app.jpg" alt="App Work">

					<div class="card-body">
						<h5 class="card-title">The App</h5>
						<p class="card-text">Unlike other centers, you get access to powerful tools right in your pocket. Use it whenever you have time or are feeling triggered. The app helps you stay healthy long-term. You tackle pillars of general health (like sleep and nutrition), as well as mental health (like gratitude and medication reminders). </p>
					</div>
				</div>

				<div class="card">
										<img class="card-img-top lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2019/11/therapy-suboxone-clinic.jpg" alt="Support">


					<div class="card-body">
						<h5 class="card-title">Support</h5>
						<p class="card-text">The JourneyPure app connects to an Alumni Coach, who's in recovery too. Get advice anytime from someone who understands. Beyond medication, the clinics offer therapy options, including virtual sessions. JourneyPure also has the best in-network rehabs in Tennessee, Kentucky and Florida. You can get as much help as it takes.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION: Gray Section (legacy) -->

	<!-- SECTION: FAQ -->
	<?php if ( ! empty( $outpatient_locations->faq ) ) : ?>
		<section class="jp-legacy-suboxone-clinics-section jp-legacy-suboxone-clinics-faq">
			<div class="container">
				<?php if ( ! empty( $outpatient_locations->faq->heading ) || ! empty( $outpatient_locations->faq->subheading ) ) : ?>
					<div class="heading">
						<h2>
							<?php echo esc_html( $outpatient_locations->faq->heading ); ?>
						</h2>

						<?php if ( ! empty( $outpatient_locations->faq->subheading ) ) : ?>
							<p class="h3 lead"><?php echo esc_html( $outpatient_locations->faq->subheading ); ?></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if ( ! empty( $outpatient_locations->faq->faqs ) ) : ?>
					<div class="faqs">
						<div class="accordion" id="faq">
							<?php foreach ( $outpatient_locations->faq->faqs as $index => $faq ) : ?>
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

	<!-- SECTION: Table -->
	<section class="jp-legacy-suboxone-clinics-section jp-legacy-suboxone-clinics-table">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12">
					<h2 class="jp-legacy-suboxone-clinics-table-title">13 Outpatient &amp; Suboxone Clinics</h2>
					<p class="h3 jp-legacy-suboxone-clinics-table-subtitle">If you prefer to come in-person.<br />(Therapy options also available at each location and virtually).</p>
				</div>
			</div>

			<div class="jp-legacy-suboxone-clinics-table-cards">
				<div class="row">
					<div class="col-12 col-lg-4">
						<div class="jp-legacy-suboxone-clinics-table-card">
							<img class="jp-legacy-suboxone-clinics-table-card-img lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2020/07/jp-icon-KY-180x180-1.png" alt="<?php echo esc_attr( $outpatient_locations->cards_1_title ); ?>">
							<h5 class="jp-legacy-suboxone-clinics-table-card-title"><?php echo esc_html( $outpatient_locations->cards_1_title ); ?></h5>

							<ul class="jp-legacy-suboxone-clinics-table-card-list">
								<?php if ( ! empty( $outpatient_locations->cards_1 ) ) : ?>
									<?php foreach ( $outpatient_locations->cards_1 as $card ) : ?>
										<li class="jp-legacy-suboxone-clinics-table-card-list-item">
											<a class="jp-legacy-suboxone-clinics-table-card-place" <?php if ( ! empty( $card['link'] ) ) echo ( 'href="' . esc_attr( $card['link'] ) . '"' ); ?>>
												<h5 class="jp-legacy-suboxone-clinics-table-card-place-title"><?php echo esc_html( $card['title'] ); ?> <span class="fas fa-info-circle"></span></h5>

												<div class="jp-legacy-suboxone-clinics-table-card-place-stars">
													<span class="jp-legacy-suboxone-clinics-table-card-place-star"><?php echo esc_html( $card['ratings']['number_rating'] ); ?></span>
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

													<span class="jp-legacy-suboxone-clinics-table-card-place-count">(<?php echo esc_html( $card['ratings']['count'] ); ?>)</span>
												</div>

												<p class="jp-legacy-suboxone-clinics-table-card-place-address"><?php echo esc_html( $card['address'] ); ?></p>
											</a>
										</li>
									<?php endforeach; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>

					<div class="col-12 col-lg-4">
						<div class="jp-legacy-suboxone-clinics-table-card">
							<img class="jp-legacy-suboxone-clinics-table-card-img lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2020/07/jp-icon-TN-180x180-1.png" alt="<?php echo esc_attr( $outpatient_locations->cards_2_title ); ?>">
							<h5 class="jp-legacy-suboxone-clinics-table-card-title"><?php echo esc_html( $outpatient_locations->cards_2_title ); ?></h5>

							<ul class="jp-legacy-suboxone-clinics-table-card-list">
								<?php if ( ! empty( $outpatient_locations->cards_2 ) ) : ?>
									<?php foreach ( $outpatient_locations->cards_2 as $card ) : ?>
										<li class="jp-legacy-suboxone-clinics-table-card-list-item">
											<a class="jp-legacy-suboxone-clinics-table-card-place" <?php if ( ! empty( $card['link'] ) ) echo ( 'href="' . esc_attr( $card['link'] ) . '"' ); ?>>
												<h5 class="jp-legacy-suboxone-clinics-table-card-place-title"><?php echo esc_html( $card['title'] ); ?> <span class="fas fa-info-circle"></span></h5>

												<div class="jp-legacy-suboxone-clinics-table-card-place-stars">
													<span class="jp-legacy-suboxone-clinics-table-card-place-star"><?php echo esc_html( $card['ratings']['number_rating'] ); ?></span>
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

													<span class="jp-legacy-suboxone-clinics-table-card-place-count">(<?php echo esc_html( $card['ratings']['count'] ); ?>)</span>
												</div>

												<p class="jp-legacy-suboxone-clinics-table-card-place-address"><?php echo esc_html( $card['address'] ); ?></p>
											</a>
										</li>
									<?php endforeach; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>

					<div class="col-12 col-lg-4">
						<div class="jp-legacy-suboxone-clinics-table-card">
							<img class="jp-legacy-suboxone-clinics-table-card-img lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2020/07/FLjp-icon-TN-180x180-1.png" alt="<?php echo esc_attr( $outpatient_locations->cards_3_title ); ?>">
							<h5 class="jp-legacy-suboxone-clinics-table-card-title"><?php echo esc_html( $outpatient_locations->cards_3_title ); ?></h5>

							<ul class="jp-legacy-suboxone-clinics-table-card-list">
								<?php if ( ! empty( $outpatient_locations->cards_3 ) ) : ?>
									<?php foreach ( $outpatient_locations->cards_3 as $card ) : ?>
										<li class="jp-legacy-suboxone-clinics-table-card-list-item">
											<a class="jp-legacy-suboxone-clinics-table-card-place" <?php if ( ! empty( $card['link'] ) ) echo ( 'href="' . esc_attr( $card['link'] ) . '"' ); ?>>
												<h5 class="jp-legacy-suboxone-clinics-table-card-place-title"><?php echo esc_html( $card['title'] ); ?> <span class="fas fa-info-circle"></span></h5>

												<div class="jp-legacy-suboxone-clinics-table-card-place-stars">
													<span class="jp-legacy-suboxone-clinics-table-card-place-star"><?php echo esc_html( $card['ratings']['number_rating'] ); ?></span>
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

													<span class="jp-legacy-suboxone-clinics-table-card-place-count">(<?php echo esc_html( $card['ratings']['count'] ); ?>)</span>
												</div>

												<p class="jp-legacy-suboxone-clinics-table-card-place-address"><?php echo esc_html( $card['address'] ); ?></p>
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

	<!-- SECTION: Other Options -->
	<section class="jp-legacy-suboxone-clinics-section jp-legacy-suboxone-clinics-other-options">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12">
					<h5 class="text-center">Other Options</h5>
					<p class="jp-legacy-suboxone-clinics-other-options-subtitle">Inpatient rehab is the most effective level of care, if you're ready to do whatever it takes.</p>
				</div>
			</div>

			<aside class="tag-list">
				<div class="row g-0">
					<div class="col-6 col-lg-auto">
						<div class="tag default">
							<a href="/locations/florida/">Florida &amp; Alcohol Drug Rehab</a>
						</div>
					</div>

					<div class="col-6 col-lg-auto">
						<div class="tag default">
							<a href="/locations/tennessee/">Tennessee &amp; Alcohol Drug Rehab</a>
						</div>
					</div>

					<div class="col-6 col-lg-auto">
						<div class="tag default">
							<a href="/locations/kentucky/">Kentucky &amp; Alcohol Drug Rehab</a>
						</div>
					</div>
				</div>
			</aside>
		</div>
	</section>
	<!-- /SECTION: Other Options -->

	<!-- COMPONENT: Footer CTA -->
	<?php require_once THEME_PATH . '/_v2/theme/components/footer-cta.php'; ?>
	<!-- /COMPONENT: Footer CTA -->

</div>

<!-- /TEMPLATE: LEGACY Suboxone Clinics -->

<?php
// Footer.
get_footer( 'v2' );
