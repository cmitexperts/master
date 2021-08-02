// LEGACY
export default class LEGACY {
	// Constructor
	constructor() {}

	// Init
	init() {
		this.buildAboutUsBiosSlider();
		this.buildAboutUsMentionsSlider();
		this.buildVirtualRehabBiosSlider();
	}

	// Build about us bios slider
	buildAboutUsBiosSlider() {
		const element = document.querySelector(
			'.jp-legacy-about-us .about-bio-slider'
		);

		if (element && typeof tns !== 'undefined') {
			const slider = tns({
				container: element,
				gutter: 40,
				autoplay: false,
				controls: false,
				nav: false,
				loop: false,
				responsive: {
					576: {
						items: 1
					},
					992: {
						items: 3
					}
				}
			});
		}
	}

	// Build about us mentions slider
	buildAboutUsMentionsSlider() {
		const elements = document.querySelectorAll(
			'.jp-legacy-about-us .bio-new-mentions'
		);

		if (elements.length > 0 && typeof tns !== 'undefined') {
			[...elements].forEach((element) => {
				const prevButton = element
					.closest('.bios')
					.querySelector('.see-less-mentions');
				const nextButton = element
					.closest('.bios')
					.querySelector('.see-more-mentions');

				const slider = tns({
					axis: 'vertical',
					container: element,
					autoplay: false,
					nav: false,
					loop: false,
					prevButton: prevButton,
					nextButton: nextButton,
					items: 3
				});
			});
		}
	}

	// Build virtual rehab bios slider
	buildVirtualRehabBiosSlider() {
		const element = document.querySelector(
			'.jp-legacy-virtual-rehab .bio-slider'
		);

		if (element && typeof tns !== 'undefined') {
			const prevButton = element
				.closest('.bio-section')
				.querySelector('.see-less-btn');
			const nextButton = element
				.closest('.bio-section')
				.querySelector('.see-more-btn');

			const slider = tns({
				container: element,
				gutter: 30,
				autoplay: false,
				// controls: false,
				nav: false,
				loop: false,
				prevButton: prevButton,
				nextButton: nextButton,
				responsive: {
					576: {
						items: 1
					},
					992: {
						items: 4
					}
				}
			});
		}
	}
}
