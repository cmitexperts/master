<?php
/**
 * Note Box
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

$phone      = get_option( 'defaultPhone' );
$phone_attr = $phone;
$phone_attr = str_replace( array( '(', ')' ), '', $phone_attr );
$phone_attr = str_replace( array( ' ', '-' ), '-', $phone_attr );
?>

<?php if ( is_page_template( 'template-homepage-v2.php' ) ) : ?>

	<div class="jp-note-box">
		<div class="container">
			<div class="row">
				<div class="col">
					<p>We're accepting limited inpatient admissions with additional pre-screening procedures.</p>
					<p>Outpatient services, family therapy and alumni meetings are virtual-only.</p>
					<p>To learn more, call <?php echo esc_html( $phone ); ?>.</p>
				</div>
			</div>
		</div>

		<!-- <a class="jp-note-box-phone" href="tel:<?php echo esc_html( $phone_attr ); ?>" title="To learn more, call <?php echo esc_html( $phone ); ?>">
			<span class="fas fa-phone"></span>
		</a> -->
	</div>

<?php elseif ( is_singular( 'locations' ) ) : ?>

	<div class="jp-note-box">
		<div class="container">
			<div class="row">
				<div class="col">
					<p>This location is accepting limited admissions with additional pre-screening procedures.</p>
					<p>To learn more, call <?php echo esc_html( $phone ); ?>.</p>
				</div>
			</div>
		</div>

		<!-- <a class="jp-note-box-phone" href="tel:<?php echo esc_html( $phone_attr ); ?>" title="To learn more, call <?php echo esc_html( $phone ); ?>">
			<span class="fas fa-phone"></span>
		</a> -->
	</div>

<?php elseif ( is_page_template( 'template-legacy-suboxone-clinics.php' ) ) : ?>

	<div class="jp-note-box">
		<div class="container">
			<div class="row">
				<div class="col">
					<p>Due to COVID-19, Suboxone programs are mostly virtual.</p>
					<p>See your doctor or therapist while at home using an app like FaceTime instead of coming in person. Doctors still prescribe medications. Call to schedule your virtual appointment.</p>
					<p>To learn more, call <?php echo esc_html( $phone ); ?>.</p>
				</div>
			</div>
		</div>

		<!-- <a class="jp-note-box-phone" href="tel:<?php echo esc_html( $phone_attr ); ?>" title="To learn more, call <?php echo esc_html( $phone ); ?>">
			<span class="fas fa-phone"></span>
		</a> -->
	</div>

<?php endif; ?>
