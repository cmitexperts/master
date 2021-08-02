<?php
/**
 * Masthead
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<section class="jp-component jp-masthead lazy-enhanced"
		 data-src="<?php echo esc_attr( $context->above_fold->image ); ?>">
	<div class="container">
		<div class="row">
			<div class="col col-12 col-lg">
				<div class="jp-component-header jp-masthead-header">
					<?php if ( ! empty( $context->above_fold->h1 ) ) : ?>
						<h1 class="jp-component-h1 jp-masthead-h1"><?php echo wp_kses_post( $context->above_fold->h1 ); ?></h1>
					<?php endif; ?>
					<?php if ( ! empty( $context->above_fold->heading ) ) : ?>
						<h2 class="h2 jp-component-title jp-masthead-title"><?php echo wp_kses_post( $context->above_fold->heading ); ?></h2>
					<?php endif; ?>
					<?php if ( ! empty( $context->above_fold->subheading ) ) : ?>
						<div class="h3 jp-component-subtitle jp-masthead-subtitle"><?php echo wp_kses_post( $context->above_fold->subheading ); ?></div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col">
				<?php
				$video_id = get_field( 'youtube_video_id' );
				$video_caption = get_field('youtube_video_caption');
				?>
				<?php if ( ! empty( $video_id ) ) : ?>
					<div class="col-12 col-lg-auto jp-masthead-video-wrapper">
						<iframe width="633" height="433"
								src="https://www.youtube.com/embed/<?php echo wp_kses_post( $video_id ); ?>?rel=0”" allowfullscreen>
						</iframe>
						<?php if ( ! empty( $video_caption ) ) : ?>
							<div class="caption"><?php echo wp_kses_post( $video_caption ); ?></div>
							<div class="jp-arrow">
								<img src="<?php echo get_stylesheet_directory_uri() . '/_v2/theme/assets/img/template-single-op/masthead-arrow.png'; ?>"/>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>





