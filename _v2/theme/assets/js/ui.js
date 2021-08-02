// Add jquery plugin to change the element type
(function($) {
    $.fn.changeElementType = function(newType) {
        let attrs = {};
        let newElements;
        let newElement;

        this.each(function () {
            attrs = {};

            $.each(this.attributes, function () {
                attrs[this.nodeName] = this.nodeValue;
            });

            newElement = $("<" + newType + "/>", attrs).append($(this).contents());

            $(this).replaceWith(newElement);

            if (!newElements) {
                newElements = newElement;
            } else {
                $.merge(newElements, newElement);
            }
        });

        return $(newElements);
    };
})(jQuery);

let resizeTables = () => {
    if (window.matchMedia('(min-width: 992px)').matches) {
        // On a bigger screen, move the headings from within each column back to the top
        let $tableHeadings = jQuery(".jp-data-table-columns .jp-data-table-column div.jp-data-table-card");
        if ($tableHeadings.length > 0) {
            $tableHeadings = $tableHeadings.changeElementType("li");
            jQuery(".jp-data-table-cards").prepend($tableHeadings);
        }
    }
    else {
        // On a smaller screen, move the headings from the top to within each column
        let $tableHeadings = jQuery(".jp-data-table-cards li.jp-data-table-card");
        if ($tableHeadings.length > 0) {
            $tableHeadings = $tableHeadings.changeElementType("div");
            $tableHeadings.each(function(index) {
                jQuery(".jp-data-table-columns .jp-data-table-column[data-treatment-option='" + jQuery(this).data('treatment-option') + "'").prepend(jQuery(this));
            });
        }
    }
};

jQuery(document).ready(function() {

    // If there are tables, move the headings to the corresponding place based on the window width
    if (jQuery(".jp-data-table").length>0) {
        jQuery(window).on("resize", function() {
            resizeTables();
        });

        resizeTables();
    }

    // slider code
    jQuery('.jp-masthead-box-slider').width('auto');
    jQuery('.jp-masthead-box-slider-wrapper').marquee({
        speed: 50,
        gap: 0,
        delayBeforeStart: 1000,
        direction: 'left',
        duplicated: true,
        startVisible: true,
        pauseOnHover: true
    })

	// Adjust Location Template Masthead
	let $window = jQuery(window);

	function checkWidth() {
		let windowSize = $window.width();

		if (windowSize > 1200) {
			let highlightHeight = jQuery('.locations-template .jp-masthead-v2-highlight').outerHeight();
			let mastHeadBottomPadding = 80 + highlightHeight/2;
			let highlightsTopPadding = 120 + highlightHeight/2;
			if (!jQuery('.locations-template .jp-masthead-v2').hasClass('padded')) {
				jQuery('.locations-template .jp-masthead-v2').addClass('padded');
			};

			jQuery('.locations-template .jp-masthead-v2').css({'padding-bottom' : mastHeadBottomPadding});
			jQuery('.locations-template .jp-highlights').css({'padding-top' : highlightsTopPadding });
		} else {
			if (jQuery('.locations-template .jp-masthead-v2').hasClass('padded')) {

				jQuery('.locations-template .jp-masthead-v2').css('padding-bottom', '');
				jQuery('.locations-template .jp-highlights').css('padding-top', '');

				jQuery('.locations-template .jp-masthead-v2').removeClass('padded');
			}
		}
	}
	// Execute on load
	checkWidth();
	jQuery(window).resize(checkWidth);
});
