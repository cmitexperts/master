<?php
/**
 * Locations CTP template
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

// WordPress functions file.
require_once get_stylesheet_directory() . '/_v2/theme/functions.php';

require_once get_stylesheet_directory() . '/classes/Location.php';
global $context;
$context = new Locations\Location();

// $reviews_category_ids = get_field( 'reviews_category' );
// require_once get_stylesheet_directory() . '/classes/ReviewPage2.php';
// $reviews = new Pages\ReviewPage2( true, $reviews_category_ids );

// Custom styles.
define( 'STYLESHEET_NAME_V2', 'single-locations' );

// Header.
get_header( 'v2' );
?>

<!-- TEMPLATE: Locations CPT -->

<div id="single-location" class="jp-single-location">

	<!-- COMPONENT: Masthead V2 -->
	<?php require_once THEME_PATH . '/_v2/theme/components/single-locations/masthead-v2.php'; ?>
	<!-- /COMPONENT: Masthead V2 -->

	<!-- COMPONENT: Highlights -->
	<?php require_once THEME_PATH . '/_v2/theme/components/single-locations/highlights.php'; ?>
	<!-- /COMPONENT: Highlights -->

	<!-- COMPONENT: Bios -->
	<?php require_once THEME_PATH . '/_v2/theme/components/bios.php'; ?>
	<!-- /COMPONENT: Bios -->

	<!-- COMPONENT: Gallery -->
	<?php require_once THEME_PATH . '/_v2/theme/components/gallery.php'; ?>
	<!-- /COMPONENT: Gallery -->

	<!-- COMPONENT: Pillars -->
	<?php require_once THEME_PATH . '/_v2/theme/components/pillars.php'; ?>
	<!-- /COMPONENT: Pillars -->

	<!-- COMPONENT: FAQ -->
	<?php require_once THEME_PATH . '/_v2/theme/components/faq.php'; ?>
	<!-- /COMPONENT: FAQ -->

	<!-- COMPONENT: Location -->
	<?php require_once THEME_PATH . '/_v2/theme/components/location.php'; ?>
	<!-- /COMPONENT: Location -->

	<!-- COMPONENT: Process V2 -->
	<?php require_once THEME_PATH . '/_v2/theme/components/process-v2.php'; ?>
	<!-- /COMPONENT: Process -->

	<!-- COMPONENT: Footer CTA -->
	<?php require_once THEME_PATH . '/_v2/theme/components/footer-cta.php'; ?>
	<!-- /COMPONENT: Footer CTA -->

</div>

<!-- /TEMPLATE: Locations CPT -->

<?php
// Footer.
get_footer( 'v2' );
