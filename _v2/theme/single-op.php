<?php
/**
 * OP CTP template
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

// WordPress functions file.
require_once get_stylesheet_directory() . '/_v2/theme/functions.php';

require_once get_stylesheet_directory() . '/classes/OP.php';
global $context;
$context = new Pages\OP();

// Custom styles.
define( 'STYLESHEET_NAME_V2', 'single-op' );

// Header.
get_header( 'v2' );

// Normalize Masthead object.
// We do this instead change classes/OP.php, because classes/OP.php
// is still used on the old OP template and we can't break the compatibility.
$context->above_fold = (object) array(
	'image'      => $context->masthead_image,
	'h1'         => $context->masthead_h1,
	'heading'    => $context->masthead_title,
	'subheading' => $context->masthead_subtitle,
	'interview'  => true,
);

// Reviews object.
$context->reviews_blocks = (object) array(
	'heading'    => 'You\'re TWICE As Likely to Get Better Here',
	'subheading' => 'Our success rates are double the national average from the <a href="https://www.drugabuse.gov/publications/drugs-brains-behavior-science-addiction/treatment-recovery" target="_blank">National Institute of Health</a>. Here are a few stories behind the data to prove that you can do this!',
	'list'       => array(
		(object) array(
			'heading'      => 'Stephanie C.',
			'star_rating'  => 5,
			'sober_since'  => '',
			'review_text'  => 'JourneyPure IOP is the <b>first and only treatment program</b> I have ever tried. I came into the program with 20 years of using and abusing under my belt, and now I am coming up on <b>2 years sober</b> in November. The program literally <b>saved my life.</b>',
			'photo'        => array(
				'image' => WP_UPLOAD_PATH . '/2019/11/reviewer-300x300.jpg',
				'alt'   => 'Stephanie C.',
			),
			'source_image' => array(
				'image' => WP_UPLOAD_PATH . '/2019/10/Google-Logo.png',
				'alt'   => 'Review from Google',
			),
		),
		(object) array(
			'heading'      => 'Bree M.',
			'star_rating'  => 5,
			'sober_since'  => '',
			'review_text'  => 'I <b>enjoyed going</b> to class and even <b>asked for extra days</b>. I am so grateful there\'s an alumni meeting I can attend so that I can check in with everybody. I feel like all of the workers <b>truly care about you</b> with <b>no judgment</b>.',
			'photo'        => array(
				'image' => WP_UPLOAD_PATH . '/2019/11/reviewer-300x300.jpg',
				'alt'   => 'Bree M.',
			),
			'source_image' => array(
				'image' => WP_UPLOAD_PATH . '/2019/10/Google-Logo.png',
				'alt'   => 'Review from Google',
			),
		),
		(object) array(
			'heading'      => 'John B.',
			'star_rating'  => 5,
			'sober_since'  => '',
			'review_text'  => 'I had <b>been to other IOP programs</b> before but JourneyPure was by far the <b>most helpful</b>. The staff and therapists <b>actually cared</b> and I am <b>still in contact</b> with most of them still to this day.',
			'photo'        => array(
				'image' => WP_UPLOAD_PATH . '/2019/11/reviewer-300x300.jpg',
				'alt'   => 'John B.',
			),
			'source_image' => array(
				'image' => WP_UPLOAD_PATH . '/2019/10/Google-Logo.png',
				'alt'   => 'Review from Google',
			),
		),
		(object) array(
			'heading'      => 'Chris B.',
			'star_rating'  => 5,
			'sober_since'  => '',
			'review_text'  => 'Everyone at Journey Pure went <b>above and beyond</b> to tailor a treatment plan to meet my <b>specific needs</b> &amp; goals. Everyone from the Dr. to the staff and the therapists were <b>super empathetic</b>...',
			'photo'        => array(
				'image' => WP_UPLOAD_PATH . '/2019/11/reviewer-300x300.jpg',
				'alt'   => 'Chris B.',
			),
			'source_image' => array(
				'image' => WP_UPLOAD_PATH . '/2019/10/Google-Logo.png',
				'alt'   => 'Review from Google',
			),
		),
	),
);

// Populate the reviews array with dynamic data
$reviews = get_field('op_single_reviews'); //Get the new array of reviews from ACF
$context->reviews_blocks->list = []; //Reset the old reviews array

foreach ( $reviews as $review ) {
	$context->reviews_blocks->list[] = (object) array(
		'heading'      => get_the_title( $review->ID ),
		'star_rating'  => get_field( 'star_rating' ,$review->ID ),
		'sober_since'  => get_field( 'sober_since' ,$review->ID ),
		'review_text'  => get_field( 'review_text' ,$review->ID ),
		'photo'        => array(
				'image' => get_field( 'image' ,$review->ID )['url'],
				'alt'   => get_field( 'image' ,$review->ID )['alt'],
		),
		'source_image' => array(
				'image' => get_field( 'source_image' ,$review->ID )['url'],
				'alt'   => get_field( 'source_image' ,$review->ID )['alt'],
		),
	);
}

$context->block4 = (object) array();

// Normalize FAQ object.
// We do this instead change classes/OP.php, because classes/OP.php
// is still used on the old OP template and we can't break the compatibility.
if ( ! empty( $context->faq ) ) {
	$context->block4 = (object) array(
		'image'      => WP_UPLOAD_PATH . '/2020/10/southeast-national-rehabs-faq-home.jpg',
		'heading'    => $context->faq->heading,
		'subheading' => $context->faq->subheading,
		'faqs'       => $context->faq->faqs,
	);
}

// Normalize Location object.
// We do this instead change classes/OP.php, because classes/OP.php
// is still used on the old OP template and we can't break the compatibility.
if ( ! empty( $context->location ) ) {
	$context->block4->location = (object) array(
		'title'          => $context->location->title,
		'name'           => $context->location->name,
		'street_address' => $context->location->street_address,
		'city'           => $context->location->city,
		'state'          => $context->location->state,
		'zip'            => $context->location->zip,
		'full_address'   => $context->location->full_address,
	);

	$context->highlights_v2 = (object) array(
		'tag_sections' => $context->location->tag_sections,
	);
}
?>

<!-- TEMPLATE: OP CPT -->

<div id="single-op" class="jp-single-op">

	<!-- COMPONENT: Masthead -->
	<?php require_once THEME_PATH . '/_v2/theme/components/single-op/masthead.php'; ?>
	<!-- /COMPONENT: Masthead -->

	<!-- COMPONENT: Data -->
	<?php require_once THEME_PATH . '/_v2/theme/components/single-op/data.php'; ?>
	<!-- /COMPONENT: Data -->

	<!-- COMPONENT: Highlights Legacy -->
	<?php require_once THEME_PATH . '/_v2/theme/components/single-op/highlights-legacy.php'; ?>
	<!-- /COMPONENT: Highlights Legacy -->

	<!-- COMPONENT: Table Legacy -->
	<?php require_once THEME_PATH . '/_v2/theme/components/single-op/table-legacy.php'; ?>
	<!-- /COMPONENT: Table Legacy -->

	<!-- COMPONENT: Reviews -->
	<?php require_once THEME_PATH . '/_v2/theme/components/single-op/reviews.php'; ?>
	<!-- /COMPONENT: Reviews -->

	<!-- COMPONENT: Bios -->
	<?php require_once THEME_PATH . '/_v2/theme/components/single-op/bios.php'; ?>
	<!-- /COMPONENT: Bios -->

	<!-- COMPONENT: FAQ -->
	<?php require_once THEME_PATH . '/_v2/theme/components/single-op/faq.php'; ?>
	<!-- /COMPONENT: FAQ -->

	<!-- COMPONENT: Location V2 -->
	<?php require_once THEME_PATH . '/_v2/theme/components/single-op/location-v2.php'; ?>
	<!-- /COMPONENT: Location V2 -->

	<!-- COMPONENT: Process V2 -->
	<?php require_once THEME_PATH . '/_v2/theme/components/process-v2.php'; ?>
	<!-- /COMPONENT: Process V2 -->

	<!-- COMPONENT: Footer CTA -->
	<?php require_once THEME_PATH . '/_v2/theme/components/footer-cta.php'; ?>
	<!-- /COMPONENT: Footer CTA -->

</div>

<!-- /TEMPLATE: OP CPT -->

<?php
// Footer.
get_footer( 'v2' );
