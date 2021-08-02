<?php
/**
 * Data
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<?php if ( isset( $context->data ) ) : ?>
	<section class="jp-component jp-data">
		<div class=" container">
			<div class="jp-data-table">
				<div class="row">
					<?php if ( ! empty( $context->data->table->heading ) ) : ?>
						<h2 class="jp-data-table-title"><?php echo wp_kses_post( $context->data->table->heading ); ?></h2>
					<?php else : ?>
						<h2 class="jp-data-table-title">Comparing Addiction Treatment Options</h2>
					<?php endif; ?>
					<ul class="jp-data-table-cards">
						<?php
						$i = 0;
						foreach (
								array(
										$context->data->item_1,
										$context->data->item_2,
										$context->data->item_3
								) as $item
						) :
							$i ++;
							?>
							<?php if ( ! empty( $item ) ) : ?>
							<li class="jp-data-table-card" data-treatment-option="<?php echo $i ?>">
								<a href="<?php echo esc_attr( $item->link_url ); ?>">
									<?php if ( ! empty( $item->title ) ) : ?>
										<h3 class="jp-data-table-card-title"><?php echo esc_html( $item->title ); ?></h3>
									<?php endif; ?>
								</a>
								<div class="jp-data-table-card-photo"
									 style="background-image:url('<?php echo esc_attr( $item->rating->image['sizes']['medium'] ); ?>');" role="img" aria-label="<?php echo $item->rating->image['alt']; ?>">
									<a href="<?php echo esc_attr( $item->link_url ); ?>"></a>
								</div>
								<?php if ( ! empty( $item->text ) ) : ?>
									<div class="jp-data-table-card-text">
										<?php echo wp_kses_post( $item->text ); ?>
									</div>
								<?php endif; ?>
								<div class="jp-data-table-card-footer">
									<div class="jp-data-table-card-stars">
										<span class="jp-data-table-card-star fas fa-star"></span>
										<span class="jp-data-table-card-star fas fa-star"></span>
										<span class="jp-data-table-card-star fas fa-star"></span>
										<span class="jp-data-table-card-star fas fa-star"></span>
										<span class="jp-data-table-card-star fas fa-star"></span>
									</div>
									<?php if ( ! empty( $item->rating->reviews ) ) : ?>
										<div class="jp-data-table-card-reviews">Based on
											<strong>
												<?php
												$reviews = str_replace( 'Based on ', '', esc_html( $item->rating->reviews ) );
												echo $reviews;
												?>
											</strong>
										</div>
									<?php endif; ?>
								</div>
							</li>
						<?php endif; ?>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="row">
					<div class="jp-data-table-column-vertical-headings">
						<div class="jp-data-table-cells">
							<div class="jp-data-table-cell">
								<div class="jp-data-table-cell-title" data-treatment-feature="1">First Time in
									Treatment
								</div>
							</div>
							<div class="jp-data-table-cell">
								<div class="jp-data-table-cell-title" data-treatment-feature="2">Multiple Relapse</div>
							</div>
							<div class="jp-data-table-cell">
								<div class="jp-data-table-cell-title" data-treatment-feature="3">Dual Diagnosis</div>
							</div>
							<div class="jp-data-table-cell">
								<div class="jp-data-table-cell-title" data-treatment-feature="4">Chronic or Complex Dual
									Diagnosis
								</div>
							</div>
							<div class="jp-data-table-cell">
								<div class="jp-data-table-cell-title" data-treatment-feature="5">Works for Alcohol
									Addiction
								</div>
							</div>
							<div class="jp-data-table-cell">
								<div class="jp-data-table-cell-title" data-treatment-feature="6">Holistic Options</div>
							</div>
							<?php if ( get_field( 'data' )['hide_virtual_option_row'] == '0' ) : ?>
								<div class="jp-data-table-cell">
									<div class="jp-data-table-cell-title" data-treatment-feature="7">Virtual Option
									</div>
								</div>
							<?php endif; ?>
							<div class="jp-data-table-cell">
								<div class="jp-data-table-cell-title" data-treatment-feature="8">App + Accountability
									Coach
								</div>
							</div>
							<div class="jp-data-table-cell">
								<div class="jp-data-table-cell-title" data-treatment-feature="9">Insurance Accepted
								</div>
							</div>
						</div>
					</div>
					<ul class="jp-data-table-columns">
						<li class="jp-data-table-column" data-treatment-option="1">
							<div class="jp-data-table-cells">
								<div class="jp-data-table-cell" data-treatment-feature="1">
									<div class="jp-data-table-cell-title">First Time in Treatment</div>
									<i class="fas fa-check"></i>
								</div>
								<div class="jp-data-table-cell" data-treatment-feature="2">
									<div class="jp-data-table-cell-title">Multiple Relapse</div>
									<i class="fas fa-check"></i>
								</div>
								<div class="jp-data-table-cell" data-treatment-feature="3">
									<div class="jp-data-table-cell-title">Dual Diagnosis</div>
									<i class="fas fa-check"></i>
								</div>

								<div class="jp-data-table-cell" data-treatment-feature="4">
									<div class="jp-data-table-cell-title">Chronic or Complex Dual Diagnosis</div>
									<i class="fas fa-check"></i>
								</div>

								<div class="jp-data-table-cell" data-treatment-feature="5">
									<div class="jp-data-table-cell-title">Works for Alcohol Addiction</div>
									<i class="fas fa-check"></i>
								</div>

								<div class="jp-data-table-cell" data-treatment-feature="6">
									<div class="jp-data-table-cell-title">Holistic Options</div>
									<i class="fas fa-check"></i>
								</div>

								<?php if ( get_field( 'data' )['hide_virtual_option_row'] == '0' ) : ?>
									<div class="jp-data-table-cell" data-treatment-feature="7">
										<div class="jp-data-table-cell-title">Virtual Option</div>
										<i class="far fa-times"></i>
									</div>
								<?php endif; ?>

								<div class="jp-data-table-cell" data-treatment-feature="8">
									<div class="jp-data-table-cell-title">App + Accountability Coach</div>
									<i class="fas fa-check"></i>
								</div>

								<div class="jp-data-table-cell" data-treatment-feature="9">
									<div class="jp-data-table-cell-title">Insurance Accepted</div>
									<i class="fas fa-check"></i>
								</div>
							</div>
							<div class="jp-data-table-column-footer">
								<a href="<?php echo esc_attr( $context->data->item_1->link_url ); ?>"
								   class="jp-data-table-button secondary-btn"><?php echo esc_html( $context->data->item_1->link_label ); ?></a>
								<a class="btn btn-blue jp-data-table-button primary-btn frontman-cta-insurance"><span
											class="fas fa-id-card"></span>Check Insurance</a>
							</div>
						</li>
						<li class="jp-data-table-column" data-treatment-option="2">
							<div class="jp-data-table-cells">
								<div class="jp-data-table-cell" data-treatment-feature="1">
									<div class="jp-data-table-cell-title">First Time in Treatment</div>
									<i class="fas fa-check"></i>
								</div>
								<div class="jp-data-table-cell" data-treatment-feature="2">
									<div class="jp-data-table-cell-title">Multiple Relapse</div>
									<i class="far fa-times"></i>
								</div>
								<div class="jp-data-table-cell" data-treatment-feature="3">
									<div class="jp-data-table-cell-title">Dual Diagnosis</div>
									<i class="fas fa-check"></i>
								</div>

								<div class="jp-data-table-cell" data-treatment-feature="4">
									<div class="jp-data-table-cell-title">Chronic or Complex Dual Diagnosis</div>
									<i class="far fa-times"></i>
								</div>

								<div class="jp-data-table-cell" data-treatment-feature="5">
									<div class="jp-data-table-cell-title">Works for Alcohol Addiction</div>
									<i class="fas fa-check"></i>
								</div>

								<div class="jp-data-table-cell" data-treatment-feature="6">
									<div class="jp-data-table-cell-title">Holistic Options</div>
									<i class="far fa-times"></i>
								</div>

								<?php if ( get_field( 'data' )['hide_virtual_option_row'] == '0' ) : ?>
									<div class="jp-data-table-cell" data-treatment-feature="7">
										<div class="jp-data-table-cell-title">Virtual Option</div>
										<i class="fas fa-check"></i>
									</div>
								<?php endif; ?>

								<div class="jp-data-table-cell" data-treatment-feature="8">
									<div class="jp-data-table-cell-title">App + Accountability Coach</div>
									<i class="fas fa-check"></i>
								</div>

								<div class="jp-data-table-cell" data-treatment-feature="9">
									<div class="jp-data-table-cell-title">Insurance Accepted</div>
									<i class="fas fa-check"></i>
								</div>
							</div>
							<div class="jp-data-table-column-footer">
								<a href="<?php echo esc_attr( $context->data->item_2->link_url ); ?>"
								   class="jp-data-table-button secondary-btn"><?php echo esc_html( $context->data->item_2->link_label ); ?></a>
								<a class="btn btn-blue jp-data-table-button primary-btn frontman-cta-insurance"><span
											class="fas fa-id-card"></span>Check Insurance</a>
							</div>
						</li>
						<?php if ( ! $context->data->hide_suboxone ) : ?>
							<li class="jp-data-table-column" data-treatment-option="3">
								<div class="jp-data-table-cells">
									<div class="jp-data-table-cell" data-treatment-feature="1">
										<div class="jp-data-table-cell-title">First Time in Treatment</div>
										<i class="fas fa-check"></i>
									</div>
									<div class="jp-data-table-cell" data-treatment-feature="2">
										<div class="jp-data-table-cell-title">Multiple Relapse</div>
										<i class="far fa-times"></i>
									</div>
									<div class="jp-data-table-cell" data-treatment-feature="3">
										<div class="jp-data-table-cell-title">Dual Diagnosis</div>
										<i class="far fa-times"></i>
									</div>

									<div class="jp-data-table-cell" data-treatment-feature="4">
										<div class="jp-data-table-cell-title">Chronic or Complex Dual Diagnosis</div>
										<i class="far fa-times"></i>
									</div>

									<div class="jp-data-table-cell" data-treatment-feature="5">
										<div class="jp-data-table-cell-title">Works for Alcohol Addiction</div>
										<i class="far fa-times"></i>
									</div>

									<div class="jp-data-table-cell" data-treatment-feature="6">
										<div class="jp-data-table-cell-title">Holistic Options</div>
										<i class="far fa-times"></i>
									</div>

									<?php if ( get_field( 'data' )['hide_virtual_option_row'] == '0' ) : ?>
										<div class="jp-data-table-cell" data-treatment-feature="7">
											<div class="jp-data-table-cell-title">Virtual Option</div>
											<i class="far fa-times"></i>
										</div>
									<?php endif; ?>

									<div class="jp-data-table-cell" data-treatment-feature="8">
										<div class="jp-data-table-cell-title">App + Accountability Coach</div>
										<i class="fas fa-check"></i>
									</div>

									<div class="jp-data-table-cell" data-treatment-feature="9">
										<div class="jp-data-table-cell-title">Insurance Accepted</div>
										<i class="fas fa-check"></i>
									</div>
									<div class="jp-data-table-column-footer">
										<a href="<?php echo esc_attr( $context->data->item_3->link_url ); ?>"
										   class="jp-data-table-button secondary-btn"><?php echo esc_html( $context->data->item_3->link_label ); ?></a>
										<a class="btn btn-blue jp-data-table-button primary-btn frontman-cta-insurance"><span
													class="fas fa-id-card"></span>Check Insurance</a>
									</div>
							</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
	</section>
<?php endif;
