// Lazy Load (images)
export default class LazyLoadWrapper {
	// Constructor
	constructor() {
		this.elements = null;
		this.IEimages = null;
		this.IEnotImages = null;
	}

	// Init before frameworks
	init() {
		// IE
		if (
			navigator.userAgent.indexOf('MSIE') !== -1 ||
			navigator.userAgent.indexOf('Trident') !== -1
		) {
			this.IEimages = document.querySelectorAll(
				'img.lazy-enhanced:not(.lazy-load-enabled)'
			);
			this.IEnotImages = document.querySelectorAll(
				'section.lazy-enhanced:not(.lazy-load-enabled), div.lazy-enhanced:not(.lazy-load-enabled), span.lazy-enhanced:not(.lazy-load-enabled)'
			);

			[...this.IEimages].forEach((element) => {
				element.classList.add('lazy-load-enabled');
				const src = element.dataset.src;

				if (src) {
					element.src = src;
				}
			});

			[...this.IEnotImages].forEach((element) => {
				element.classList.add('lazy-load-enabled');
				const src = element.dataset.src;

				if (src) {
					element.style.setProperty('background-image', `url('${src}')`);
				}
			});
		}

		// Not IE
		else {
			this.elements = document.querySelectorAll(
				'.lazy-enhanced:not(.lazy-load-enabled)'
			);

			if (this.elements && typeof lazyload !== 'undefined') {
				[...this.elements].forEach((element) =>
					element.classList.add('lazy-load-enabled')
				);

				lazyload(this.elements);
			}
		}
	}
}
