// Process V2
export default class ProcessV2 {

	// Constructor
	constructor() {  }

	// Init
	init() {
		this.buildProcessSlider();
	}

	// Build process slider
	buildProcessSlider() {
		const element = document.querySelector('.jp-process-v2-body-slider');

		if (element && typeof tns !== 'undefined') {
			const slider = tns({
				container: '.jp-process-v2-body-slider',
				gutter: 40,
				autoplay: false,
				controls: false,
				navPosition: 'bottom',
				items: 1
			});
		}
	}

}
