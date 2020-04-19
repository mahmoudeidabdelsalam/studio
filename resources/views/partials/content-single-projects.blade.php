<section class="bannerTop" style="background-image: url({{ the_field('bg_single_project') }});background-repeat: no-repeat;border-radius: 20px; background-position: center; background-size:cover;min-height:490px;">
  <div class="container">
    <div class="headings">
      <h1>{!! get_the_title() !!}</h1>
      <p class="meta-post"><span>{{ the_field('date_project') }}</span> <span>{{ the_field('category_project') }}</span> <span>{{ the_field('number_of_slides') }} {{ _e('slides', 'premast') }}</span></p>
      <!-- messing content here  -->   
      @php the_content() @endphp
    </div>
  </div>
</section>

@if( have_rows('before_after_examples') )
  <section id="before_after" class="my-5">
    <div class="container">
      <div class="row justify-content-center">
        <h2 class="ex">{{ _e('Before & After Examples', 'premast') }}</h2>
      </div>
      <div class="portfolio">
        <div class="row">
          <div class="col-md-6">
            <h4>Before Premast</h4>
          </div>
          <div class="col-md-6">
            <h4>After Premast</h4>
          </div>
        </div>
        <ul id="slidePortfolio">
          @while ( have_rows('before_after_examples') ) @php the_row() @endphp
            <li class="item">
              <div class="row m-0">
                <div class="col-md-6">
                  <img class="img-fluid" src="{{ the_sub_field('before_ex') }}" alt="Before Premast">
                </div>
                <div class="col-md-6">
                  <img class="img-fluid" src="{{ the_sub_field('after_ex') }}" alt="After Premast">
                </div>
              </div>
            </li>
          @endwhile
        </ul>
        <ul class="customButtons">
          <li><button id="goToPrevSlide"><i class="fa fa-angle-left"></i></button></li>
          <li><button id="goToNextSlide"><i class="fa fa-angle-right"></i></button></li>
        </ul>
      </div>
    </div>
  </section>
@endif

<?php 
  $images = get_field('more_slides');
  if( $images ): 
?>
  <section id="horizontalScroll">
    <h2>{{ _e('More slides', 'premast') }}</h2>
    <main class="grid-item mainScroll">
      <div class="items">
        <?php foreach( $images as $image ): ?>
          <div class="item"><img src="<?= $image; ?>" alt="Clients Premast" /></div>
        <?php endforeach; ?>
      </div>
    </main>
  </section>
<?php endif; ?>

<section class="ButtonsFooter" style="background-color:#E5E5E5;">
  <div class="container">
    <div class="row align-content-center justify-content-between">
      <h2>{{ _e('Ready to order yours?', 'premast') }}</h2>
      <div class="custom-buttons">
        <a href="#" class="button-outline">buy ready editable presentations</a>
        <?php 
        $link = get_field('link_page_request', 'option');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a class="button-green" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<style>
  section.bannerTop {
    display: flex;
    font-size: 14px;
    line-height: 21px;
    text-align: center;
    letter-spacing: 0.04px;
    color: #F9F9F9;
    align-items: center;
  }

  section.bannerTop p {
    margin: 0;
  }

  section.bannerTop p.meta-post {
    margin: 15px 0 30px;
  }

  section.bannerTop p.meta-post span:not(:last-child):after {
    content: "";
    display: inline-block;
    height: 15px;
    width: 1px;
    border: 0.5px solid #BEC6D2;
    margin: 0 10px;
    position: relative;
    top: 3px;
  }

  .portfolio h4 {
    font-weight: bold;
    font-size: 18px;
    line-height: 27px;
    color: #1E6DFB;
    margin-top: 40px;
  }

  .items::-webkit-scrollbar {
    height: 4px;
    background-color: rgba(255, 255, 255, 0.2);
  }

  .items::-webkit-scrollbar-thumb {
    background: #fff;
    border-radius: 4px;
  }

  .grid-container {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: auto 1fr auto;
  }

  @media screen and (max-width: 500px) {
    .grid-container {
      grid-template-columns: 1fr;
      grid-template-rows: 0.3fr 1fr auto 1fr;
    }
  }

  section#horizontalScroll {
    background-color: #282F39;
    height: 450px;
    margin: 30px -30px 0;
    position: relative;
    overflow: hidden;
    padding-top: 40px;
    padding-bottom: 40px;
  }

  section#horizontalScroll h2 {
    color: #fff;
    text-align: center;
    margin-bottom: 30px;
  }

  .items {
    position: relative;
    width: 100%;
    overflow-x: scroll;
    overflow-y: hidden;
    white-space: nowrap;
    transition: all 0.2s;
    transform: scale(0.98);
    will-change: transform;
    user-select: none;
    cursor: pointer;
  }

  .items.active {
    cursor: grabbing;
    cursor: -webkit-grabbing;
    transform: scale(1);
  }

  .item {
    display: inline-block;
    min-height: 250px;
    min-width: 400px;
    margin: 2em 1em;
  }

  .item img {
    height: 220px;
    width: auto;
    max-width: 100%;
  }

  @media screen and (max-width: 500px) {
    .item {
      min-height: 200px;
      min-width: 200px;
    }
  }

  section.ButtonsFooter {
    margin: 0 -30px;
    position: relative;
    padding: 42px 0 25px;
  }

  .custom-buttons {
    margin-bottom: 0.5rem;
    display: flex;
    justify-content: center;
    align-items: center;
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
</style>

<?php if( $images ): ?>
<script>
  jQuery(function ($) {
    const slider = document.querySelector('.items');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
      isDown = true;
      slider.classList.add('active');
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
      isDown = false;
      slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
      isDown = false;
      slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 3; //scroll-fast
      slider.scrollLeft = scrollLeft - walk;
      console.log(walk);
    });
  });
</script>
<?php endif; ?>