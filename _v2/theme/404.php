<?php
/**
 * Not found Page Template
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

<!-- TEMPLATE: Not found Page Template -->

<div id="page" class="jp-page-404">
	<!-- COMPONENT: Not found -->
	<?php require_once THEME_PATH . '/_v2/theme/components/404.php'; ?>
	<!-- /COMPONENT: Not found -->

	<!-- COMPONENT: Footer CTA -->
	<?php require_once THEME_PATH . '/_v2/theme/components/footer-cta.php'; ?>
	<!-- /COMPONENT: Footer CTA -->
</div>

<!-- /TEMPLATE: Not found Page Template -->

<?php
// Footer.
get_footer( 'v2' );
