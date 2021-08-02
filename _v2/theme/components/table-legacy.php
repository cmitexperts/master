<?php
/**
 * Table Legacy
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<section class="jp-component jp-table-legacy">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="jp-component-header jp-table-legacy-header">
					<h2 class="jp-component-title">Complete, Evidenced-Based Outpatient Treatments</h2>
					<div class="h3 jp-component-subtitle">Addressing issues that hide behind drugs & alcohol too like depression, anxiety or trauma.</div>
				</div>
			</div>
		</div>

		<div class="jp-table-legacy-cards">
			<div class="row">
				<div class="col-12 col-lg-4">
					<div class="jp-table-legacy-card">
						<img class="jp-table-legacy-card-img lazy-enhanced" height="125" width="125" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( WP_UPLOAD_PATH ); ?>/2020/06/jp-icon-meditation-180x180-1.png" alt="Session Types">
						<h3 class="jp-table-legacy-card-title">Sessions</h3>

						<ul class="jp-table-legacy-card-list">
							<li class="jp-table-legacy-card-list-item">Group Therapy</li>
							<li class="jp-table-legacy-card-list-item">Individual Therapy</li>
							<li class="jp-table-legacy-card-list-item">Medication Evaluations</li>
							<li class="jp-table-legacy-card-list-item">Life Coaching <a href="javascript:void(0);" class="jp-table-legacy-card-info" data-toggle="modal" data-target="#jp-op-modal-01"><span class="fas fa-info-circle"></span></a></li>
						</ul>
					</div>
				</div>

				<div class="col-12 col-lg-4">
					<div class="jp-table-legacy-card">
						<img class="jp-table-legacy-card-img lazy-enhanced" height="125" width="125" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( WP_UPLOAD_PATH ); ?>/2020/06/jp-icon-teaching-180x180-1.png" alt="Methodologies">
						<h3 class="jp-table-legacy-card-title">Methods</h3>

						<ul class="jp-table-legacy-card-list">
							<li class="jp-table-legacy-card-list-item">CBT and DBT Psychotherapy</li>
							<li class="jp-table-legacy-card-list-item">Trauma-Informed Care</li>
							<li class="jp-table-legacy-card-list-item">Motivational Interviewing</li>
							<li class="jp-table-legacy-card-list-item">Relapse Prevention Planning</li>
						</ul>
					</div>
				</div>

				<div class="col-12 col-lg-4">
					<div class="jp-table-legacy-card">
						<img class="jp-table-legacy-card-img lazy-enhanced" height="125" width="125" src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/empty.png" data-src="<?php echo esc_attr( WP_UPLOAD_PATH ); ?>/2020/06/jp-icon-molecular-180x180-1.png" alt="Medications">
						<h3 class="jp-table-legacy-card-title">Medications</h3>

						<ul class="jp-table-legacy-card-list">
							<li class="jp-table-legacy-card-list-item">Anticravings <a href="javascript:void(0);" class="jp-table-legacy-card-info" data-toggle="modal" data-target="#jp-op-modal-02"><span class="fas fa-info-circle"></span></a></li>
							<li class="jp-table-legacy-card-list-item">Alcohol-Specific <a href="javascript:void(0);" class="jp-table-legacy-card-info" data-toggle="modal" data-target="#jp-op-modal-03"><span class="fas fa-info-circle"></span></a></li>
							<li class="jp-table-legacy-card-list-item">Opiate-Specific <a href="javascript:void(0);" class="jp-table-legacy-card-info" data-toggle="modal" data-target="#jp-op-modal-04"><span class="fas fa-info-circle"></span></a></li>
							<li class="jp-table-legacy-card-list-item">Underlying Issues <a href="javascript:void(0);" class="jp-table-legacy-card-info" data-toggle="modal" data-target="#jp-op-modal-05"><span class="fas fa-info-circle"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
