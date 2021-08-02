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
			<div class="col">
				<div class="jp-component-header jp-masthead-header">
					<?php if ( ! empty( $context->above_fold->h1 ) ) : ?>
						<h1 class="jp-component-h1 jp-masthead-h1"><?php echo wp_kses_post( $context->above_fold->h1 ); ?></h1>

						<?php if ( ! empty( $context->above_fold->heading ) ) : ?>
							<h2 class="h2 jp-component-title jp-masthead-title"><?php echo wp_kses_post( $context->above_fold->heading ); ?></h2>
						<?php endif; ?>
					<?php else : ?>
						<?php if ( ! empty( $context->above_fold->heading ) ) : ?>
							<h1 class="h2 jp-component-title jp-masthead-title"><?php echo wp_kses_post( $context->above_fold->heading ); ?></h1>
						<?php endif; ?>
					<?php endif; ?>

					<?php if ( ! empty( $context->above_fold->subheading ) ) : ?>
						<div class="h3 jp-component-subtitle jp-masthead-subtitle"><?php echo wp_kses_post( $context->above_fold->subheading ); ?></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<?php if ( have_rows( 'homepage_template_box_slider' ) ): ?>
		<div class="jp-masthead-box-slider-wrapper">
			<ul class="jp-masthead-box-slider">
				<?php while ( have_rows( 'homepage_template_box_slider' ) ) :
					the_row(); ?>
					<?php
					// Get subfields
					$box_style              = get_sub_field( 'homepage_template_box_slider_box_style' );
					$box_style_one_img      = get_sub_field( 'homepage_template_box_slider_box_style_one_image' );
					$box_style_two_img      = get_sub_field( 'homepage_template_box_slider_box_style_two_image' );
					$box_style_two_title    = get_sub_field( 'homepage_template_box_slider_box_style_two_title' );
					$box_style_two_subtitle = get_sub_field( 'homepage_template_box_slider_box_style_two_subtitle' );
					$box_style_three_icon   = get_sub_field( 'homepage_template_box_slider_box_style_three_icon' );
					$box_style_three_text   = get_sub_field( 'homepage_template_box_slider_box_style_three_text' );

					?>
					<?php if ( $box_style == 'box-style-one' ) : ?>
					<li class="jp-masthead-box-slider-item jp-masthead-box-slider-item-style-one"
						style="background-image:url('<?php echo $box_style_one_img['url']; ?>')" role="img"
						aria-label="<?php echo $box_style_one_img['alt']; ?>">
					</li>
				<?php elseif ( $box_style == 'box-style-two' ) : ?>
					<li class="jp-masthead-box-slider-item jp-masthead-box-slider-item-style-two">
						<div class="jp-masthead-box-slider-item-image"
							 style="background-image:url('<?php echo $box_style_two_img['url']; ?>')" role="img"
							 aria-label="<?php echo $box_style_two_img['alt']; ?>"></div>
						<?php if ( ! empty( $box_style_two_title ) || ! empty( $box_style_two_subtitle ) ) : ?>
							<div class=" jp-masthead-box-slider-item-text">
								<?php if ( ! empty( $box_style_two_title ) ) : ?>
									<p class="jp-masthead-box-slider-item-title"><?php echo $box_style_two_title; ?></p>
								<?php endif; ?>
								<?php if ( ! empty( $box_style_two_subtitle ) ) : ?>
									<p class="jp-masthead-box-slider-item-subtitle"><?php echo $box_style_two_subtitle; ?></p>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</li>
				<?php else : ?>
					<li class="jp-masthead-box-slider-item jp-masthead-box-slider-item-style-three">
						<?php if ( ! empty( $box_style_three_icon ) ) : ?>
							<div class="jp-masthead-box-slider-item-icon">
								<img src="<?php echo $box_style_three_icon['url']; ?>"
									 alt="<?php echo $box_style_three_icon['alt']; ?>"/>
							</div>
						<?php endif; ?>
						<?php if ( ! empty( $box_style_three_text ) ) : ?>
							<p class="jp-masthead-box-slider-item-text">
								<?php echo $box_style_three_text; ?>
							</p>
						<?php endif; ?>
					</li>
				<?php endif; ?>
				<?php endwhile; ?>
			</ul>
		</div>
	<?php endif; ?>
	<div class="container">
		<div class="jp-masthead-ratings">
			<p class="jp-masthead-ratings-title">6,000 Success Stories</p>
			<div class="jp-masthead-ratings-subtitle">
				<span>Hundreds of</span>
				<p class="jp-masthead-ratings-rating-stars">
					<span class="fas fa-star jp-masthead-ratings-rating-stars-star"></span>
					<span class="fas fa-star jp-masthead-ratings-rating-stars-star"></span>
					<span class="fas fa-star jp-masthead-ratings-rating-stars-star"></span>
					<span class="fas fa-star jp-masthead-ratings-rating-stars-star"></span>
					<span class="fas fa-star jp-masthead-ratings-rating-stars-star"></span>
				</p>
				<span>5-Star Reviews</span>
			</div>
		</div>
	</div>

</section>
