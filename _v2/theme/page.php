<?php
/**
 * Default Page Template
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

// Custom styles.
define( 'STYLESHEET_NAME_V2', 'page' );

// Header.
get_header( 'v2' );
?>

<!-- TEMPLATE: Default Page Template -->

<div id="page" class="jp-page">
	<!-- COMPONENT: Content -->
	<?php require_once THEME_PATH . '/_v2/theme/components/content.php'; ?>
	<!-- /COMPONENT: Content -->

	<!-- COMPONENT: Footer CTA -->
	<?php require_once THEME_PATH . '/_v2/theme/components/footer-cta.php'; ?>
	<!-- /COMPONENT: Footer CTA -->
</div>

<!-- /TEMPLATE: Default Page Template -->

<?php
// Footer.
get_footer( 'v2' );
