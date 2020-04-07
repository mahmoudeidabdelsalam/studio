<footer class="content-info bg-gray-dark">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-md-9 col-sm-12 col-12">
        <div class="navbar-footer">
          <h3 class="sr-only">{{ _e('Footer navigation', 'premast') }}</h3>
          @if (has_nav_menu('footer_navigation'))
            {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'container' => false, 'menu_class' => 'navbar', 'walker' => new NavWalker()]) !!}
          @endif
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-12 p-0">
        <a class="navbar-brand mt-2 mb-4" href="{{ home_url('/') }}" title="{{ get_bloginfo('name') }}">
          <img class="img-fluid" src="@if(get_field('white_website_logo', 'option')) {{ the_field('white_website_logo','option') }} @else {{ get_theme_file_uri().'/dist/images/logo-white.png' }} @endif" alt="{{ get_bloginfo('name', 'display') }}" title="{{ get_bloginfo('name') }}"/>
          <span class="sr-only"> {{ get_bloginfo('name') }} </span>
        </a>
        <div class="more-informtion">
        </div>
      </div>
    </div>
  </div>
</footer>


<section class="copyright">
  <h3 class="sr-only">{{ _e('Copyright © 2018 Premast-powerpoint design solutions. All rights reserved.', 'premast') }}</h3>
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-md-5 col-12">
        @if (has_nav_menu('copyright_navigation'))
          {!! wp_nav_menu(['theme_location' => 'copyright_navigation', 'container' => false, 'menu_class' => 'copyright', 'walker' => new NavWalker()]) !!}
        @endif
      </div>
      <div class="col-md-4 text-left">
        {{ _e('© 2020 Premast Company. All rights reserved.', 'premast') }}
      </div>
      <div class="col-md-3 col-12">
        @if( have_rows('social_networks', 'option') )
          <ul class="list-inline text-right m-0 social-btns">
            <li class="head">{{ _e('Follow Us', 'premast') }}</li>
            @while ( have_rows('social_networks', 'option') ) @php the_row(); @endphp
              <li class="list-inline-item"><a class="network" href="{{ the_sub_field('network_link', 'option') }}"><i class="fa {{ the_sub_field('network_icon', 'option') }}"></i></a></li>
            @endwhile
          </ul>
        @endif
      </div>
    </div>
  </div>
</section>



<style>
.more-informtion .mores p {
  font-weight: normal;
  font-size: 12px;
  line-height: 16px;
  letter-spacing: 0.04px;
  color: #BEC6D2;
}

.more-informtion .mores p strong {
  display: block;
  font-weight: bold !important;
  font-size: 18px;
  line-height: 27px;
  letter-spacing: 0.04px;
  color: #FFFFFF;
}

.more-informtion {
  display: flex;
}

.more-informtion .mores {
  width: 50%;
}

.footer-secure {
  font-style: normal;
  font-weight: normal;
  font-size: 12px;
  line-height: 16px;
  letter-spacing: 0.04px;
  color: #F9F9F9;
  display: flex;
  align-items: center;
}

.footer-secure img {
  max-width: 190px;
  margin-left: 10px;
}

.social-btns .network,
.social-btns .network:before,
.social-btns .network .fa {
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
  -webkit-transition-timing-function: cubic-bezier(0.31, -0.105, 0.43, 1.59);
  transition-timing-function: cubic-bezier(0.31, -0.105, 0.43, 1.59);
}

.social-btns .network:before {
  top: 90%;
  left: -110%;
}

.social-btns .network .fa {
  -webkit-transform: scale(0.8);
  transform: scale(0.8);
}

.social-btns .network:focus:before,
.social-btns .network:hover:before {
  top: -10%;
  left: -10%;
  background-color: #1d6dfa;
}

.social-btns .network:focus .fa,
.social-btns .network:hover .fa {
  color: #fff;
  -webkit-transform: scale(1);
  transform: scale(1);
}

.social-btns {
  display: flex;
  white-space: nowrap;
  align-items: center;
  padding-top: 10px;
  padding-bottom: 10px;
}

.social-btns .network {
  width: 30px;
  height: 30px;
  background: #DFE3E8;
  border-radius: 8px;
  margin: 0 5px;
  text-align: center;
  position: relative;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
}

.social-btns .network:before {
  content: '';
  width: 120%;
  height: 120%;
  position: absolute;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.social-btns .network .fa {
  font-size: 22px;
  vertical-align: middle;
}

.social-btns li.head {
  font-style: normal;
  font-weight: bold;
  font-size: 14px;
  line-height: 21px;
  letter-spacing: 0.04px;
  color: #FFFFFF;
  mix-blend-mode: normal;
  margin-right: 20px;
}

.social-btns .list-inline-item {
  margin: 0 !important;
}
footer .navbar-footer .navbar .menu-item-has-children {
    width: 22%;
}

ul.copyright {
    white-space: nowrap;
    margin: 0;
}

ul.copyright li {
    margin: 0 !important;
}

ul.copyright a {
    font-weight: bold;
    font-size: 14px;
    line-height: 21px;
    letter-spacing: 0.04px;
    color: #FFFFFF;
}
</style>

