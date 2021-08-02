<?php
/**
 * Bios
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<?php if ( ! empty( $context->bios ) && ! empty( $context->bios->bios ) ) : ?>
	<section class="jp-component jp-bios">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="jp-component-header">
						<?php if ( ! empty( $context->bios->heading ) ) : ?>
							<h2 class="jp-component-title"><?php echo wp_kses_post( $context->bios->heading ); ?></h2>
						<?php endif; ?>

						<?php if ( ! empty( $context->bios->subheading ) ) : ?>
							<div class="h3 jp-component-subtitle"><?php echo wp_kses_post( $context->bios->subheading ); ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<div class="jp-bios-slider">
						<?php foreach ( $context->bios->bios as $bio ) : ?>
							<div class="jp-bios-slide-wrapper">
								<div class="jp-bios-slide">
									<span class="jp-bios-slide-image lazy-enhanced" data-src="<?php echo esc_attr( $bio->photo['image'] ); ?>"></span>
									<h3 class="h6 jp-bios-slide-name"><?php echo esc_html( $bio->name ); ?></h3>
									<p class="jp-bios-slide-credentials"><?php echo esc_html( $bio->credentials ); ?></p>
									<p class="jp-bios-slide-title"><?php echo esc_html( $bio->title ); ?></p>

									<ul class="jp-bios-slide-list">
										<?php echo ( $bio->education ) ? '<li class="jp-bios-slide-item"><span class="fas fa-graduation-cap"></span> ' . esc_html( $bio->education ) . '</li>' : ''; ?>
										<?php echo ( $bio->specialty ) ? '<li class="jp-bios-slide-item"><span class="fas fa-th-large"></span> ' . esc_html( $bio->specialty ) . '</li>' : ''; ?>
										<?php echo ( $bio->years ) ? '<li class="jp-bios-slide-item"><span class="fas fa-clock"></span> ' . esc_html( $bio->years ) . ' years in the field</li>' : ''; ?>

										<?php
											if ( ! empty( $bio->recovery_status ) ) {
												switch ( $bio->recovery_status ) {
													case 'person':
														echo '<li class="jp-bios-slide-item"><span class="fas fa-grin"></span> In Recovery</li>';
														break;
													case 'loved_one':
														echo '<li class="jp-bios-slide-item"><span class="fas fa-grin"></span> Loved One In Recovery</li>';
														break;
												}
											}
										?>
									</ul>
								</div>
							</div>
						<?php endforeach; ?>
					</div>

					<div class="jp-bios-slider-btns">
						<span class="jp-bios-slider-btn left"><span class="fas fa-caret-left"></span></span>
						<span class="jp-bios-slider-btn right">More <span class="fas fa-caret-right"></span></span>
					</div>
				</div>
			</div>
		</div>


	</section>
<?php endif;
