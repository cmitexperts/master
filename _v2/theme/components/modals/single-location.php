<?php
/**
 * Call Modal (Video)
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<div class="modal jp-modal jp-modal-clean jp-call-video-modal" id="call-video-modal" tabindex="-1">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span class="fal fa-times"></span>
				</button>
			</div>

			<div class="modal-body">
				<div class="ratio ratio-16x9 jp-modal-video-wrapper">
					<iframe class="jp-modal-video iframe-to-load" data-url-value="https://www.youtube.com/embed/kNj08KeNbIA?rel=0&showinfo=0&autoplay=1&cc_load_policy=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal jp-modal jp-call-video-modal" id="masthead-2-modal" tabindex="-1">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<p class="h3 modal-title">JourneyPure <?php echo $context->above_fold->location ? ( ' - ' . esc_html( $context->above_fold->location ) ) : ''; ?></p>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span class="fal fa-times"></span>
				</button>
			</div>

			<div class="modal-body">
				<div class="ratio ratio-16x9 jp-modal-video-wrapper">
					<iframe class="jp-modal-video iframe-to-load" data-url-value="https://www.youtube.com/embed/<?php echo esc_attr( $context->above_fold->youtube_video_id ); ?>?rel=0&showinfo=0&autoplay=1&cc_load_policy=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

				<?php if ( ! empty( $context->above_fold->youtube_video_desc ) ) : ?>
					<br>
					<?php echo wp_kses_post( $context->above_fold->youtube_video_desc ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
