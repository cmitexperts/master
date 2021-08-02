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
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="jp-component-header">
						<?php if ( ! empty( $context->data->heading ) ) : ?>
							<h2 class="jp-component-title"><?php echo wp_kses_post( $context->data->heading ); ?></h2>
						<?php endif; ?>

						<?php if ( ! empty( $context->data->subheading ) ) : ?>
							<div class="h3 jp-component-subtitle"><?php echo wp_kses_post( $context->data->subheading ); ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="jp-data-items">
				<div class="row">
					<div class="col">
						<?php foreach ( array( $context->data->item_1, $context->data->item_2, $context->data->item_3 ) as $item ) : ?>
							<?php if ( ! empty( $item ) ) : ?>
								<div class="jp-data-item">
									<div class="row">
										<div class="col-12 col-md-8 jp-data-item-column-2">
											<a class="jp-data-item-column-inner" href="<?php echo esc_attr( $item->link_url ); ?>">
												<h3 class="jp-data-item-title"><?php echo esc_html( $item->title ); ?></h3>

												<div class="jp-data-item-text">
													<?php echo wp_kses_post( $item->text ); ?>
												</div>

												<span class="jp-data-item-link"><?php echo esc_html( $item->link_label ); ?></span>
											</a>
										</div>

										<div class="col-12 col-md-4 jp-data-item-column-3">
											<div class="jp-data-item-column-inner">
											<a class="jp-data-item-column-inner" href="<?php echo esc_attr( $item->link_url ); ?>">
												<img class="jp-data-item-image lazy-enhanced" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( $item->rating->image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $item->title ); ?>">

												<p class="jp-data-ratings-rating-stars">
													<span class="fas fa-star jp-data-ratings-rating-stars-star"></span>
													<span class="fas fa-star jp-data-ratings-rating-stars-star"></span>
													<span class="fas fa-star jp-data-ratings-rating-stars-star"></span>
													<span class="fas fa-star jp-data-ratings-rating-stars-star"></span>
													<span class="fas fa-star jp-data-ratings-rating-stars-star"></span>
													<span class="jp-data-ratings-rating-stars-average"><?php echo esc_html( $item->rating->stars ); ?></span>
												</p>

												<p class="jp-data-item-reviews"><?php echo esc_html( $item->rating->reviews ); ?></p>
											</a>
												<button type="button" data-toggle="modal" data-target="#main-insurance-form" class="btn btn-blue jp-data-item-btn"><span class="fas fa-id-card"></span> Check Insurance</button>
												<p class="jp-data-item-spots"><?php echo esc_html( $item->spots ); ?></p>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</div>

			<div class="jp-data-table">
				<div class="row">
					<div class="col">
						<?php if ( ! empty( $context->data->table->heading ) ) : ?>
							<div class="h4 jp-data-table-title"><h3><?php echo wp_kses_post( $context->data->table->heading ); ?></h3></div>
						<?php endif; ?>

						<div class="jp-data-table-table-wrapper">
							<div class="table-responsive">
								<table class="table table-striped jp-data-table-table">
									<thead>
										<tr>
											<th scope="col"> </th>
											<th scope="col" width="22%">Inpatient Rehab</th>
											<th scope="col" width="22%">Outpatient Program</th>

											<?php if ( true !== $context->data->hide_suboxone ) : ?>
												<th scope="col" width="22%">Suboxone Doctor</th>
											<?php endif; ?>
										</tr>
									</thead>

									<tbody>
										<tr class="bottom-border">
											<th scope="row"> </th>
											<td>Most Effective</td>
											<td>Most Balanced</td>

											<?php if ( true !== $context->data->hide_suboxone ) : ?>
												<td>Easiest</td>
											<?php endif; ?>
										</tr>

										<tr>
											<th scope="row">First Time in Treatment</th>
											<td><span class="far fa-check"></span></td>
											<td><span class="far fa-check"></span></td>

											<?php if ( true !== $context->data->hide_suboxone ) : ?>
												<td><span class="far fa-check"></span></td>
											<?php endif; ?>
										</tr>

										<tr class="bottom-border">
											<th scope="row">Multiple Relapse</th>
											<td><span class="far fa-check"></span></td>
											<td></td>

											<?php if ( true !== $context->data->hide_suboxone ) : ?>
												<td></td>
											<?php endif; ?>
										</tr>

										<tr>
											<th scope="row">Dual Diagnosis <span class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="ie. depression or anxiety"></span></th>
											<td><span class="far fa-check"></span></td>
											<td><span class="far fa-check"></span></td>

											<?php if ( true !== $context->data->hide_suboxone ) : ?>
												<td></td>
											<?php endif; ?>
										</tr>

										<tr>
											<th scope="row">Chronic or Complex Dual Diagnosis</th>
											<td><span class="far fa-check"></span></td>
											<td></td>

											<?php if ( true !== $context->data->hide_suboxone ) : ?>
												<td></td>
											<?php endif; ?>
										</tr>

										<tr class="bottom-border">
											<th scope="row">Works for Alcohol Addiction</th>
											<td><span class="far fa-check"></span></td>
											<td><span class="far fa-check"></span></td>

											<?php if ( true !== $context->data->hide_suboxone ) : ?>
												<td></td>
											<?php endif; ?>
										</tr>

										<tr>
											<th scope="row">Holistic Options <span class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="ie. Art, Equine, Music Therapies"></span></th>
											<td><span class="far fa-check"></span></td>
											<td></td>

											<?php if ( true !== $context->data->hide_suboxone ) : ?>
												<td></td>
											<?php endif; ?>
										</tr>

										<tr class="bottom-border">
											<th scope="row">Virtual Option</th>
											<td></td>
											<td><a href="/virtual-rehab/" target="_blank"><span class="far fa-check"></span><br />Click Here</a></td>

											<?php if ( true !== $context->data->hide_suboxone ) : ?>
												<td></td>
											<?php endif; ?>
										</tr>



										<tr>
											<th scope="row">App + Accountability Coach</th>
											<td><span class="far fa-check"></span></td>
											<td><span class="far fa-check"></span></td>

											<?php if ( true !== $context->data->hide_suboxone ) : ?>
												<td><span class="far fa-check"></span></td>
											<?php endif; ?>
										</tr>

										<tr>
											<th scope="row">Insurance Accepted</th>
											<td><span class="far fa-check"></span></td>
											<td><span class="far fa-check"></span></td>

											<?php if ( true !== $context->data->hide_suboxone ) : ?>
												<td><span class="far fa-check"></span></td>
											<?php endif; ?>
										</tr>


									</tbody>

									<tfoot>
										<tr>
											<td scope="col"></th>
											<td><a href="<?php echo esc_attr( $context->data->item_1->link_url ); ?>">More details »</a></th>
											<td><a href="<?php echo esc_attr( $context->data->item_2->link_url ); ?>">More details »</a></th>

											<?php if ( true !== $context->data->hide_suboxone ) : ?>
												<td><a href="<?php echo esc_attr( $context->data->item_3->link_url ); ?>">More details »</a></th>
											<?php endif; ?>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif;
