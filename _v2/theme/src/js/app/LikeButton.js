// Like Button
export default class LikeButton {
	// Constructor
	constructor() {}

	// Init
	init() {
		this.buttons = document.querySelectorAll(
			'[data-like-object]:not(.like-button-enabled)'
		);

		if (this.buttons.length > 0) {
			this.onLikeButtonClick();
		}
	}

	// On like button click
	onLikeButtonClick() {
		this.buttons.forEach((button) => {
			button.classList.add('like-button-enabled');

			button.addEventListener('click', (e) => {
				e.preventDefault();

				const likeIdentifier = button.dataset.likeObject;
				const currentCountEl = button.querySelector('data');
				let currentCount = currentCountEl.value;

				const data = new FormData();
				data.append('action', 'like_action_hok');
				data.append('data', likeIdentifier);

				fetch('/wp-admin/admin-ajax.php', {
					method: 'post',
					body: data
				}).then(function (response) {
					currentCount++;

					currentCountEl.value = currentCount;
					currentCountEl.innerHTML = currentCount;

					// Is Internet Explorer OR Bootstrap is not defined
					if (window.isInternetExplorer || typeof bootstrap === 'undefined')
						return;
					// If it's NOT Internet Explorer and Bootstrap is defined, so continue...

					const tooltip = bootstrap.Tooltip.getInstance(button);

					tooltip.hide();
					button.dataset.originalTitle = 'Liked!';
					tooltip.update();
					tooltip.show();
				});
			});
		});
	}
}
