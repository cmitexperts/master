// Footer CTA
export default class FooterCta {

	// Constructor
	constructor() {  }

	// Init
	init() {
		this.loadCtaWidgetOnLinkClick();
	}

	// Add CTA widget on link click (click event)
	loadCtaWidgetOnLinkClick() {
		let ctaState = false;

		const label = document.querySelector('.jp-footer-cta-widget-label');

		if (label) {
			label.addEventListener('click', (e) => {
				// e.preventDefault();

				if (!ctaState) {
					const wrapper = document.querySelector('.jp-footer-cta-widget-container');
					const html = '<iframe class="ctm-call-widget" src="https://app.calltrackingmetrics.com/form_reactors/FRT472ABB2C5B9B141A95E7A133293232FB64726C81D4381AEFF2617EDD86B68F50" style="width:100%;height:300px;border:none"></iframe>';

					wrapper.insertAdjacentHTML('beforeend', html);
					ctaState = true;
				}
			});
		}

		const button = document.querySelector('.jp-footer-cta-widget-btn-call');

		if (button) {
			button.addEventListener('click', (e) => {
				if (window.innerWidth >= 768) {
					e.preventDefault();
					label.click();
				}
			});
		}
	}

}
