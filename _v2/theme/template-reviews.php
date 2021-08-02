<?php
/**
 * Reviews template
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

// WordPress functions file.
require_once get_stylesheet_directory() . '/_v2/theme/functions.php';

require_once get_stylesheet_directory() . '/classes/ReviewPage2.php';
global $context;
$context = new Pages\ReviewPage2();

// Custom styles.
define( 'STYLESHEET_NAME_V2', 'template-reviews' );

// Header.
get_header( 'v2' );

// Normalize Masthead object.
// We do this instead change classes/ReviewPage2.php, because classes/ReviewPage2.php
// is still used on the old reviews template and we can't break the compatibility.
$context->above_fold = (object) array(
	'image'      => WP_UPLOAD_PATH . '/2020/07/journeypure-rehab-reviews.jpg',
	'h1'         => '',
	'heading'    => 'We\'ve Helped 6K+ People Get Their Life Back on Track',
	'subheading' => 'Chance are, we can help you too.',
	'interview'  => false,
);

// Normalize Treatment Bios object.
// We do this instead change classes/ReviewPage2.php, because classes/ReviewPage2.php
// is still used on the old reviews template and we can't break the compatibility.
if ( ! empty( $context->bios ) ) {
	$context->only_treatment_bios = true;
	$context->treatment_bios      = $context->bios;
}
?>

<!-- TEMPLATE: Reviews -->

<div id="reviews" class="jp-reviews">

	<!-- COMPONENT: Masthead -->
	<?php require_once THEME_PATH . '/_v2/theme/components/masthead.php'; ?>
	<!-- /COMPONENT: Masthead -->

	<!-- COMPONENT: Videos -->
	<?php require_once THEME_PATH . '/_v2/theme/components/videos.php'; ?>
	<!-- /COMPONENT: Videos -->

	<!-- COMPONENT: Treatment -->
	<?php require_once THEME_PATH . '/_v2/theme/components/treatment.php'; ?>
	<!-- /COMPONENT: Treatment -->

	<!-- COMPONENT: Reviews V2 -->
	<?php require_once THEME_PATH . '/_v2/theme/components/reviews-v2.php'; ?>
	<!-- /COMPONENT: Reviews V2 -->

	<!-- COMPONENT: Footer CTA -->
	<?php require_once THEME_PATH . '/_v2/theme/components/footer-cta.php'; ?>
	<!-- /COMPONENT: Footer CTA -->

</div>

<!-- /TEMPLATE: Reviews -->

<?php
// Footer.
get_footer( 'v2' );
