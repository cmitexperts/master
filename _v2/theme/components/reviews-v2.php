<?php
/**
 * Reviews
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<?php if ( ! empty( $context->reviews ) ) : ?>
	<section class="jp-component jp-reviews-v2">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="jp-component-header">
						<h2 class="jp-component-title">Hundreds of Positive Reviews</h2>
						<div class="h3 jp-component-subtitle">The powerful reviews found on sites like Google, Facebook and Rehabs.com are a reflection of us not cutting corners and doing what's right for each person - no matter what.</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="jp-reviews-v2-box" data-page="1" data-cat="" data-url="<?php echo esc_attr( admin_url( 'admin-ajax.php' ) ); ?>" data-nonce="<?php echo esc_attr( wp_create_nonce( 'get_reviews' ) ); ?>">
						<div class="jp-reviews-v2-box-inner">
							<div class="jp-reviews-v2-top">
								<div class="jp-reviews-v2-summary">
									<p class="jp-reviews-v2-summary-avg"><?php echo esc_html( $context->review_avg ); ?></p>

									<div class="jp-reviews-v2-summary-stars">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>

									<p class="jp-reviews-v2-summary-total"><?php echo esc_html( $context->review_total ); ?> reviews</p>
								</div>

								<div class="jp-reviews-v2-filter">
									<label for="sort">Sort by:</label>

									<select id="sort">
										<!-- <option value="ml">Most Liked</option> -->
										<option value="n" selected="selected">Newest</option>
										<option value="o">Oldest</option>
										<option value="lr">Lowest Rated</option>
										<option value="hr">Highest Rated</option>
									</select>
								</div>
							</div>

							<div class="jp-reviews-v2-reviews">
								<div class="jp-reviews-v2-reviews-inner">
									<?php
										global $_reviews;
										$_reviews = $context;
										require get_stylesheet_directory() . '/_v2/theme/parts/review-items.php';
									?>
								</div>

								<button class="jp-reviews-v2-loading-button btn btn-blue">Load more</button>
							</div>

							<?php require get_stylesheet_directory() . '/_v2/theme/parts/loading-icon.php'; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
