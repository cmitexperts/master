<?php
/**
 * Pillars
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<?php if ( isset( $context->boxes ) ) : ?>
	<section class="jp-component jp-pillars">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="jp-component-header">
						<?php if ( ! empty( $context->boxes->heading ) ) : ?>
							<h2 class="jp-component-title"><?php echo wp_kses_post( $context->boxes->heading ); ?></h2>
						<?php endif; ?>

						<?php if ( ! empty( $context->boxes->subheading ) ) : ?>
							<div class="h3 jp-component-subtitle"><?php echo wp_kses_post( $context->boxes->subheading ); ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="jp-pillars-list">
				<div class="row">
					<?php foreach ( $context->boxes->boxes as $i => $box ) : ?>
						<?php
							$style = '';
							$icon  = '';

							if ( 0 === $i ) {
								$style = 'a';
								$icon  = 'icon-brain-2.svg';
							} elseif ( 1 === $i ) {
								$style = 'b';
								$icon  = 'icon-blocks.svg';
							} elseif ( 2 === $i ) {
								$style = 'c';
								$icon  = 'icon-meditation-2.svg';
							} elseif ( 3 === $i ) {
								$style = 'd';
								$icon  = 'icon-prevent-2.svg';
							}

							$box_title = explode( ' ', $box['heading'] );
						?>

						<div class="col-12 col-md-6 col-xl-3">
							<div class="jp-pillars-item">
								<div class="jp-pillars-item-header style-<?php echo esc_attr( $style ); ?>">
									<span class="jp-pillars-item-icon lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/pillars/<?php echo esc_attr( $icon ); ?>"></span>
									<p class="h4 jp-pillars-item-subtitle"><?php echo esc_html( $box_title[0] ); ?></p>
									<p class="h2-small jp-pillars-item-title"><?php echo esc_html( $box_title[1] ); ?></p>
								</div>

								<div class="jp-pillars-item-body">
									<?php echo wp_kses_post( $box['text'] ); ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<?php if ( isset( $context->boxes->graphic ) ) : ?>
		<section class="jp-component jp-component-no-padding jp-pillars-graphic">
			<div class="container">
				<h3 class="text-center h6">A Visual Breakdown of Treatment Here</h3>
				<div class="row">
					<div class="col">
						<div class="jp-pillars-graphic-canvas">
							<?php if ( ! empty( $context->boxes->graphic->image ) ) : ?>
								<div class="jp-pillars-graphic-pattern-wrapper">
									<span class="jp-pillars-graphic-pattern jp-pillars-graphic-pattern-mobile lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/pillars/graphic-mobile-2.png"></span>
									<span class="jp-pillars-graphic-pattern jp-pillars-graphic-pattern-desktop lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/pillars/graphic-desktop-2.png"></span>
									<img class="jp-pillars-graphic-image lazy-enhanced" height="300" width="300" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $context->boxes->graphic->image ); ?>">
								</div>
							<?php endif; ?>

							<?php if ( ! empty( $context->boxes->graphic->items ) ) : ?>
								<div class="jp-pillars-graphic-list">
									<?php foreach ( $context->boxes->graphic->items as $index => $item ) : ?>
										<div class="jp-pillars-graphic-item style-<?php echo esc_attr( $index + 1 ); ?>">
											<div class="row">
												<div class="col-auto">
													<span class="jp-pillars-graphic-item-percentage"><?php echo esc_html( $item['percentage'] ); ?>%</span>
												</div>

												<div class="col">
													<div class="jp-pillars-graphic-item-content">
														<p class="h6 jp-pillars-graphic-item-title"><?php echo esc_html( $item['title'] ); ?></p>
														<p class="jp-pillars-graphic-item-text"><?php echo nl2br( esc_html( $item['text'] ) ); ?></p>
													</div>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
<?php endif;
