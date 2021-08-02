// All imports
import Polyfill from './Polyfill';
import Global from './Global';
import Browser from './Browser';
import LazyLoadWrapper from './LazyLoadWrapper';
import MainNav from './MainNav';
import Frontman from './Frontman';
import Masthead from './Masthead';
import MastheadV2 from './MastheadV2';
import Bios from './Bios';
import Process from './Process';
import ProcessV2 from './ProcessV2';
import FooterCta from './FooterCta';
import Faq from './Faq';
import LikeButton from './LikeButton';
import ExitModal from './ExitModal';
import LEGACY from './LEGACY';

// App
export default class App {
	// Constructor
	constructor() {
		// All classes instances
		this.polyfill = new Polyfill();
		this.global = new Global();
		this.browser = new Browser();
		this.lazyLoadWrapper = new LazyLoadWrapper();
		this.mainNav = new MainNav();
		this.frontman = new Frontman();
		this.masthead = new Masthead();
		this.mastheadV2 = new MastheadV2();
		this.bios = new Bios();
		this.process = new Process();
		this.processV2 = new ProcessV2();
		this.footerCta = new FooterCta();
		this.faq = new Faq();
		this.likeButton = new LikeButton();
		this.exitModal = new ExitModal();
		this.legacy = new LEGACY();
	}

	// On DOM ready
	onDomReady() {
		const self = this;

		// On DOM ready
		document.addEventListener('DOMContentLoaded', () => {
			if (
				document.readyState === 'interactive' ||
				document.readyState === 'complete'
			) {
				// Global
				this.global.init();

				// Browser
				this.browser.init();

				// Lazy Load (images)
				this.lazyLoadWrapper.init();

				// Main Navigation
				this.mainNav.init();

				// Masthead
				this.masthead.init();

				// Masthead V2
				this.mastheadV2.init();

				// Bios
				this.bios.init();

				// Process
				this.process.init();

				// Process V2
				this.processV2.init();

				// Footer CTA
				this.footerCta.init();

				// FAQ
				this.faq.init();

				// Like Button
				this.likeButton.init();

				// Exit Modal
				this.exitModal.init();

				// LEGACY
				this.legacy.init();
			}
		});

		// On WINDOW ready
		window.onload = () => {
			// Frontman (chat)
			this.frontman.init();
		};
	}
}
