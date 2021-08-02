// Process
export default class Process {

	// Constructor
	constructor() {  }

	// Init
	init() {
		this.hackTabsClick();
	}

	// Hack tabs click event
	hackTabsClick() {
		let ctaState = false;

		const tabs = document.querySelectorAll('.jp-process-tab-link');

		[...tabs].forEach(tab => tab.addEventListener('shown.bs.tab', (e) => {
			const newActive = e.target;
			const previousActive = e.relatedTarget;

			// Remove all "visited" class
			[...tabs].forEach(_tab => _tab.classList.remove('visited'));

			// Add "visited" class to the previous siblings
			let foundMe = false;
			[...tabs].forEach((_tab) => {
				if (!foundMe && _tab !== newActive) {
					_tab.classList.add('visited');
				} else {
					foundMe = true;
				}
			});
		}));
	}

}
