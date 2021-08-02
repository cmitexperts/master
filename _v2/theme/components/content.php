<?php
/**
 * Facts
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<section class="jp-component jp-content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							the_content();
						}
					}
				?>
			</div>
		</div>
	</div>
</section>
