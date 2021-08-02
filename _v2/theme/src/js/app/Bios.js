// Bios
export default class Bios {

	// Constructor
	constructor() {  }

	// Init
	init() {
		this.buildBiosSlider();
	}

	// Build bios slider
	buildBiosSlider() {
		const element = document.querySelector('.jp-bios-slider');

		if (element && typeof tns !== 'undefined') {
			const slider = tns({
				container: '.jp-bios-slider',
				gutter: 40,
				autoplay: false,
				controlsPosition: 'bottom',
				nav: false,
				loop: false,
				controlsContainer: '.jp-bios-slider-btns',
				// prevButton: '.jp-bios-slider-btn.left',
				// nextButton: '.jp-bios-slider-btn.right',
				responsive: {
					576: {
						items: 1,
					},
					768: {
						items: 2
					},
					992: {
						items: 3
					},
					1200: {
						items: 4
					}
				}
			});
		}
	}

}
