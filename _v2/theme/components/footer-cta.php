<?php
/**
 * Footer CTA
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<section class="jp-component jp-footer-cta">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="jp-component-header">
					<h2 class="jp-component-title">Still Have Questions?</h2>
					<div class="h3 jp-component-subtitle">Get answers right now.</div>
				</div>
			</div>
		</div>

		<div class="jp-footer-cta-items">
			<div class="row justify-content-center">
				<div class="col-12 col-md-4">
					<div class="jp-footer-cta-item">
						<span class="jp-footer-cta-icon lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/cta/icon-phone.svg" aria-hidden="true"></span>
						<a class="btn btn-secondary btn-large jp-footer-cta-widget-btn-call" href="tel:+1-844-505-4799">Call Now</a>

						<label class="jp-footer-cta-widget-label" for="_temp_">Or, Get a Call Back »</label>
						<input class="jp-footer-cta-widget-checkbox" id="_temp_" type="checkbox">

						<div class="jp-footer-cta-widget-container">
							<p>Enter your phone number and get a call usually within 5 minutes.</p>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4">
					<div class="jp-footer-cta-item">
						<span class="jp-footer-cta-icon lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/cta/icon-computer.svg" aria-hidden="true"></span>
						<a class="btn btn-secondary btn-large" href="#" data-toggle="modal" data-target="#main-insurance-form">Check Insurance</a>
					</div>
				</div>

				<!-- <div class="col-12 col-md-4">
					<div class="jp-footer-cta-item">
						<span class="jp-footer-cta-icon lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/cta/icon-mobile.svg" aria-hidden="true"></span>
						<a class="btn btn-secondary btn-large frontman-cta-insurance" href="sms:+18445054799">Start a Text Chat</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</section>
