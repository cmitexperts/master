// Frontman (chat)
export default class Frontman {
	// Constructor
	constructor() {
		this.body = null;
		this.button = null;
	}

	// Init
	init() {
		this.body = document.querySelector('body');
		this.ctas = document.querySelectorAll(
			'[data-toggle="modal"][data-target="#main-insurance-form"]'
		);

		this.addHtml();
		this.changeCtaClicks();
		this.addButtonClickEvent();
		this.addCtaClickEvent();
	}

	// Add button HTML to the body
	addHtml() {
		// Inserting directly on footer.php
		// const html =	`<a class="jp-frontman-text" href="tel:1-844-505-4799">
		// 					<div class="jp-frontman-text-top">Get Help Now!</div>
		// 					<div class="jp-frontman-text-bottom">
		// 						<span class="fas fa-phone-alt jp-frontman-text-bottom-icon"></span>
		// 						<span class="jp-frontman-text-bottom-call"> Call</span> (844) 505-4799
		// 					</div>
		// 				</a>`;

		// this.body.insertAdjacentHTML('beforeend', html);

		this.button = document.querySelector('.jp-frontman-text');

		// Is IE
		if (
			navigator.userAgent.indexOf('MSIE') !== -1 ||
			navigator.userAgent.indexOf('Trident') !== -1
		) {
			// Add IE class to the button
			this.button.classList.add('msie');
		}
	}

	// Change CTA click event
	changeCtaClicks() {
		// Is not IE
		if (
			navigator.userAgent.indexOf('MSIE') === -1 &&
			navigator.userAgent.indexOf('Trident') === -1
		) {
			// Make all the insurances CTA open the new chat instead
			[...this.ctas].forEach((cta) => {
				cta.removeAttribute('data-toggle');
				cta.removeAttribute('data-target');
				cta.classList.add('frontman-cta-insurance');
			});
		}
	}

	// On button click on desktop, shows the chat modal
	addButtonClickEvent() {
		const self = this;

		this.button.addEventListener('click', (e) => {
			if (window.innerWidth >= 768) {
				e.preventDefault();

				const frontmanButton = document.querySelector('.mr-btn-wrapper');
				if (frontmanButton) {
					frontmanButton.click();
				}
			}
		});
	}

	// On CTA click, shows the chat modal with the Insurance tab open
	addCtaClickEvent() {
		const self = this;

		document.addEventListener(
			'click',
			(e) => {
				if (!e.target.matches('.frontman-cta-insurance')) {
					return;
				}

				e.preventDefault();

				document.location.hash = '#Insurance';

				const frontmanButton = document.querySelector('.mr-btn-wrapper');
				if (frontmanButton) {
					frontmanButton.click();
				}

				const frontmanIframe = document.querySelector('#makerobos_chat');
				if (frontmanIframe) {
					frontmanIframe.setAttribute(
						'src',
						frontmanIframe.getAttribute('src')
					);
				}
			},
			false
		);
	}
}
