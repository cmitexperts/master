<?php
/**
 * FAQ
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<?php if ( ! empty( $context->block4 ) && ! empty( $context->block4->faqs ) ) : ?>
	<section class="jp-component jp-faq lazy-enhanced" data-src="<?php echo esc_attr( $context->block4->image ); ?>">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="jp-component-header">
						<?php if ( ! empty( $context->block4->heading ) ) : ?>
							<h2 class="jp-component-title"><?php echo wp_kses_post( $context->block4->heading ); ?></h2>
						<?php endif; ?>

						<?php if ( ! empty( $context->block4->subheading ) ) : ?>
							<div class="h3 jp-component-subtitle"><?php echo wp_kses_post( $context->block4->subheading ); ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<?php if ( ! empty( $context->block4->faqs ) ) : ?>
				<div class="accordion jp-faq-accordion" id="faq">
					<?php foreach ( $context->block4->faqs as $index => $faq ) : ?>
						<div class="jp-faq-accordion-item">
							<div id="faq-heading-<?php echo esc_attr( $index ); ?>" class="jp-faq-accordion-item-header <?php echo ( 0 !== $index ) ? 'collapsed' : ''; ?>" data-toggle="collapse" data-target="#faq-<?php echo esc_attr( $index ); ?>" aria-expanded="<?php echo ( 0 !== $index ) ? '' : 'true'; ?>" aria-controls="faq-<?php echo esc_attr( $index ); ?>">
								<div class="row">
									<div class="col">
										<div class="jp-faq-accordion-item-question">
											<div class="jp-faq-accordion-item-counter"><?php echo esc_html( $index + 1 ); ?></div>
											<h3 class="h6 jp-faq-accordion-item-title"><?php echo wp_kses_post( $faq->question ); ?></h3>
										</div>
									</div>
								</div>
							</div>

							<div id="faq-<?php echo esc_attr( $index ); ?>" class="jp-faq-accordion-item-body collapse <?php echo ( 0 === $index ) ? 'show' : ''; ?>" aria-labelledby="faq-heading-<?php echo esc_attr( $index ); ?>" data-parent="#faq">
								<div class="row">
									<div class="col">
										<div class="h3 jp-faq-accordion-item-answer">
											<?php echo wp_kses_post( $faq->answer ); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif;
