{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <section class="gradient-overlay" style="background-image: url('{{ the_field('bg_banner') }}');background-size: cover; background-repeat: no-repeat; background-blend-mode: soft-light, normal, normal; border-radius: 20px;">
    <div class="stripe-bg">
      <div class="stripe-bg__stripe-0"></div>
      <div class="stripe-bg__stripe-1"></div>
      <div class="stripe-bg__stripe-2"></div>
      <div class="stripe-bg__stripe-3"></div>
    </div>
   <div class="container">
     <div class="row justify-content-center">
       <div class="center_text">
         <h1 class="heading">{{ the_field('headline_banner') }}</h1>
         <h5 class="sub_heading">{{ the_field('sub_headline_banner') }}</h5>
       </div>
     </div>
     <div class="row justify-content-center">
       <ul class="icons">
         <li>
           <img src="{{ the_field('icons_banner') }}" alt="{{ the_field('headline_banner') }}">
         </li>
       </ul>
     </div>
   </div>
  </section>

  <section>
    <div class="container">
      <div class="row justify-content-center">
        <h5 class="ex">{{ the_field('sub_headline_ex') }}</h5>
      </div>
      <div class="row justify-content-center">
        <h2 class="headline">{{ the_field('headline_ex') }}</h2>
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
          @if( have_rows('slide_ex') )
            @while ( have_rows('slide_ex') ) @php the_row() @endphp
              <li class="item">
                <div class="row m-0">
                  <div class="col-md-6">
                    <img class="img-fluid" src="{{ the_sub_field('before_slide') }}" alt="Before Premast">
                  </div>
                  <div class="col-md-6">
                    <img class="img-fluid" src="{{ the_sub_field('after_slide') }}" alt="After Premast">
                  </div>
                </div>
              </li>
            @endwhile
          @endif
        </ul>
        <ul class="customButtons">
          <li><button id="goToPrevSlide"><i class="fa fa-angle-left"></i></button></li>
          <li><button id="goToNextSlide"><i class="fa fa-angle-right"></i></button></li>
        </ul>
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <?php 
              $link = get_field('link_page_ex');
              if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
                <a class="btn btn-outline-secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="background: #282F39; border-radius: 20px; margin:30px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="serv">
          <h5>{{ the_field('sub_headline_service') }}</h5>
          <h2 class="serv-sub">{{ the_field('headline_service') }}</h2>
        </div>
      </div>
      <div class="row justify-content-center" id="ServciesTabs">
        <div class="col-md-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            @if( have_rows('our_services') )
              @while ( have_rows('our_services') ) @php the_row() @endphp
                <a class="nav-link bg-custom {{ (get_row_index() == 1)? 'active':'' }}" id="v-pills-{{get_row_index()}}-tab" data-toggle="pill" href="#v-pills-{{get_row_index()}}" role="tab" aria-controls="v-pills-{{get_row_index()}}" aria-selected="true">{{ the_sub_field('headline_service') }}</a>
              @endwhile
            @endif
          </div>
        </div>
        <div class="col-md-6">
          <div class="tab-content" id="v-pills-tabContent">
            @if( have_rows('our_services') )
              @while ( have_rows('our_services') ) @php the_row() @endphp
                <div class="tab-pane fade {{ (get_row_index() == 1)? 'show active':'' }}" id="v-pills-{{get_row_index()}}" role="tabpanel" aria-labelledby="v-pills-{{get_row_index()}}-tab">
                  <ul class="list-unstyled">
                    @if( have_rows('list_services') )
                      @while ( have_rows('list_services') ) @php the_row() @endphp
                        <li class="media">
                          <img src="{{ the_sub_field('icon_service') }}" class="mr-3" alt="{{ the_sub_field('content_service') }}">
                          <div class="media-body">
                            {{ the_sub_field('content_service') }}
                          </div>
                        </li>
                      @endwhile
                    @endif                                              
                  </ul>
                </div>
              @endwhile
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="clients">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <h5 class="clients col-12">{{ the_field('sub_headline_clients') }}</h5>
        <h2 class="clients col-12">{{ the_field('headline_our_clients') }}</h2>
        <?php 
          $images = get_field('logos_our_clients');
          if( $images ): 
        ?>
        <div class="col-12 mt-5">
          <ul id="Clients">
            <?php foreach( $images as $image ): ?>
              <li class="item"><img src="<?= $image; ?>" alt="Clients Premast" /></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
          <div class="w-100 carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="item-custom">
                <img src="{{ get_theme_file_uri().'/dist/images/user.png' }}" alt="Your content is safe with us">
                <h3>{{ the_field('headline_box_client') }}</h3>
                <p>{{ the_field('content_box_client') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="ready" style="background-image: url({{ the_field('bg_started') }}); background: linear-gradient(0deg, rgba(40, 47, 57, 0.93), rgba(40, 47, 57, 0.93)),; background-repeat: no-repeat;border-radius: 20px; background-position: center; background-size:cover;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="headings">
          <h2 class="first">{{ the_field('headline_started') }}</h2>
          <!-- messing content here  -->   
          <p class="first">{{ the_field('content_started') }}</p>
        </div>
      </div>
      <div class="container">
        <br/><br/>
        <ul class="list-unstyled multi-steps">
          @if( have_rows('list_step_started') )
            @while ( have_rows('list_step_started') ) @php the_row() @endphp
              <li class="step"><strong>{{ the_sub_field('headline_step') }}</strong> <p>{{ the_sub_field('content_step') }}</p></li>
            @endwhile
          @endif 
        </ul>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          <?php 
          $link = get_field('link_request');
          if( $link ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a class="button-green mx-auto my-5 col-md-4 col-12" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  @endwhile
@endsection
