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
				<div class="col-12 col-lg">
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
							<a class="btn btn-blue btn-large jp-masthead-v2-button" data-toggle="modal" href="#masthead-2-modal"><i class="fas fa-play-circle"></i> Watch the 2-Min. Video</a>
						<?php else : ?>
							<a class="btn btn-blue btn-large jp-masthead-v2-button jp-masthead-v2-go-down" href="#">Watch the 2-Min. Video</a>
						<?php endif; ?>
					</div>
				</div>

				<div class="col-12 col-lg-auto jp-masthead-v2-image-wrapper">
					<?php if ( ! empty( $context->above_fold->youtube_video_id ) ) : ?>
						<a data-toggle="modal" href="#masthead-2-modal">
							<img class="jp-masthead-v2-image lazy-enhanced d-md-none" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $context->above_fold->image_mobile ); ?>">
							<img class="jp-masthead-v2-image lazy-enhanced d-none d-md-block" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $context->above_fold->image ); ?>">
						</a>
					<?php else : ?>
						<img class="jp-masthead-v2-image lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $context->above_fold->image ); ?>">
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

