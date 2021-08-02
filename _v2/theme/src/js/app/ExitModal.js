// Import
import Cookie from "./Cookie";

// Exit Modal
export default class ExitModal {

	// Constructor
	constructor() {
		this.cookie = new Cookie();
		this.mouseX = null;
		this.mouseY = null;
		this.counter = 0;
		this.modal = null;
	}

	// Init
	init() {
		this.modal = document.getElementById('jp-exit-modal');

		if (this.modal) {
			this.cookieValue = this.cookie.getCookie('jp_exit_modal_show');

			if (this.cookieValue !== '1') {
				this.showModalOnMouseMovement();
			}
		}
	}

	// Scroll modal on mouse movement
	showModalOnMouseMovement() {
		const self = this;

		document.addEventListener('mousemove', (e) => {
			// Desktop
			if (window.innerWidth >= 768) {
				self.mouseX = e.clientX;
				self.mouseY = e.clientY;
			}
		});

		document.addEventListener('mouseout', (e) => {
			// Desktop
			if (window.innerWidth >= 768) {
				if (self.mouseX && self.mouseY && self.mouseY < 100) {
					if (self.counter < 1) {
						// Is Internet Explorer OR Bootstrap is not defined
						if (window.isInternetExplorer || typeof bootstrap === 'undefined') return;
						// If it's NOT Internet Explorer and Bootstrap is defined, so continue...

						// Modal
						const modal = new bootstrap.Modal(self.modal);
						modal.show();

						// Set cookie
						this.cookie.setCookie('jp_exit_modal_show', '1', 1);
					}

					self.counter = self.counter + 1;
				}
			}
		});
	}

}
