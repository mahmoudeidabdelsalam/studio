<section id="wrapper" class="mb-5">
  <div class="wrapper active-page1">
    @php $counter = 0; @endphp
    @while(have_posts()) @php the_post() @endphp
      @php $counter++; @endphp
      <style>
        .active-page<?= $counter; ?> .page<?= $counter; ?> {
          display: block;
        }
      </style>
      <div class="page page<?= $counter; ?>">
        <div class="container">
          <div class="row align-content-center">
            <div class="col-md-6 col-12 the-content">
              <h2>{!! get_the_title() !!}</h2>
              <p class="meta-post"><span>{{ the_field('date_project') }}</span> <span>{{ the_field('category_project') }}</span> <span>{{ the_field('number_of_slides') }} {{ _e('slides', 'premast') }}</span></p>
              @php the_content() @endphp
              <a href="<?= get_the_permalink(); ?>" class="button-outline">check full project</a>
            </div>
            <div class="col-md-6 col-12">
              <div class="ItemImage">
                <img src="<?= the_field('slide_in_portfolio'); ?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    @endwhile
  </div>

  <div class="nav-panel">
    <div class="scroll-btn up"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
    <nav>
      <ul>
        @php $counter = 0; @endphp
        @while(have_posts()) @php the_post() @endphp
          @php $counter++; @endphp
          <li data-target="<?= $counter; ?>" class="nav-btn nav-page<?= $counter; ?> <?= ($counter == 1)? 'active':''; ?>"></li>
        @endwhile
      </ul>
    </nav>
    <div class="scroll-btn down"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script>
  jQuery(function ($) {
    var $wrap = $(".wrapper"),
      pages = $(".page").length,
      scrolling = false,
      currentPage = 1,
      $navPanel = $(".nav-panel"),
      $scrollBtn = $(".scroll-btn"),
      $navBtn = $(".nav-btn");

    function manageClasses() {
      $wrap.removeClass(function (index, css) {
        return (css.match(/(^|\s)active-page\S+/g) || []).join(' ');
      });
      $wrap.addClass("active-page" + currentPage);
      $navBtn.removeClass("active");
      $(".nav-btn.nav-page" + currentPage).addClass("active");
      scrolling = true;
    }

    function navigateUp() {
      if (currentPage > 1) {
        currentPage--;
        if (Modernizr.csstransforms) {
          manageClasses();
        } else {
          $wrap.animate({
            "top": "-" + ((currentPage - 1) * 100) + "%"
          }, 1000);
        }
      }
    }

    function navigateDown() {
      if (currentPage < pages) {
        currentPage++;
        if (Modernizr.csstransforms) {
          manageClasses();
        } else {
          $wrap.animate({
            "top": "-" + ((currentPage - 1) * 100) + "%"
          }, 1000);
        }
      }
    }

    $(document).on("mousewheel DOMMouseScroll", function (e) {
      if (!scrolling) {
        if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
          navigateUp();
        } else {
          navigateDown();
        }
      }
    });

    $(document).on("click", ".scroll-btn", function () {
      if ($(this).hasClass("up")) {
        navigateUp();
      } else {
        navigateDown();
      }
    });

    $(document).on("click", ".nav-btn:not(.active)", function () {
      if (!scrolling) {
        var target = $(this).attr("data-target");
        if (Modernizr.csstransforms) {
          $wrap.removeClass(function (index, css) {
            return (css.match(/(^|\s)active-page\S+/g) || []).join(' ');
          });
          $wrap.addClass("active-page" + target);
          $navBtn.removeClass("active");
          $(this).addClass("active");
          $navPanel.addClass("invisible");
          currentPage = target;
          scrolling = true;
          setTimeout(function () {
            $navPanel.removeClass("invisible");
            scrolling = false;
          }, 1000);
        } else {
          $wrap.animate({
            "top": "-" + ((target - 1) * 100) + "%"
          }, 1000);
        }
      }
    });

  });
</script>

<style>
  section#wrapper {
    position: relative;
    min-height: 600px;
    background: #282F39;
    border-radius: 20px;
  }

  .nav-panel {
    position: absolute;
    top: 30%;
    right: 4%;
    z-index: 1000;
    display: flex;
    justify-content: center;
    flex-flow: column;
    counter-reset: section;
  }

  .nav-panel ul {
    list-style-type: none;
    padding: 0;
    margin: 20px 0 !important;
    background: rgba(255, 255, 255, 0.3);
    width: 3px;
    left: 7px;
    position: relative;
  }

  .page {
    position: absolute;
    width: 100%;
    height: 100%;
    display: none;
  }

  .button-outline {
    border: 1px solid #3F4A59;
    box-sizing: border-box;
    border-radius: 30px;
    padding: 5px 28px;
    margin: 5px 15px;
    position: relative;
    z-index: 99;
  }  

  .the-content {
    display: flex;
    flex-flow: column;
    justify-content: center;
    flex-wrap: wrap;
    color: #fff;
  }

  .the-content .button-outline {
    font-size: 16px;
    line-height: 19px;
    text-align: center;
    letter-spacing: 0.116946px;
    text-transform: capitalize;
    color: #F9F9F9;
    flex: none;
    order: 0;
    align-self: center;
    margin: 10px 0px;
    margin-right: auto;
    padding: 10px 30px;
  } 
  
  .ItemImage {
    height: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .scroll-btn {
    color: #FFFFFF;
    cursor: pointer;
  }

  .nav-panel ul li {
    height: 23px;
    background-color: #fff;
    opacity: 0;
  }

  .nav-panel ul li.active {
    opacity: 1;
  }

  .nav-panel nav {
    margin: 0;
    width: 0 !important;
    display: inline-block;
  }

  .nav-panel ul li:after {
    counter-increment: section;
    content: counter(section);
    position: relative;
    right: 15px;
    color: #fff;
    opacity: 0;
  }

  .nav-panel ul li.active:after {
    opacity: 1;
  }
</style>