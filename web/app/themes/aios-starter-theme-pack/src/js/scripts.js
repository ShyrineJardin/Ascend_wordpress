(function ($, w, d, h, b) {
    var app = {

        initNavigation: function () {
            var $nav = jQuery('#nav');
            if ($nav.length > 0) $nav.navTabDoubleTap();
        },

        initFeaturedProperties: function () {
            // Put featured properties code here
        },

        initFeaturedCommunities: function () {
            // Put featured communities code here
        },

        initTestimonials: function () {
            if (document.querySelector('.splide')) {
                new Splide('.splide', {
                    type: 'loop',
                    perPage: 1,
                    arrows: true,
                    pagination: false,
                    speed: 600,
                }).mount();
            }
        },

        initHomeSlider: function () { 
            if (document.querySelector('#main-slider')) {
                new Splide('#main-slider', {
                    type: 'loop',
                    perPage: 1,
                    arrows: true,
                    pagination: true,
                    autoplay: true,
                    speed: 600,
                }).mount();
            }
        },

        initQuickSearch: function () {
            // Put quick search code here
        },

        initCustomFunction: function () {
            // Add more functions if needed
        }
    }

    jQuery(document).ready(function () {
        app.initNavigation();
        app.initFeaturedProperties();
        app.initFeaturedCommunities();
        app.initTestimonials();
        app.initHomeSlider(); 
        app.initQuickSearch();
    });

    jQuery(window).on('load', function () {
        // any on-load logic here
    });

})(jQuery, window, document, 'html', 'body');
