export default {
  init() {
    // JavaScript to be fired on all pages

    $(document).ready(function () {
      $('.gradient-overlay').addClass('bg-closed');
      setInterval(function () {
        $('.gradient-overlay').toggleClass('bg-open').toggleClass('bg-closed');
      }, 2000);
    });

    var slider = $('#slidePortfolio').lightSlider({
      item: 1,
      loop: false,
      slideMove: 1,
      slideMargin: 0,
      easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
      speed: 600,
      controls: false,
      pager: false,
    }); 

    $('#goToPrevSlide').click(function () {
      slider.goToPrevSlide();
    });
    $('#goToNextSlide').click(function () {
      slider.goToNextSlide();
    });

    $('#Clients').lightSlider({
      item: 5,
      loop: false,
      slideMove: 2,
      easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
      speed: 600,
      responsive: [
        {
          breakpoint: 800,
          settings: {
            item: 3,
            slideMove: 1,
            slideMargin: 6,
          },
        },
        {
          breakpoint: 480,
          settings: {
            item: 2,
            slideMove: 1,
          },
        },
      ],
    });  

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
