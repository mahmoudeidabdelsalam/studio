{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
<section class="gradient-overlay" style="background-image: url('{{ get_theme_file_uri().'/dist/images/home.png' }}');background-size: cover; background-repeat: no-repeat; background-blend-mode: soft-light, normal, normal; border-radius: 20px;">
  <div class="stripe-bg">
    <div class="stripe-bg__stripe-0"></div>
    <div class="stripe-bg__stripe-1"></div>
    <div class="stripe-bg__stripe-2"></div>
    <div class="stripe-bg__stripe-3"></div>
  </div>

   <div class="container">
     <div class="row justify-content-center">
       <div class="center_text">
         <h1 class="heading">We Create Neat, Usable & Amazing <br>presentations</h1>
         <h5 class="sub_heading"> Hire our most talented design team to design your next presentation and make it <br> mindblowing! or you can get custom branded fully editable templates, you can just change <br> the color, size or even use different graphics from our platform.</h5>
       </div>
     </div>

     <div class="row justify-content-center">
       <ul class="icons">
         <li>
           <img src="{{ get_theme_file_uri().'/dist/images/' }}pp.png">
         </li>
         <li>
           <img src="{{ get_theme_file_uri().'/dist/images/' }}pr.png">
         </li>
         <li>
           <img src="{{ get_theme_file_uri().'/dist/images/' }}gg.png" alt="">
         </li>
       </ul>
     </div>
   </div>
  </section>

  <section>
    <div class="container">
      <div class="row justify-content-center">
        <h5 class="ex">Examples of our work</h5>
      </div>
      <div class="row justify-content-center">
        <h2 class="headline">Little change can be impactful</h2>
      </div>
      <div class="portfolio">
        <div class="row">
          <div class="col-md-6">
            <h4>Before Premast</h4>
            <img src="{{ get_theme_file_uri().'/dist/images/' }}slide.png" alt="">
          </div>
          <div class="col-md-6">
            <h4 class="purple">After Premast</h4>
            <img src="{{ get_theme_file_uri().'/dist/images/' }}slide.png" >
          </div>
          <div class="col-md-12" >
            <div class="full">
              <a  class="btn btn-outline-secondary" href="#">See Full Portfolio</a>
            </div>
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
          <h5>Our Servcies</h5>
          <h2 class="serv-sub">Amazing templates, Ready for your next <br> presentation</h2>
        </div>
      </div>
      <div class="row justify-content-center" id="ServciesTabs">
        <div class="col-md-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link bg-custom active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Refining</a>
            <a class="nav-link bg-custom" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Redesign</a>
            <a class="nav-link bg-custom" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Redraw</a>
            <a class="nav-link bg-custom" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Master Template</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <ul class="list-unstyled">
                <li class="media">
                  <img src="{{ get_theme_file_uri().'/dist/images/' }}file.png" class="mr-3" alt="Set your presentation">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Set your presentation</h5>
                    Your original presentation slides with your content, fonts and designs
                  </div>
                </li>
                <li class="media">
                  <img src="{{ get_theme_file_uri().'/dist/images/' }}sm.png" class="mr-3" alt="Set your presentation">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Fix it with retouches</h5>
                    Using your original presentation including all the element we change it a little bit to look nicer and more professional 
                  </div>
                </li>
                <li class="media">
                  <img src="{{ get_theme_file_uri().'/dist/images/' }}paint.png" class="mr-3" alt="Set your presentation">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Voila!</h5>
                    We will do our best to have your perfect presentation and deliver satisfaction
                  </div>
                </li>                           
              </ul>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <ul class="list-unstyled">
                <li class="media">
                  <img src="{{ get_theme_file_uri().'/dist/images/' }}file.png" class="mr-3" alt="Set your presentation">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Set your presentation</h5>
                    Your original presentation slides with your content, fonts and designs
                  </div>
                </li>
                <li class="media">
                  <img src="{{ get_theme_file_uri().'/dist/images/' }}sm.png" class="mr-3" alt="Set your presentation">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Fix it with retouches</h5>
                    Using your original presentation including all the element we change it a little bit to look nicer and more professional 
                  </div>
                </li>
                <li class="media">
                  <img src="{{ get_theme_file_uri().'/dist/images/' }}paint.png" class="mr-3" alt="Set your presentation">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Voila!</h5>
                    We will do our best to have your perfect presentation and deliver satisfaction
                  </div>
                </li>                           
              </ul>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <ul class="list-unstyled">
                <li class="media">
                  <img src="{{ get_theme_file_uri().'/dist/images/' }}file.png" class="mr-3" alt="Set your presentation">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Set your presentation</h5>
                    Your original presentation slides with your content, fonts and designs
                  </div>
                </li>
                <li class="media">
                  <img src="{{ get_theme_file_uri().'/dist/images/' }}sm.png" class="mr-3" alt="Set your presentation">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Fix it with retouches</h5>
                    Using your original presentation including all the element we change it a little bit to look nicer and more professional 
                  </div>
                </li>
                <li class="media">
                  <img src="{{ get_theme_file_uri().'/dist/images/' }}paint.png" class="mr-3" alt="Set your presentation">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Voila!</h5>
                    We will do our best to have your perfect presentation and deliver satisfaction
                  </div>
                </li>                           
              </ul>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              <ul class="list-unstyled">
                <li class="media">
                  <img src="{{ get_theme_file_uri().'/dist/images/' }}file.png" class="mr-3" alt="Set your presentation">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Set your presentation</h5>
                    Your original presentation slides with your content, fonts and designs
                  </div>
                </li>
                <li class="media">
                  <img src="{{ get_theme_file_uri().'/dist/images/' }}sm.png" class="mr-3" alt="Set your presentation">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Fix it with retouches</h5>
                    Using your original presentation including all the element we change it a little bit to look nicer and more professional 
                  </div>
                </li>
                <li class="media">
                  <img src="{{ get_theme_file_uri().'/dist/images/' }}paint.png" class="mr-3" alt="Set your presentation">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Voila!</h5>
                    We will do our best to have your perfect presentation and deliver satisfaction
                  </div>
                </li>                           
              </ul>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <section id="clients">
    <div class="container">
      <div class="row justify-content-center">
        <h5 class="clients col-12">Our Clients</h5>
        <h2 class="clients col-12">People who loved our work</h2>
        
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
          <div class="w-100 carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="item-custom">
                <img src="{{ get_theme_file_uri().'/dist/images/user.png' }}" alt="Your content is safe with us">
                <h3>Your content is safe with us</h3>
                <p>Ullamco consequat aliqua voluptate pariatur non cupidatat do duis et mollit veniam labore aliqua. Ipsum excepteur irure ad laboris non ipsum sunt voluptate.</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="item-custom">
                <img src="{{ get_theme_file_uri().'/dist/images/user.png' }}" alt="Your content is safe with us">
                <h3>Your content is safe with us</h3>
                <p>Ullamco consequat aliqua voluptate pariatur non cupidatat do duis et mollit veniam labore aliqua. Ipsum excepteur irure ad laboris non ipsum sunt voluptate.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="ready" style="background-image: url({{ get_theme_file_uri().'/dist/images/' }}bg.png); background: linear-gradient(0deg, rgba(40, 47, 57, 0.93), rgba(40, 47, 57, 0.93)),; background-repeat: no-repeat;border-radius: 20px; background-position: center; background-size:cover;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="headings">
          <h2 class="first">Ready to get started?</h2>
          <!-- messing content here  -->   
          <p class="first">Labore nisi laborum ut non cupidatat irure sit elit in reprehenderit veniam laborum et et. Labore mollit aliqua et sunt dolore cillum.</p>
        </div>
      </div>

      <div class="container">
        <br/><br/>
        <ul class="list-unstyled multi-steps">
          <li class="step"><strong>Submit Project</strong> <p>Simply submit project details and delivery time</p></li>
          <li class="step"><strong>Approve our Quote</strong> <p>We send you a quote and a plan within a short manner of time</p></li>
          <li class="step"><strong>Drafting</strong> <p>You will get an initial draft for your project design to revise it</p></li>
          <li class="step"><strong>Delivering</strong> <p>The final version of the project is delivered to you</p></li>
        </ul>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          <a href="#" class="button-green mx-auto my-5 col-md-4 col-12">request your presentation</a>
        </div>
      </div>
    </div>
  </section>
  @endwhile
@endsection
