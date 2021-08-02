<?php
/**
 * Header
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<link rel="shortcut icon" href="<?php echo esc_attr( THEME_DIR ); ?>/favicon.ico">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>

		<?php wp_head(); ?>

		<!-- https://web.dev/uses-rel-preconnect/ -->
		<link rel="preconnect" href="https://chatservice.makerobos.com">

		<!-- https://web.dev/uses-rel-preload/ -->
		<!-- <link rel="preload" as="font" href="<?php echo esc_attr( THEME_DIR ); ?>/fonts/Montserrat-Thin.otf" type="font/otf" crossorigin="anonymous"> -->
		<!-- <link rel="preload" as="font" href="<?php echo esc_attr( THEME_DIR ); ?>/fonts/Montserrat-ExtraLight.otf" type="font/otf" crossorigin="anonymous"> -->
		<!-- <link rel="preload" as="font" href="<?php echo esc_attr( THEME_DIR ); ?>/fonts/Montserrat-Light.otf" type="font/otf" crossorigin="anonymous"> -->
		<link rel="preload" as="font" href="<?php echo esc_attr( THEME_DIR ); ?>/fonts/Montserrat-Regular.otf" type="font/otf" crossorigin="anonymous">
		<link rel="preload" as="font" href="<?php echo esc_attr( THEME_DIR ); ?>/fonts/Montserrat-Medium.otf" type="font/otf" crossorigin="anonymous">
		<link rel="preload" as="font" href="<?php echo esc_attr( THEME_DIR ); ?>/fonts/Montserrat-SemiBold.otf" type="font/otf" crossorigin="anonymous">
		<link rel="preload" as="font" href="<?php echo esc_attr( THEME_DIR ); ?>/fonts/Montserrat-Bold.otf" type="font/otf" crossorigin="anonymous">
		<!-- <link rel="preload" as="font" href="<?php echo esc_attr( THEME_DIR ); ?>/fonts/Montserrat-ExtraBold.otf" type="font/otf" crossorigin="anonymous"> -->
		<!-- <link rel="preload" as="font" href="<?php echo esc_attr( THEME_DIR ); ?>/fonts/Montserrat-Black.otf" type="font/otf" crossorigin="anonymous"> -->
		<link rel="preload" as="font" href="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/webfonts/fa-regular-400.woff2" type="font/woff2" crossorigin="anonymous">
		<link rel="preload" as="font" href="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/webfonts/fa-solid-900.woff2" type="font/woff2" crossorigin="anonymous">

		<!-- GOOGLE FONTS -->
		<?php
			// $cache_key             = 'styles-google-fonts-v2';
			// $google_fonts_css_body = get_transient( $cache_key );

			// if ( false === $google_fonts_css_body ) {
			// 	$google_fonts_css = wp_remote_get( 'https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap' );

			// 	if ( ! is_wp_error( $google_fonts_css ) && ! empty( $google_fonts_css ) ) {
			// 		$google_fonts_css_body = wp_remote_retrieve_body( $google_fonts_css );
			// 		$google_fonts_css_body = trim( preg_replace( '/\s+/', ' ', $google_fonts_css_body ) );
			// 		set_transient( $cache_key, $google_fonts_css_body, DAY_IN_SECONDS );
			// 	}
			// }

			// if ( false !== $google_fonts_css_body ) {
			// 	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			// 	echo '<style id="' . $cache_key . '">' . $google_fonts_css_body . '</style>';
			// }
		?>

		<!-- BOOTSTRAP 5 (no jQuery) -->
		<?php
			$cache_key          = 'styles-bootstrap-v2';
			$bootstrap_css_body = get_transient( $cache_key );

			if ( false === $bootstrap_css_body ) {
				// phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
				$bootstrap_css_body = file_get_contents( THEME_PATH . '/_v2/theme/assets/css/bootstrap.min.css' );

				if ( ! is_wp_error( $bootstrap_css_body ) && ! empty( $bootstrap_css_body ) ) {
					$bootstrap_css_body = trim( preg_replace( '/\s+/', ' ', $bootstrap_css_body ) );
					set_transient( $cache_key, $bootstrap_css_body, DAY_IN_SECONDS );
				}
			}

			if ( false !== $bootstrap_css_body ) {
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo '<style id="' . $cache_key . '">' . $bootstrap_css_body . '</style>';
			}
		?>

		<!-- FONT AWESOME -->
		<?php
			$cache_key             = 'styles-font-awesome-v2';
			$font_awesome_css_body = get_transient( $cache_key );

			if ( false === $font_awesome_css_body ) {
				// phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
				$font_awesome_css_body = file_get_contents( THEME_PATH . '/_v2/theme/assets/css/all.min.css' );

				if ( ! is_wp_error( $font_awesome_css_body ) && ! empty( $font_awesome_css_body ) ) {
					$font_awesome_css_body = trim( preg_replace( '/\s+/', ' ', str_replace( '../webfonts/fa-', THEME_DIR . '/_v2/theme/assets/webfonts/fa-', $font_awesome_css_body ) ) );
					set_transient( $cache_key, $font_awesome_css_body, DAY_IN_SECONDS );
				}
			}

			if ( false !== $font_awesome_css_body ) {
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo '<style id="' . $cache_key . '">' . $font_awesome_css_body . '</style>';
			}
		?>

		<!-- TINY SLIDER -->
		<?php
			$cache_key            = 'styles-tiny-slider-v2';
			$tiny_slider_css_body = get_transient( $cache_key );

			if ( false === $tiny_slider_css_body ) {
				// phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
				$tiny_slider_css_body = file_get_contents( THEME_PATH . '/_v2/theme/assets/css/tiny-slider.css' );

				if ( ! is_wp_error( $tiny_slider_css_body ) && ! empty( $tiny_slider_css_body ) ) {
					$tiny_slider_css_body = trim( preg_replace( '/\s+/', ' ', $tiny_slider_css_body ) );
					set_transient( $cache_key, $tiny_slider_css_body, DAY_IN_SECONDS );
				}
			}

			if ( false !== $tiny_slider_css_body ) {
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo '<style id="' . $cache_key . '">' . $tiny_slider_css_body . '</style>';
			}
		?>

		<!-- PAGE STYLES -->
		<?php
			$page_stylesheet = ( defined( 'STYLESHEET_NAME_V2' ) ? STYLESHEET_NAME_V2 : 'main' );

			if ( current_user_can( 'editor' ) || current_user_can( 'administrator' ) ) {
				$page_stylesheet_file = THEME_DIR . '/_v2/theme/assets/css/' . $page_stylesheet . '.css';
				Stylesheet::set_main_path( $page_stylesheet, $page_stylesheet_file, true );
			} else {
				$page_stylesheet_file = THEME_PATH . '/_v2/theme/assets/css/' . $page_stylesheet . '.css';
				Stylesheet::set_main_path_inline( $page_stylesheet, $page_stylesheet_file, true );
			}
		?>
	</head>

	<body <?php body_class(); ?>>
		<!-- GTM -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKJHBM9" height="0" width="0" style="display:none; visibility:hidden"></iframe>
		</noscript>

		<!-- SCHEMA -->
		<?php
			require_once THEME_PATH . '/classes/Schema.php';
			$schema = new Schema();
			$schema->getMarkup();
		?>

		<!-- NOTE BOX (PHP/HTML component) -->
		<?php
			require_once THEME_PATH . '/_v2/theme/components/note-box.php';
		?>

		<!-- HEADER -->
		<header class="jp-header">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-7 col-md-auto">
						<a class="jp-header-logo" href="<?php echo esc_attr( home_url() ); ?>">
							<!-- LOGO -->
							<?php
								require_once THEME_PATH . '/classes/LogoHandler.php';
								$logo_handler = new \Handlers\LogoHandler();
								echo $logo_handler->outputV2();
							?>
						</a>
					</div>

					<div class="col-5 d-block d-lg-none">
						<div class="row align-items-center">
							<div class="col-12 jp-header-mobile-trigger-wrapper">
								<?php if ( ! is_page_template( 'template-legacy-virtual-rehab.php' ) ) : ?>
									<figure class="jp-header-mobile-trigger"></figure>
								<?php else : ?>
									<span class="btn btn-cta">(844) 505-4799</span>
								<?php endif; ?>
							</div>
						</div>
					</div>

					<div class="col-md-auto d-none d-lg-block jp-header-nav-wrapper">
						<?php if ( ! is_page_template( 'template-legacy-virtual-rehab.php' ) ) : ?>
							<nav class="jp-header-nav">
								<ul class="jp-header-nav-list">
									<li class="jp-header-nav-item">
										<a class="jp-header-nav-link" href="<?php the_permalink( 25 ); ?>"><?php echo wp_kses_post( get_the_title( 25 ) ); ?></a>

										<ul class="jp-header-nav-list">
											<?php
												$cache_key = 'wp-v2-locations-api';
												$data      = get_transient( $cache_key );

												if ( false === $data ) {
													$request  = new WP_REST_Request( 'GET', '/wp/v2/locations-api' );
													$response = rest_do_request( $request );
													$data     = rest_get_server()->response_to_data( $response, true );

													if ( ! is_wp_error( $data ) && ! empty( $data ) ) {
														set_transient( $cache_key, $data, ( 15 * MINUTE_IN_SECONDS ) );
													}
												}

												if ( ! empty( $data ) ) :
													foreach ( $data as $location ) :
														// 1531 = Knoxville Alcohol & Drug Rehab.
														// 1455 = Military Program.
														// 5701 = Professionals Program.
														// 5739 = [V2] Tennessee Alcohol & Drug Rehab (production).
														// 5716 = [V2] Tennessee Alcohol & Drug Rehab (localhost).
														if ( in_array( (int) $location['id'], array( 1531, 1455, 5701, 5739, 5716 ), true ) ) {
															continue;
														}
														?>
															<li class="jp-header-nav-item">
																<a class="jp-header-nav-link" href="<?php the_permalink( $location['id'] ); ?>"><?php echo esc_html( get_the_title( $location['id'] ) ); ?></a>
															</li>
														<?php
													endforeach;
												endif;
											?>

											<li class="jp-header-nav-item">
												<a class="jp-header-nav-link" href="/locations/">Outpatient Locations</a>
											</li>
										</ul>
									</li>

									<li class="jp-header-nav-item">
										<a class="jp-header-nav-link" href="<?php the_permalink( 52 ); ?>"><?php echo wp_kses_post( get_the_title( 52 ) ); ?></a>
									</li>

									<li class="jp-header-nav-item">
										<a class="jp-header-nav-link" href="<?php the_permalink( 27 ); ?>"><?php echo wp_kses_post( get_the_title( 27 ) ); ?></a>
									</li>

									<li class="jp-header-nav-item">
										<button type="button" data-toggle="modal" data-target="#main-insurance-form" class="btn btn-secondary jp-header-btn"><span class="fas fa-id-card"></span> Check Insurance</button>
									</li>
								</ul>
							</nav>
						<?php else : ?>
							<button type="button" data-toggle="modal" data-target="#virtual-rehab-modal" class="btn btn-outline-secondary btn-outline-secondary-big"  style="display:none;"><span class="fas fa-comment"></span> Talk to a therapist now</button>
							<div>It's worth a call — (844) 505-4799</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</header>

		<main class="jp-main">
