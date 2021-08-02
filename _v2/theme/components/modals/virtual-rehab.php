<?php
/**
 * Virtual Rehab Modal (Schedule)
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<div class="modal jp-modal" id="virtual-rehab-modal" tabindex="-1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<p class="h3 modal-title">Talk to A Therapist Now</p>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span class="fal fa-times"></span>
				</button>
			</div>

			<div class="modal-body">
				<!-- Calendly inline widget begin -->
				<div class="calendly-inline-widget" data-url="https://calendly.com/journeypurevirtualrehab/initial-session?hide_event_type_details=1&text_color=000e2c&primary_color=0033a1" style="min-width:320px;"></div>
				<!-- Calendly inline widget end -->
			</div>
		</div>
	</div>
</div>
