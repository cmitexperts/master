// FAQ
export default class Faq {

	// Constructor
	constructor() {  }

	// Init
	init() {
		this.scrollOnTabClick();
	}

	// Scroll on tab click
	scrollOnTabClick() {
		const faq = document.getElementById('faq');

		if (faq) {
			faq.addEventListener('shown.bs.collapse', (e) => {
				if (window.innerWidth < 768) {
					const scrollBehavior = window.matchMedia('(prefers-reduced-motion)').matches ? 'auto' : 'smooth';
					const item = e.target.closest('.jp-faq-accordion-item');

					const bodyTop = document.body.getBoundingClientRect().top;
					const compomentTop = item.getBoundingClientRect().top;
					const topPosition = compomentTop - bodyTop;

					if (app.polyfill.supportsNativeSmoothScroll) {
						window.scroll({
							top: topPosition,
							behavior: scrollBehavior
						});
					} else {
						app.polyfill.smoothScrollTo(topPosition, 500);
					}
				}
			});
		}
	}

}
