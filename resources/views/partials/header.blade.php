<header class="wrap">
  <nav class="navbar navbar-expand-lg navbar-light p-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="{{ home_url('/') }}" title="{{ get_bloginfo('name') }}">
        <img class="img-fluid" src="@if(get_field('website_logo', 'option')) {{ the_field('website_logo','option') }} @else {{ get_theme_file_uri().'/dist/images/logo.png' }} @endif" alt="{{ get_bloginfo('name', 'display') }}" title="{{ get_bloginfo('name') }}"/>
        <span class="sr-only"> {{ get_bloginfo('name') }} </span>
      </a>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'navbar-nav mr-auto mt-2 mt-lg-0', 'walker' => new NavWalker()]) !!}
      @endif
      <a href="#" class="button-green">request your presentation</a>
    </div>
  </nav>
</header>
