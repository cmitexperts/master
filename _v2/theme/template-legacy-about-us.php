<?php
/**
 * LEGACY About Us template
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

// WordPress functions file.
require_once get_stylesheet_directory() . '/_v2/theme/functions.php';

// NEW CODE, for when the sections are migrated to use the new pattern
// require_once get_stylesheet_directory() . '/classes/AboutUs.php';
// global $context;
// $context = new Pages\AboutUs();

// LEGACY CODE
require_once get_stylesheet_directory() . '/classes/AboutUs.php';
$about_us = new Pages\AboutUs();

// Custom styles.
define( 'STYLESHEET_NAME_V2', 'template-legacy-about-us' );

// Header.
get_header( 'v2' );
?>

<!-- TEMPLATE: LEGACY About Us -->

<!-- <div id="about-us"> -->
<div id="legacy-about-us" class="jp-legacy-about-us">

	<!-- SECTION: Top Section (Above Fold / Masthead) -->
	<section class="above-fold">
		<div class="default-container x-loc lazy-enhanced" data-src="/wp-content/uploads/2020/07/about-journeypure-alcohol-rehab.jpg">
			<div class="background-fade">
				<div class="content">
					<h1 class="heading">Here, it's different.</h1>

					<hr>

					<div class="feature">
						<div class="row">
							<div class="col-lg-12 col-sm-12 top-text">
								<div class="card transparent">
									<div class="card-body">
										<p class="h3 text-center">Our mission is to help people become healthy and stay healthy. Our high standards attract well-known behavioral health professionals from across the country.  Their commitments to <u>ethics and patient success</u> are backed by the highest accreditation in the industry.</p>
									</div>

									<?php if ( $about_us->ratings ) : ?>
										<div class="rating-section">
											<div class="row g-0">
												<?php foreach ( $about_us->ratings as $rating ) : ?>
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
									<div class="ratio ratio-16x9 youtube-video-place youtube-video-cta lazy-enhanced" data-src="/wp-content/uploads/2020/07/SL4drwind.png" data-url-value="https://www.youtube.com/embed/Gd1Dza355X8?rel=0&showinfo=0&autoplay=1&cc_load_policy=1">
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

	<section class="bio-section">
		<div class="container">
			<div class="heading">
				<h2>The Leadership Team</h2>
			</div>
			<div id="about-bio-slider" class="about-bio-slider">
				<?php  foreach ($about_us->bios->bios as $index => $bio): ?>
				<div class="card default border-0">
					<div class="card-body bios">
						<div class="img-box">
							<div class="img" style='background-image: url("<?php echo $bio->photo['image']; ?>");'></div>
						</div>
						<div class="header">
							<h2 class="text name-text"><?php echo $bio->name; ?> <span class="text"><?php echo $bio->credentials; ?></span></h2>
							<p class="text"><?php echo $bio->title; ?></p>
						<hr />
						</div>
						<p class="bio-long"><?php echo ($bio->qualifications) ? '<span class="fa-li"><i class="fas fa-folder-plus"></i></span>' . $bio->qualifications . '': ''; ?></p>

						<ul class="fa-ul">
							<?php echo ($bio->years) ? '<li><span class="fa-li"><i class="fas fa-clock"></i></span>' . $bio->years . ' years in the field</li>': ''; ?>
							<?php echo ($bio->education) ? '<li><span class="fa-li"><i class="fas fa-graduation-cap"></i></span>' . $bio->education . '</li>': ''; ?>
							<?php echo ($bio->specialty) ? '<li><span class="fa-li"><i class="fas fa-star"></i></span>' . $bio->specialty . '</li>': ''; ?>

							<?php
							if(!empty($bio->recovery_status)):
								switch ($bio->recovery_status):
									case 'person' :
										echo '<li><span class="fa-li"><i class="fas fa-grin"></i></span>In Recovery</li>';
										break;
									case 'loved_one' :
										echo '<li><span class="fa-li"><i class="fas fa-grin"></i></span>Loved One In Recovery</li>';
										break;
								endswitch;
							endif;
							?>

						</ul>
						<span><?php echo ($bio->news_mentions) ? 'News Mentions': ''; ?></span>
						<?php if(!empty($bio->news_mentions)): ?>
							<div id="bio-new-mentions-<?php echo $index; ?>" class="bio-new-mentions">
								<?php foreach ($bio->news_mentions as $news_mention) : ?>
									<div class="mention">
										<?php if(!empty($news_mention['mention'])): ?>
											<a href="<?php  echo  $news_mention['link_to_article']; ?>" target="_blank"><div class="content"><?php echo  $news_mention['mention']; ?></div></a>
										<?php endif; ?>

									</div>
								<?php endforeach; ?>
							</div>
							<div class="row justify-content-between">
								<div class="col-6">
									<small class="link see-more-mentions has-more">More Articles ▼</small>
								</div>
								<div class="col-6 text-right">
									<small class="link see-less-mentions">▲ Back</small>
								</div>
							</div>
						<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="clearfix"></div>
			<!--
			<div class="main-controls">
				<div class="row justify-content-between">
					<div class="col-6">
						<p class="link see-less-btn">Back</p>
					</div>
					<div class="col-6 text-right">
						<p class="link see-more-btn">More</p>
					</div>
				</div>
			</div>
			-->
		</div>
	</section>

	<section class="page-quote">
		<div class="container">
			<div class="container"><div class="header"><div class="lead">"Addiction treatment is not only science; it's also art. It deals with the processes of life. People need to see how much we care before they care how much we know."
		</div></div><div class="media d-inline-flex"> <img class="mr-3 lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2019/11/dr-stephen-loyd-journeypure-md.jpg" alt="Doctor Stephen Loyd Headhot as Drug Czar"><div class="media-body "><h5 class="mt-0"><a href="https://journeypure.com/ask-our-doctors/members/dr-stephen-loyd-m-d/">Dr. Stephen Loyd MD</a></h5><p>Chief Medical Officer</p></div></div></div>
		</div>
	</section>

	<section class="ethics">
		<div class="container">
		<h2 class="text-center">Founding Principles</h2>
				<div class="media media-number-list"><div class="align-self-start mr-3 list-number colored"><i class="fas fa-check"></i></div><div class="media-body"><h5 class="mt-0">Addiction is a disease that can be treated with evidence-based and research-backed treatments</h5></div></div>
		<div class="media media-number-list"><div class="align-self-start mr-3 list-number colored"><i class="fas fa-check"></i></div><div class="media-body"><h5 class="mt-0">Any co-occurring mental health conditions must be treated along with the addictive behaviors to achieve long-term healing </h5></div></div>

		<div class="media media-number-list"><div class="align-self-start mr-3 list-number colored"><i class="fas fa-check"></i></div><div class="media-body"><h5 class="mt-0">Everyone can recover from addiction</h5></div></div>
				<div class="media media-number-list"><div class="align-self-start mr-3 list-number colored"><i class="fas fa-check"></i></div><div class="media-body"><h5 class="mt-0">Every patient deserves respectful, compassionate care </h5></div></div>
		<div class="media media-number-list"><div class="align-self-start mr-3 list-number colored"><i class="fas fa-check"></i></div><div class="media-body"><h5 class="mt-0">Treatment providers are accountable for patients' lasting success</h5></div></div>
		</div>
	</section>

	<section class="block-4">
		<div class="container">
			<h2 class="heading">Third-Party Vetted</h2>
				<p class="h3 heading">Our treatment is monitored by all the leading addiction healthcare organizations.</p>
			<div class="card-deck">
				<div class="card">
					<img class="card-img-top lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2019/11/carf-bg-fade-02.jpg" alt="...">
					<div class="card-body">
						<h5 class="card-title">CARF Accredited </h5>
						<p class="card-text">
							While state licensing is mandatory, only for providers with the commitment and capabilities to provide <b>better treatment</b> adhere to much <b>higher standards</b> from non-profit accrediting organizations.  <i>The majority of addiction treatment providers are not accredited.</i> CARF is the highest level of accreditation in our industry.  The review process takes nine to 12 months. Only 20% of addiction treatment providers meet and maintain these <a href="http://www.carf.org/Accreditation/" target="_blank">strict criteria</a>.
						</p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2019/11/legitscripts-bg-fade-01.jpg" alt="...">
					<div class="card-body">
						<h5 class="card-title">LegitScript Certified</h5>
						<p class="card-text">
							LegitScript is the authority on <b>ethical healthcare marketing</b>. Most large providers in our industry do not meet these high standards. We were one of the first in the world to earn the specialized certification, which is backed by Visa, Google, Microsoft and Facebook. It assures what we say about our facilities is true and transparent and that we don't accept any form of payment for referrals. Our status can be verified on  <a href="https://www.legitscript.com/websites/?lookup_type=website_search&website=www.journeypure.com&product=" target="_blank">LegitScript.com</a>.

						</p>

					</div>
				</div>
				<div class="card">
					<img class="card-img-top lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo WP_UPLOAD_PATH;?>/2020/01/BD-O-bg-fade-01.jpg" alt="...">
					<div class="card-body">
						<h5 class="card-title">Insurance Distinguished</h5>
						<p class="card-text">
							Blue Cross Blue Sheild is the largest health insurer in the U.S. The honor of Blue Distinction means we <i>"demonstrate quality care, treatment expertise and better overall patient results."</i> Learn how they separate <b>the top 1%</b> of specialty care providers on <a href="https://www.bcbs.com/sites/default/files/file-attachments/page/Substance_Use_Treatment_and_Recovery_Selection_Criteria.pdf" target="_blank">BCBS.com</a>. In addition, Optum uses their data to categorize the effectiveness of treatment facilities. We earned the <b>highest Platinum status</b>. More information on the Optum tier system at <a href="https://cdn-aem.optum.com/content/dam/optum3/optum/en/resources/white-papers/OptumAchievementsinClinicalExcellenceforFacilitiesWhitePaper.pdf" target="_blank">Optum.com</a>.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="block-3"><div class="container">   <div class="content-section ">
		<h2>The Latest News
		<a href="https://www.facebook.com/journeypure" target="_blank"><i class="fab fa-facebook"></i></a><a href="https://www.linkedin.com/company/journeypure/about/" target="_blank"><i class="fab fa-linkedin-in"></i></a><a href="https://www.youtube.com/journeypure" target="_blank"><i class="fab fa-youtube"></i></a></h2>
			<div class="row row-eq-height"> <div class="col-lg-6 d-flex align-items-stretch card-col"><div class="card default  effect-none"> <div class="card-body"><div class="card-text">
		<ul>
		<li><h3>Official provider for retired NFL & MLB pro athletes.</h3><hr /> <div class="row"><div class="col-md-10 col-sm-12">We are the only addiction treatment provider approved by the NFL Player Care Foundation and the MLB BAT program.</div><div class="col-md-2 col-sm-12"><img class="lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2020/01/Player-Care-Foundation-500x342-1.png"></div></div>
		</li>
		<li><h3>We're in-network with new VA Choice insurance.</h3><hr /> Veteran care is a high priority here. We accept Tricare and have specialized programs led by veterans that include virtual reality technology in treatment.
		</li>
		<li><h3>All 14 outpatient locations offer virtual options.</h3><hr />  We're growing in our commitment to communities in <a href="/locations/tennessee/">Tennessee</a>, <a href="/locations/kentucky/">Kentucky</a> and <a href="/locations/florida/">Florida</a>. Across the state, you can get addiction care at home.</li>
		<li class="last-news"><h3>Current data shows 84% of alumni are sober six months after starting treatment here.</h3><hr /> We use our data and statistically-verified studies from others in the industry to adjust our programs in ways that have the biggest impact on individual success. </li>
		</ul>
		</div></div></div></div> <div class="col-lg-6 d-flex align-items-stretch card-col"><div class="card default  effect-none"> <div class="card-body"><div class="card-text">  <img class="featured lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/uploads/2019/11/journeypure-alumni-app-after-rehab-left.png" alt="JourneyPure Phone App Screenshot Listing Features"> </div></div></div></div> </div></div>  <div class="content-section top-lg"><div class="card default"><div class="card-body"> </div></div></div> </div>
	</section>

	<section class="insurance-section">
		<div class="container">
			<div class="insurance-banner">
				<div class="row">
					<div class="col-12">
						<h5 class="center">Treatment Here is <u>In-Network</u>

						<button type="button" data-toggle="modal" data-target="#main-insurance-form" class="btn btn-cta"><i class="fas fa-id-card"></i>Insurance Checker</button></h5>
						<img class="lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/themes/journeyPure/assets/img/insurance2.png" alt="Aetna, Anthem Blue Cross Blue Sheild, Cigna Heath Insurances">
						<img class="lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="/wp-content/themes/journeyPure/assets/img/insurance1.png" alt="Amerihealth, United Healthcare, Humana, Tricare and 43 More Insurances">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- COMPONENT: Footer CTA -->
	<?php require_once THEME_PATH . '/_v2/theme/components/footer-cta.php'; ?>
	<!-- /COMPONENT: Footer CTA -->

</div>

<!-- /TEMPLATE: LEGACY About Us -->

<?php
// Footer.
get_footer( 'v2' );
