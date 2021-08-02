<?php
/**
 * Process
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  jp
 */

global $context;
?>

<section class="jp-component jp-process">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="jp-component-header jp-component-header-left">
					<h2 class="jp-component-title jp-process-title">The Process is Simple</h2>
					<div class="h3 jp-component-subtitle">It starts with a simple conversation to see if we’d be a good fit.</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<ul class="nav nav-tabs jp-process-tabs" role="tablist">
					<li role="presentation" class="jp-process-tab">
						<a class="jp-process-tab-link active" href="#discover" aria-controls="discover" role="tab" data-toggle="tab">
							<span class="jp-process-tab-icon call lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/process/icon-call-active.svg" aria-hidden="true"></span>
							<p class="jp-process-tab-text">Call</p>
						</a>
					</li>

					<li role="presentation" class="jp-process-tab">
						<a class="jp-process-tab-link" href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab">
							<span class="jp-process-tab-icon insurance lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/process/icon-insurance.svg" aria-hidden="true"></span>
							<p class="jp-process-tab-text">Insurance</p>
						</a>
					</li>

					<li role="presentation" class="jp-process-tab">
						<a class="jp-process-tab-link" href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab">
							<span class="jp-process-tab-icon start lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/process/icon-start.svg" aria-hidden="true"></span>
							<p class="jp-process-tab-text">Start</p>
						</a>
					</li>

					<li role="presentation" class="jp-process-tab">
						<a class="jp-process-tab-link" href="#reporting" aria-controls="reporting" role="tab" data-toggle="tab">
							<span class="jp-process-tab-icon heal lazy-enhanced" data-src="<?php echo esc_attr( THEME_DIR ); ?>/_v2/theme/assets/img/process/icon-heal.svg" aria-hidden="true"></span>
							<p class="jp-process-tab-text">Heal</p>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="tab-content jp-process-content-wrapper">
					<div role="tabpanel" class="tab-pane active" id="discover">
						<div class="jp-process-content">
							<div class="row">
								<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
									<div class="jp-process-content-inner">
										<p class="h2-small jp-process-content-title">Make The Call</p>
										<p class="h3 jp-process-content-text">Because this location sometimes operates on a wait-list, it's best to call in as early as possible. You don't have to commit to coming here and you'll feel better after you talk to someone who actually understands.</p>
										<p class="btn btn-cta btn-large jp-process-content-btn"><i class="fas fa-phone"></i> <?php echo esc_html( get_option( 'defaultPhone' ) ); ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="strategy">
						<div class="jp-process-content">
							<div class="row">
								<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
									<div class="jp-process-content-inner">
										<p class="h2-small jp-process-content-title">Discuss Any Costs</p>
										<p class="h3 jp-process-content-text">Insurance covers the majority of your cost here! How much you owe depends on your insurance policy's deductible and co-insurance rates. Don't worry, we'll confidentially look at your policy and explain everything. You can <a data-toggle="modal" data-target="#main-insurance-form" href="#">submit insurance information online</a>.</p>
										<p class="h3 jp-process-content-text">(If you don't have insurance, you still have options. We can talk about that).</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="optimization">
						<div class="jp-process-content">
							<div class="row">
								<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
									<div class="jp-process-content-inner">
										<p class="h2-small jp-process-content-title">Start Treatment</p>
										<p class="h3 jp-process-content-text">Our locations often operate on waiting lists, but we're as accommodating as possible with the schedule. It helps to call early in your decision process and come in while you're still motivated.</p>
										<p class="h3 jp-process-content-text">The first thing you notice when you walk in is an overwhelming sense of hope and compassion. You're surrounded by people that actually understand you.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="reporting">
						<div class="jp-process-content">
							<div class="row">
								<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
									<div class="jp-process-content-inner">
										<p class="h2-small jp-process-content-title">The Treatment Process</p>
										<p class="h3 jp-process-content-text">Intensive cognitive-behavioral therapies aren't as boring as they sound. You tackle issues hiding behind drugs and alcohol like trauma, depression or anxiety. And, you graduate feeling better than ever with a plan and a coach to help you stay on track long after treatment ends.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
