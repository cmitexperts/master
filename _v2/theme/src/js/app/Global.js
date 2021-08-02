// Global
export default class Global {
	// Constructor
	constructor() {
		this.scriptsDelay = 3000;
	}

	// Init
	init() {
		const self = this;

		// Delay 3s
		setTimeout(function () {
			self.addScript();
			self.addGtm();
			self.loadIframes();
			self.checkHashVirtualRehab();
		}, this.scriptsDelay);

		this.onClickLoadYoutubeVideoEmbed();
		this.onSlideLoadLoadImages();
		this.onClickReviewReadMore();
		this.onDemandReviewsLoadMore();
		this.stopYoutubeIframeOnModalClose();
		this.enableTooltips();
	}

	// Add script
	addScript() {
		(function (d, s) {
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s);
			j.async = true;
			j.src = '//130400.tctm.co/t.js';
			f.parentNode.insertBefore(j, f);
		})(document, 'script');
	}

	// Add GTM script
	addGtm() {
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NKJHBM9');
	}

	// Load iframes
	loadIframes(iframe) {
		const _setInterval = function (_iframe) {
			// const url = _iframe.dataset.urlValue;
			// _iframe.src = url;

			// Only load the _iframe if it's visible
			let interval = setInterval(function () {
				if (_iframe && _iframe.offsetParent !== null && !_iframe.src) {
					const url = _iframe.dataset.urlValue;
					_iframe.src = url;

					// if (interval) {
					// 	clearInterval(interval);
					// }
				}
			}, 300);
		};

		if (iframe) {
			_setInterval(iframe);
		} else {
			const iframes = document.querySelectorAll(
				'.ctm-call-widget, .iframe-to-load'
			);
			[...iframes].forEach((iframe) => _setInterval(iframe));
		}
	}

	// Check Virtual Rehab hash
	checkHashVirtualRehab() {
		if (document.location.hash === '#schedule') {
			const modalElement = document.querySelector('#virtual-rehab-modal');

			if (modalElement) {
				// Is Internet Explorer OR Bootstrap is not defined
				if (window.isInternetExplorer || typeof bootstrap === 'undefined')
					return;
				// If it's NOT Internet Explorer and Bootstrap is defined, so continue...

				const modal = bootstrap.Modal.getInstance(modalElement);
				modal.show();
			}
		}
	}

	// Top top
	toTop() {
		window.scrollTo({ top: 0, behavior: 'smooth' });
	}

	// Add Youtube video embed (click event)
	onClickLoadYoutubeVideoEmbed() {
		const self = this;
		const contexts = document.querySelectorAll('.youtube-video-context');

		[...contexts].forEach((context) => {
			const placeholder = [
				...context.querySelectorAll('.youtube-video-place')
			].find((item) => item.offsetWidth > 0 && item.offsetHeight > 0);
			const title = context.querySelector('.youtube-video-title');
			const text = context.querySelector('.youtube-video-text');
			const items = context.querySelectorAll('.youtube-video-item');

			[...items].forEach((item) => {
				const _cta = item.querySelector('.youtube-video-cta');
				const _title = item.querySelector('.youtube-video-cta-title');
				const _text = item.querySelector('.youtube-video-cta-text');

				_cta.addEventListener('click', (e) => {
					const _url = _cta.dataset.urlValue;
					const _html = `<iframe class="iframe-to-load" data-url-value="${_url}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
					placeholder.innerHTML = _html;

					const _iframe = placeholder.querySelector('.iframe-to-load');
					self.loadIframes(_iframe);

					if (title) {
						title.innerHTML = _title.innerHTML;
					}

					if (text) {
						text.innerHTML = _text.innerHTML;
					}
				});
			});
		});
	}

	// If there is an image inside a slick slider, on image load, resize the slider height
	onSlideLoadLoadImages() {
		const images = document.querySelectorAll('img.lazy');

		[...images].forEach((image) => {
			image.onload = function () {
				const slider = image.closest('.slick-slider.slick-initialized');

				if (slider) {
					slider.slick('setPosition');
				}
			};
		});
	}

	// Reviews section - Read more
	onClickReviewReadMore() {
		const ctas = document.querySelectorAll(
			'.jp-reviews-v2-review-text-more:not(.read-more-enabled)'
		);

		[...ctas].forEach((cta) => {
			cta.classList.add('read-more-enabled');

			cta.addEventListener('click', (e) => {
				const parent = cta.closest('.jp-reviews-v2-review');
				const shortText = cta.closest('.jp-reviews-v2-review-text');
				const longText = parent.querySelector(
					'.jp-reviews-v2-review-text.hide'
				);

				shortText.classList.add('hide');
				longText.classList.remove('hide');
			});
		});
	}

	// Reviews section - Load more items
	onDemandReviewsLoadMore() {
		const self = this;
		const cta = document.querySelector('.jp-reviews-v2-loading-button');
		const filter = document.querySelector('.jp-reviews-v2-filter #sort');
		const container = document.querySelector('.jp-reviews-v2-reviews');

		if (!cta || !filter || !container) {
			return;
		}

		cta.addEventListener('click', (e) => {
			e.preventDefault();
			window.reviewsLoadItems(false);
		});

		filter.addEventListener('change', (e) => {
			window.reviewsLoadItems(true);
		});

		container.addEventListener('scroll', (e) => {
			if (window.innerWidth >= 992) {
				if (
					container.scrollTop + container.offsetHeight >=
					container.scrollHeight
				) {
					window.reviewsLoadItems(false);
				}
			}
		});

		window.reviewsLoadItems = function (reset) {
			const box = document.querySelector('.jp-reviews-v2-box');
			const placeholder = document.querySelector(
				'.jp-reviews-v2-reviews-inner'
			);
			let page = parseInt(box.dataset.page) + 1;
			const sort = filter.value;
			const cat = box.dataset.cat;
			const url = box.dataset.url;
			const nonce = box.dataset.nonce;
			const documentScroll = window.scrollY;
			let placeholderScroll = placeholder.parentNode.scrollTop;

			box.classList.add('loading');

			if (reset) {
				page = 1;
				placeholderScroll = 0;
			}

			const data = new FormData();
			data.append('action', 'get_reviews_v2');
			data.append('nonce', nonce);
			data.append('page', page);
			data.append('sort', sort);
			data.append('cat', cat);

			fetch(url, {
				method: 'post',
				body: data
			})
				.then((response) => response.text())
				.then(function (html) {
					if (html != '') {
						// Insert HTML
						if (reset) {
							placeholder.innerHTML = html;
						} else {
							placeholder.insertAdjacentHTML('beforeend', html);
						}

						// Fix scroll
						window.scrollTo({
							top: documentScroll,
							left: 0
						});
						placeholder.parentNode.scrollTo({
							top: placeholderScroll,
							left: 0
						});

						// Trigger lazy load images
						window.app.lazyLoadWrapper.init();

						// Trigger tooltips
						self.enableTooltips();

						// Trigger like buttons
						window.app.likeButton.init();

						// Trigger read more
						self.onClickReviewReadMore();

						// Update data
						box.dataset.page = page;
					} else {
						box.classList.remove('done');
					}

					box.classList.remove('loading');
				});
		};
	}

	// Modals - Stop the youtube iframe always the modal closes
	stopYoutubeIframeOnModalClose() {
		const modals = document.querySelectorAll('.modal');

		[...modals].forEach((modal) => {
			modal.addEventListener('hidden.bs.modal', (e) => {
				const iframe = modal.querySelector(
					'.iframe-to-load[data-url-value*="youtube.com"]'
				);

				if (iframe) {
					iframe.removeAttribute('src');
				}
			});
		});
	}

	// Enable tooltips everywhere
	enableTooltips() {
		const tooltipTriggerList = [].slice.call(
			document.querySelectorAll('[data-toggle="tooltip"]')
		);

		const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
			// Is Internet Explorer OR Bootstrap is not defined
			if (window.isInternetExplorer || typeof bootstrap === 'undefined') return;
			// If it's NOT Internet Explorer and Bootstrap is defined, so continue...

			return new bootstrap.Tooltip(tooltipTriggerEl);
		});
	}
}
