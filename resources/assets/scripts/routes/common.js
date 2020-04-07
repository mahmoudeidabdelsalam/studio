export default {
  init() {
    // JavaScript to be fired on all pages

    $(document).ready(function () {
      $('.gradient-overlay').addClass('bg-closed');
      setInterval(function () {
        $('.gradient-overlay').toggleClass('bg-open').toggleClass('bg-closed');
      }, 2000);
    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
