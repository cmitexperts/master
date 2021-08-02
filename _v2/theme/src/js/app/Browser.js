// Browser
export default class Browser {

    // Constructor
    constructor() {
        this.html = null;

        this.os = null;
        this.browser = null;
        this.version = null;
        this.orientation = null;

        this.dataOS = [
            {string: navigator.userAgent, subString: 'Windows', identity: 'Windows'},
            {string: navigator.userAgent, subString: 'iPhone', identity: 'iOS'},
            {string: navigator.userAgent, subString: 'iPad', identity: 'iOS'},
            {string: navigator.userAgent, subString: 'Mac', identity: 'MacOS'},
        ];

        this.dataBrowser = [
            {string: navigator.userAgent, subString: 'Edge', identity: 'MS Edge'},
            {string: navigator.userAgent, subString: 'MSIE', identity: 'Explorer'},
            {string: navigator.userAgent, subString: 'Trident', identity: 'Explorer'},
            {string: navigator.userAgent, subString: 'Firefox', identity: 'Firefox'},
            {string: navigator.userAgent, subString: 'Opera', identity: 'Opera'},
            {string: navigator.userAgent, subString: 'OPR', identity: 'Opera'},
            {string: navigator.userAgent, subString: 'Chrome', identity: 'Chrome'},
            {string: navigator.userAgent, subString: 'Safari', identity: 'Safari'}
        ];
    }

    // Init before frameworks
    init() {
        this.html = document.querySelector('html');

        this.os = this.searchString(this.dataOS) || 'Other';
        this.browser = this.searchString(this.dataBrowser) || 'Other';
        this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || 'Unknown';

        this.checkOrientation();
		window.onorientationchange = this.checkOrientation.bind(this);

        this.addHtmlClass();
    }

    searchString(data) {
        for (var i = 0; i < data.length; i++) {
            const dataString = data[i].string;
            this.versionSearchString = data[i].subString;

            if (dataString.indexOf(data[i].subString) !== -1) {
                return data[i].identity;
            }
        }
    }

    searchVersion(dataString) {
        const index = dataString.indexOf(this.versionSearchString);
        const rv = dataString.indexOf('rv:');

        if (index === -1) {
            return;
        }

        if (this.versionSearchString === 'Trident' && rv !== -1) {
            return parseFloat(dataString.substring(rv + 3));
        } else {
            return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
        }
    }

    checkOrientation() {
        this.orientation = 'Default';

        if (window.orientation) {
            if (Math.abs(window.orientation) === 90) {
                this.orientation = 'Landscape';
            }
        }

        this.addOrientationHtmlClass();
    }

    addHtmlClass() {
        const osv = this.os;
        const bv = this.browser;

        if (osv == 'Windows') {
            this.html.classList.add('windows');
        } else if (osv == 'MacOS') {
            this.html.classList.add('macos');
        }

        if (bv == 'Chrome') {
            this.html.classList.add('chrome');
        } else if (bv == 'MS Edge') {
            this.html.classList.add('edge');
        } else if (bv == 'Explorer') {
            this.html.classList.add('ie');
        } else if (bv == 'Firefox') {
            this.html.classList.add('firefox');
        } else if (bv == 'Safari') {
            this.html.classList.add('safari');
        }
    }

    addOrientationHtmlClass() {
        const o = this.orientation;

        this.html.classList.remove('o-landscape');
        this.html.classList.remove('o-default');

        if (o == 'Landscape') {
            this.html.classList.add('o-landscape');
        } else if (o == 'Default') {
            this.html.classList.add('o-default');
        }
    }

}
