<?php
/**
 * Homepage template
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

// WordPress functions file.
require_once get_stylesheet_directory() . '/_v2/theme/functions.php';

require_once get_stylesheet_directory() . '/classes/Homepage.php';
global $context;
$context = new Homepage\Homepage();

// require_once get_stylesheet_directory() . '/classes/ReviewPage2.php';
// $reviews = new Pages\ReviewPage2( true );

// Custom styles.
define( 'STYLESHEET_NAME_V2', 'template-homepage' );

// Header.
get_header( 'v2' );

// Normalize Masthead object.
// We do this instead change classes/Homepage.php, because classes/Homepage.php
// is still used on the old homepage template and we can't break the compatibility.
$context->above_fold = (object) array(
	'image'      => get_stylesheet_directory_uri() . '/_v2/theme/assets/img/homepage/homepage-masthead-bckg.jpg',
	'h1'         => 'Drug & Alcohol Treatment Centers',
	'heading'    => "It's Time to Feel Happy Again",
	'subheading' => '"This place changed my life (and I didn\'t think treatment would ever work)...You don\'t have to just "get by." You don\'t have to chase or pretend anymore. You can feel happiness again, I promise."',
	'interview'  => true,
);

// Normalize Treatment Bios object.
// We do this instead change classes/Homepage.php, because classes/Homepage.php
// is still used on the old homepage template and we can't break the compatibility.
if ( ! empty( $context->bios ) ) {
	$context->treatment_bios = $context->bios;
}

// Normalize Bios object.
// We do this instead change classes/Homepage.php, because classes/Homepage.php
// is still used on the old homepage template and we can't break the compatibility.
if ( ! empty( $context->bioSection->bios ) ) {
	$context->bios = (object) array(
		'heading'    => 'You’re Not Alone',
		'subheading' => 'It\'s the personal story of each person that walks through the doors that gets us up in the morning and keeps us up at night. Here are a few of the 40+ doctorate or master\'s-level professionals you\'ll meet here.',
		'bios'       => $context->bioSection->bios,
	);
}

// Normalize FAQ object.
// We do this instead change classes/Homepage.php, because classes/Homepage.php
// is still used on the old homepage template and we can't break the compatibility.
if ( ! empty( $context->faqs ) ) {
	$context->block4 = (object) array(
		'image'      => WP_UPLOAD_PATH . '/2020/10/southeast-national-rehabs-faq-home.jpg',
		'heading'    => 'What\'s Holding You Back?',
		'subheading' => ' ',
		'faqs'       => $context->faqs,
	);
}
?>

<!-- TEMPLATE: Homepage -->

<div id="homepage" class="jp-homepage">

	<!-- COMPONENT: Masthead -->
	<?php require_once THEME_PATH . '/_v2/theme/components/homepage/masthead.php'; ?>
	<!-- /COMPONENT: Masthead -->

	<!-- COMPONENT: Highlights Horizontal -->
	<?php require_once THEME_PATH . '/_v2/theme/components/homepage/highlights-horizontal.php'; ?>
	<!-- /COMPONENT: Highlights Horizontal -->

	<!-- COMPONENT: Bios -->
	<?php require_once THEME_PATH . '/_v2/theme/components/bios.php'; ?>
	<!-- /COMPONENT: Bios -->

	<!-- COMPONENT: Facts -->
	<?php require_once THEME_PATH . '/_v2/theme/components/facts.php'; ?>
	<!-- /COMPONENT: Facts -->

	<!-- COMPONENT: Treatment -->
	<?php require_once THEME_PATH . '/_v2/theme/components/treatment.php'; ?>
	<!-- /COMPONENT: Treatment -->

	<!-- COMPONENT: FAQ -->
	<?php require_once THEME_PATH . '/_v2/theme/components/faq.php'; ?>
	<!-- /COMPONENT: FAQ -->

	<!-- COMPONENT: Process V2 -->
	<?php require_once THEME_PATH . '/_v2/theme/components/process-v2.php'; ?>
	<!-- /COMPONENT: Process V2 -->

	<!-- COMPONENT: Footer CTA -->
	<?php require_once THEME_PATH . '/_v2/theme/components/footer-cta.php'; ?>
	<!-- /COMPONENT: Footer CTA -->

</div>

<!-- /TEMPLATE: Homepage -->

<?php
// Footer.
get_footer( 'v2' );
