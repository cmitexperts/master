<?php
/**
 * About Us template
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

// WordPress functions file.
require_once get_stylesheet_directory() . '/_v2/theme/functions.php';

require_once get_stylesheet_directory() . '/classes/AboutUs.php';
global $context;
$context = new Pages\AboutUs();

// Custom styles.
define( 'STYLESHEET_NAME_V2', 'template-about-us' );

// Header.
get_header( 'v2' );

// Normalize Masthead object.
// We do this instead change classes/AboutUs.php, because classes/AboutUs.php
// is still used on the old about us template and we can't break the compatibility.
$context->above_fold = (object) array(
	'image'      => WP_UPLOAD_PATH . '/2020/07/about-journeypure-alcohol-rehab.jpg',
	'h1'         => '',
	'heading'    => 'Here, it\'s different.',
	'subheading' => 'Our mission is to help people become healthy and stay healthy. Our high standards attract well-known behavioral health professionals from across the country.  Their commitments to <u>ethics and patient success</u> are backed by the highest accreditation in the industry.',
	'interview'  => false,
	'arrowdown'  => false,
	'video'      => true,
);
?>

<!-- TEMPLATE: About Us -->

<div id="reviews" class="jp-reviews">

	<!-- COMPONENT: Masthead -->
	<?php require_once THEME_PATH . '/_v2/theme/components/masthead.php'; ?>
	<!-- /COMPONENT: Masthead -->

	<!-- COMPONENT: @TODO other sections -->

	<!-- COMPONENT: Footer CTA -->
	<?php require_once THEME_PATH . '/_v2/theme/components/footer-cta.php'; ?>
	<!-- /COMPONENT: Footer CTA -->

</div>

<!-- /TEMPLATE: About Us -->

<?php
// Footer.
get_footer( 'v2' );
