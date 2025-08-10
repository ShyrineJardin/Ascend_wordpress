(function($, w, d, h, b) {
  var app = {
    initNavigation: function() {
      var $nav = jQuery("#nav");
      if ($nav.length > 0) $nav.navTabDoubleTap();
    },
    initFeaturedProperties: function() {
    },
    initFeaturedCommunities: function() {
    },
    initTestimonials: function() {
      if (document.querySelector(".splide")) {
        new Splide(".splide", {
          type: "loop",
          perPage: 1,
          arrows: true,
          pagination: false,
          speed: 600
        }).mount();
      }
    },
    initHomeSlider: function() {
      if (document.querySelector("#main-slider")) {
        new Splide("#main-slider", {
          type: "loop",
          perPage: 1,
          arrows: true,
          pagination: true,
          autoplay: true,
          speed: 600
        }).mount();
      }
    },
    initQuickSearch: function() {
    },
    initCustomFunction: function() {
    }
  };
  jQuery(document).ready(function() {
    app.initNavigation();
    app.initTestimonials();
    app.initHomeSlider();
  });
  jQuery(window).on("load", function() {
  });
})(jQuery);
