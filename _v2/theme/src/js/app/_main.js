import App from './App';

// Is Internet Explorer
window.isInternetExplorer = /MSIE \d|Trident.*rv:/.test(navigator.userAgent);

// Main base class
window.app = new App();

// On DOM ready
window.app.onDomReady();
