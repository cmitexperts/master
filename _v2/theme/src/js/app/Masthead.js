// Masthead
export default class Masthead {

	// Constructor
	constructor() {
		this.button = null;
	}

	// Init
    init() {
        this.compoment = document.querySelector('.jp-masthead');
		this.button = document.querySelector('.jp-masthead-go-down');

        if (this.compoment && this.button) {
			this.onScrollButtonClick();
		}
    }

	// On scroll button/link click
    onScrollButtonClick() {
		const self = this;
		const scrollBehavior = window.matchMedia('(prefers-reduced-motion)').matches ? 'auto' : 'smooth';

        this.button.addEventListener('click', (e) => {
			e.preventDefault();

			const bodyTop = document.body.getBoundingClientRect().top;
			const compomentTop = self.compoment.getBoundingClientRect().top;
			const compomentHeight = self.compoment.getBoundingClientRect().height;
			const topPosition = (compomentTop + compomentHeight) - bodyTop;

            if (app.polyfill.supportsNativeSmoothScroll) {
                window.scroll({
                    top: topPosition,
                    behavior: scrollBehavior
                });
            } else {
                app.polyfill.smoothScrollTo(topPosition, 500);
            }
        });
    }
}
