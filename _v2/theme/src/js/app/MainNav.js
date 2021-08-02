// Main Navigation
export default class MainNav {

	// Constructor
	constructor() {
		this.mobileNavOpenClass = 'jp-header-nav-on';
		this.buttonSelector = '.jp-header-mobile-trigger';

		this.body = null;
		this.button = null;
	}

	// Init
	init() {
		this.body = document.querySelector('body');
		this.button = document.querySelector(this.buttonSelector);

		if (this.button) {
			this.onButtonClick();
		}
	}

	// On mobile main nav, open/close menu on button click
	onButtonClick() {
		const self = this;

		this.button.addEventListener('click', (e) => {
			e.preventDefault();

			if (self.body.classList.contains(self.mobileNavOpenClass)) {
				// Close
				this.body.classList.remove(self.mobileNavOpenClass);
			} else {
				// Open
				this.body.classList.add(self.mobileNavOpenClass);
			}

			// Focus button
			self.button.focus();
		});
	}

}
