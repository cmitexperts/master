<?php
/**
 * Footer
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

?>

</main>

<!-- FOOTER -->
<footer class="jp-footer">
	<!-- FOOTER - LINKS -->
	<?php if ( ! is_page_template( 'template-legacy-virtual-rehab.php' ) ) : ?>
		<div class="jp-footer-top">
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3 col-lg-3 col-xl-2">
						<p>Rehab Locations</p>

						<ul class="jp-footer-links jp-footer-links-style-2">
							<li class="jp-footer-links-item" style="display:none;">
								<a class="jp-footer-links-link" href="/locations/florida/">Florida Rehab</a>
							</li>

							<li class="jp-footer-links-item">
								<a class="jp-footer-links-link" href="/locations/tennessee/">Tennessee Rehab</a>
							</li>

							<li class="jp-footer-links-item">
								<a class="jp-footer-links-link" href="/locations/kentucky/">Kentucky Rehab</a>
							</li>

							<li class="jp-footer-links-item">
								<a class="jp-footer-links-link" href="/locations/military-program/">Veteran Rehab</a>
							</li>
						</ul>
					</div>

					<div class="col-6 col-md-3 col-lg-3 col-xl-2">
						<p>Ask Our Doctors</p>

						<ul class="jp-footer-links">
							<li class="jp-footer-links-item">
								<a class="jp-footer-links-link" href="/ask-our-doctors/">Addiction Help</a>
							</li>

							<li class="jp-footer-links-item">
								<a class="jp-footer-links-link" href="/suboxone-clinics/">Suboxone Clinics</a>
							</li>

							<li class="jp-footer-links-item">
								<a class="jp-footer-links-link"
								   href="/ask-our-doctors/alumni/what-do-i-do-if-i-relapse/">Relapse</a>
							</li>

							<li class="jp-footer-links-item">
								<a class="jp-footer-links-link" href="/ask-our-doctors/alcohol/what-is-wet-brain/">Wet
									Brain</a>
							</li>
						</ul>
					</div>
					<div class="jp-seal-wrapper col-12 col-md-6 col-lg-6 col-xl-4">
						<div class="row jp-seal-a">
							<div class="col-3 col-lg-2"><img
										src="https://journeypure.com/wp-content/uploads/2019/09/carf_seal2-e1433366642565.png" alt="BBB Accreditation A+ rating">
							</div>
							<div class="col-9 jp-seal-a__text"> One of only 20% of healthcare centers in the
								world to earn CARF.
							</div>
						</div>
						<div class="row jp-seal-b">
							<div class="col-3 col-lg-2"><img
										src="https://journeypure.com/wp-content/uploads/2021/05/bbb-logo-with-a-plus-rating-approved.png" alt="CARF Gold Seal">
							</div>
							<div class="jp-seal-b__text col-9">An A+
								rated facility by the U.S. Better Business Bureau.
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	<?php endif; ?>

	<!-- FOOTER - COPYRIGHT -->
	<div class="jp-footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					<p class="jp-footer-copyright-text">
						<button class="btn jp-footer-copyright-back-to-top" onclick="app.global.toTop()"><span
									class="fas fa-chevron-up"></span> Back to Top
						</button>
						<span class="jp-footer-copyright-spacer"></span>
						<span class="jp-footer-copyright-copyright">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> JourneyPure. All rights reserved</span>
						<span class="jp-footer-copyright-spacer"></span>
						<a class="jp-footer-copyright-link" href="/terms-of-use/">Terms &amp; Conditions</a>
						<span class="jp-footer-copyright-spacer"></span>
						<a class="jp-footer-copyright-link" href="/privacy-policy/">Privacy Policy</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- MODALS -->

<?php // require_once THEME_PATH . '/_v2/theme/components/modals/exit.php'; ?>

<?php // if ( is_page_template( 'template-legacy-virtual-rehab.php' ) ) : ?>
<?php // require_once THEME_PATH . '/_v2/theme/components/modals/virtual-rehab.php'; ?>
<?php // endif; ?>

<?php if ( is_page_template( 'template-homepage-v2.php' ) || is_page_template( 'template-single-op-v2.php' ) ) : ?>
	<?php require_once THEME_PATH . '/_v2/theme/components/modals/interview.php'; ?>
<?php endif; ?>

<?php if ( is_page_template( 'template-single-location-v2.php' ) ) : ?>
	<?php require_once THEME_PATH . '/_v2/theme/components/modals/single-location.php'; ?>
<?php endif; ?>

<?php if ( is_page_template( 'template-single-op-v2.php' ) ) : ?>
	<?php require_once THEME_PATH . '/_v2/theme/components/modals/single-op.php'; ?>
<?php endif; ?>

<!-- SCRIPTS -->

<script type="text/javascript">
	// Is Internet Explorer
	if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) {
		<?php // phpcs:ignore WordPress.WP.EnqueuedResources.NonEnqueuedScript ?>
		document.write('<script src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/js/externals-ie.js?v=20210328" defer><\/script>');
	}
	// Is NOT Internet Explorer
	else {
		<?php // phpcs:ignore WordPress.WP.EnqueuedResources.NonEnqueuedScript ?>
		document.write('<script src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/js/externals.js?v=20210328" defer><\/script>');
	}

	document.addEventListener('DOMContentLoaded', function(event) {
		// Is Firefox
		if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
			// Force FF to re-render the Frontman Widget (styling glitch fix)
			document.getElementsByClassName('jp-frontman-text-bottom')[0].style.fontSize = '20px';
		}

	});

	<?php // phpcs:ignore WordPress.WP.EnqueuedResources.NonEnqueuedScript ?>
	document.write('<script src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/js/main.js?v=20210328" defer><\/script>');
</script>

<a class="jp-frontman-text" href="tel:1-844-505-4799">
	<div class="jp-frontman-text-top">Get Help Now!</div>
	<div class="jp-frontman-text-bottom">
		<span class="fas fa-phone-alt jp-frontman-text-bottom-icon"></span>
		<span class="jp-frontman-text-bottom-call"> Call</span> (844) 505-4799
	</div>
</a>

<?php wp_footer(); ?>
</body>
</html>
