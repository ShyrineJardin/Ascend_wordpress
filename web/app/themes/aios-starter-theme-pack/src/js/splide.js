(function ($, w, d, h, b) {
  var app = {
    initTeamSlider: function () {  //team slider
      if (document.querySelector('#team-slider')) {
        const teamSlider = new Splide('#team-slider', {
          type: 'loop',
          perPage: 3,
          perMove: 1,
          gap: '1rem',
          autoplay: true,
          interval: 3000, 
          pauseOnHover: true,
          arrows: false,
          pagination: false,
          fixedWidth: 280,
          // gap: 2,
          focus: 'center',
          // trimSpace: false, 
          breakpoints: {
            768: {
              perPage: 1,
              fixedWidth: 0,

            }
          }
        });

        teamSlider.mount();

        const prevBtn = document.getElementById('team-prev');
        const nextBtn = document.getElementById('team-next');

        if (prevBtn && nextBtn) {
          prevBtn.addEventListener('click', function () {  
            teamSlider.go('<');
          });

          nextBtn.addEventListener('click', function () {
            teamSlider.go('>');
          });
        }
      }
    },

    initTestimonialSlider: function () {
      if (document.querySelector('#testimonials-slider')) {  //testimonial slider
        const testimonialSlider = new Splide('#testimonials-slider', {
          type: 'loop',
          perPage: 1,
          arrows: false,
          pagination: false,
          autoplay: true,
          speed: 500,
        });

        testimonialSlider.mount();

        const prevBtn = document.getElementById('testimonial-prev');
        const nextBtn = document.getElementById('testimonial-next');

        if (prevBtn && nextBtn) {
          prevBtn.addEventListener('click', function () {
            testimonialSlider.go('<');
          });

          nextBtn.addEventListener('click', function () {
            testimonialSlider.go('>');
          });
        }
      }
    }
  };

  $(document).ready(function () {
    app.initTeamSlider();
    app.initTestimonialSlider();
  });
})(jQuery, window, document, 'html', 'body'); 
